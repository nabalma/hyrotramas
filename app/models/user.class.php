<?php

class User {

        // Les variables de collecte des erreurs.      
    private $signUperror = "";  // Collecte des erreurs du SignUp
    private $loginerror = "";  // Collecte des erreurs du SignUp
       
/*----------------------------------------------------------------------------------------------------------- */
// ----------------------------------- SIGN UP FONCTION  ----------------------------------------------------
/*----------------------------------------------------------------------------------------------------------- */
    public function signUp($post){
                
          
              $acceptconditions="0";

              //1.1 -- Instanciation de la BD, Ne pas instancier une db car il se peut qune soit deja instancier quelque part. Faire plutot get instance...
              $db=Database::getDbInstance();
            
              //1.2 -- Collecte des donnees recues 
              $nom = trim($post['nom']);
              $prenom = trim($post['prenom']);
              $email = trim($post['email']);
            
              $motdepasse = trim($post['motdepasse']);
              $confirmmotdepasse =trim($post['confirmmotdepasse']);
              $profil =trim($post['profil']);

              if(isset($post['acceptconditions'])){
                 $acceptconditions=trim($post['acceptconditions']);
              }
              $approbation=0;
              $approbateur="";
             
          
 
            /*    1.3 -- Validation du nom
                  --------------------------------------------------------------------------------
            */

              if(empty($nom)){
                  $this->signUperror.=" - Prière entrez un nom valide. Le champ nom ne doit pas être vide ! <br>";
              };


              
            /*    1.3 -- Validation du prenom (firstname)
                  --------------------------------------------------------------------------------
            */

            if(empty($prenom)){
              $this->signUperror.=" - Prière entrez un prénom valide. Le champ nom ne doit pas être vide !  <br>";
          };


              /* 1.4 -- Validation de lemail
                  --------------------------------------------------------------------------------
            */

              if(empty($email) ){
                  $this->signUperror.=" - Prière entrez un email valide. Le champ email ne doit pas être vide !  <br>";
              } 


              /* 1.5 -- Validation of password input
                  --------------------------------------------------------------------------------
            */
            if(empty($motdepasse) OR empty($confirmmotdepasse)){
              $this->signUperror.=" - Les champs mots de passe ne doivent pas être vides. dE PLUS, les mots de passe valides sont de 8 à 12 caractères ! .  <br>";
          } 

          /*1.6 -- Checking the Matching of the two passwords provided */

          if($motdepasse !== $confirmmotdepasse){
              $this->signUperror.=" - Les mots de passe entrés ne correspondant pas  Merci de réessayer !<br>";
          }

          if($acceptconditions!="1"){
            $this->signUperror.=" - Vous devez d'abord accepter les conditions !<br>";
        }
       
            /*  Saving the user in the db 
          --------------------------------------------------------------------------------*/
          if($this->signUperror==""){

                    // before saving the user, check if the email is not yet already in the database
                    $query="SELECT * FROM users WHERE email =:email";
                    $data["email"]=$email;
                    $check=$db->read($query,$data);

                    if(count($check)>0){
                        $this->signUperror.="Oups, cet email existe déja dans le système. Merci de choisir un autre ! <br>";
                    }else
                    
                    
                    {

                    //Password Encryption
                  $hashed_password = password_hash($motdepasse, PASSWORD_DEFAULT);
                
                  // Enregistrement de lutilisateur et affichage du message de succees 
                    // Parametrized query. The values are preceded with : with the same names of the database table column names
                  $query ="INSERT INTO users(nom,prenom,email,motdepasse,profil,acceptconditions,approbation,approbateur) VALUES(:nom,:prenom,:email,:motdepasse,:profil,:acceptconditions,:approbation,:approbateur)";
                  
                    // The data to be used to execute the request. data is an array Object. its values will be the parameters of the query
                    $data["nom"]=$nom;
                    $data["prenom"]= $prenom;
                    $data["email"]=$email;

                  
                    $data["motdepasse"]= $hashed_password;
                    $data["profil"]=$profil;
                    $data["acceptconditions"]= $acceptconditions;

                    $data["approbation"]= $approbation;
                    $data["approbateur"]= $approbateur;

                    $result = $db->write($query,$data);

                    
                    // Redirection a la page de Login
                    header("location:".ROOT."login/"); 
                    exit;
                    
                  }

      }
          /*
            ---------Creation dune session pour sauvegarder les erreurs, et eventuellement les afficher dans la page Sign up 
            */
            $_SESSION["signUperror"]=$this->signUperror; 
              
    }



  
/*----------------------------------------------------------------------------------------------------------- */
// ----------------------------------- LOGIN FONCTION  ----------------------------------------------------
/*----------------------------------------------------------------------------------------------------------- */
    public function login($post){

              unset($_SESSION["login_error"]);
              unset($_SESSION["connectedUser"]);
                    
               //1.1 -- Instanciation de la BD, Ne pas instancier une db car il se peut qune soit deja instancier quelque part. Faire plutot get instance...
               $db=Database::getDbInstance();
              
               //1.2 -- Collecte des donnees recues 
              
               $email = trim($post['email']);
               $password = trim($post['password']);
                     
               
             // 1.3 -- Validation de l'email non vide 
                  
               if(empty($email)){
                   $this->loginerror.=" - Vous devez indiquer une adresse email ! <br> ";
               };
            
              
             //   1.4 -- Validation du mot de passe non vide
        
                   if(empty($password)){
                    $this->loginerror.="- Vous devez indiquer un mot de passe ! <br>";
                };
        
            //    1.5 -- Verification de lexistance du compte(Verification dans la base de données)

            if($this->loginerror==""){

               // 1.5-1 -- before saving the user, check if the email is  in the database
               $query="SELECT * FROM users WHERE email =:email";
               $data["email"]=$email;
               $check=$db->read($query,$data);
     
               // 1.5-1-1 -- If the user is not in the db
               if(count($check)==0){
                 $this->loginerror.="Oups, Courriel et/ou Mot de passe incorrecte (s). Merci de réessayer ! <br>";
               } 
               // 1.5-1-2 -- If the user is in the db
               else
               if($check[0]["approbation"]==0) //If the account is not yet approved
               {
                $this->loginerror.="Ce compte est en attente d'approbation ! <br>";
               }
               
               else
               
               {
                 $db_hashed_pass=$check[0]["motdepasse"];
     
                 // 1.5-1-2-1 -- If the password matches
                 if (password_verify($password, $db_hashed_pass)) {
                  $_SESSION["connectedUser"]=$check[0];

                  //Redirection to page corresponding to the Dashbord Page                 
                  if(isset($_SESSION["connectedUser"])){
                  header("Location: ". ROOT ."tableaubordgeneral");
                  exit;
                  }
                 
               } 
                // 1.5-1-2-2 -- If the password does not match
               else {
                 $this->loginerror.="Oups, Courriel et/ou Mot de passe incorrecte (s). Merci de réessayer ! <br>";
               }
     

            }
          
          }       
                  $_SESSION["login_error"]=$this->loginerror;
                 
                
    }
      
       
/*----------------------------------------------------------------------------------------------------------- */
// ----------------------------------- LOGOUT FONCTION  ----------------------------------------------------
/*----------------------------------------------------------------------------------------------------------- */
public function logout(){

  //Unsetting all the sessions set, one by one 
  unsetAllSessions();



  // Destroying all the sessions
  session_destroy();        
     
    
}




public function delete($url){

}

public function get_user($url){

}

public function get_users(){

}


/********************************************************* */
// GET THE LIST OF THE USERS NOT YET APPROVED
/******************************************************* */
public function get_not_approved_users(){
  //-- Instanciation de la BD,
  $db=Database::getDbInstance();

   //  -- Select all the users that are not approved yet 
   $query="SELECT * FROM users WHERE approbation = :approbation";
   $data["approbation"]=0;
   $result=$db->read($query,$data);
   return  $result ;
}

/********************************************************* */
// APPROVER  AN USER 
/******************************************************* */
public function approveUser($ref){
  //-- Instanciation de la BD,
  $db=Database::getDbInstance();

   //  -- Update the user that are not approved yet 
   $query="UPDATE users SET approbation = :approbation WHERE ref = $ref";
   $data["approbation"]=1;
   $result=$db->write($query,$data);

}


/********************************************************* */
// SET THE APPROVER OF AN USER APPROVAL REQUEST
/******************************************************* */
public function setapprover($approver,$ref){
  //-- Instanciation de la BD,
  $db=Database::getDbInstance();

   //  -- Set the approver name 
   $query="UPDATE users SET approbateur = :approbateur WHERE ref = $ref";
   $data["approbateur"]=$approver;
   $result=$db->write($query,$data);
}



/********************************************************* */
// SET THE APPROVER OF AN USER APPROVAL REQUEST
/******************************************************* */
public function deleteUser($ref){
  //-- Instanciation de la BD,
  $db=Database::getDbInstance();

   //  -- Set the approver name 
   $query="DELETE FROM users WHERE ref = $ref"; 
   $result=$db->write($query);
}





//////////////////////////////////////////////////////////////////////
////////////// TEST POUR LES GRAPHIQUES /////////////////////////////
/////////////////////////////////////////////////////////////////////

public function selectionnerTroisDerniereAnnees(){
   //1.1 -- Instanciation de la BD, Ne pas instancier une db car il se peut qune soit deja instancier quelque part. Faire plutot get instance...
   $db=Database::getDbInstance();

    // 1.5-1 -- before saving the user, check if the email is  in the database
    $query="SELECT DISTINCT annee FROM test ORDER BY annee ASC LIMIT 3";
    $annees=$db->read($query);
    return $annees;

}



public function volumesparmois($annee){
  //1.1 -- Instanciation de la BD, Ne pas instancier une db car il se peut qune soit deja instancier quelque part. Faire plutot get instance...
  $db=Database::getDbInstance();

   // 1.5-1 -- before saving the user, check if the email is  in the database
   $query="SELECT mois,volumetransportes FROM test WHERE annee = :annee ORDER by ref ASC";
   $data["annee"]=$annee;
   $volumesparmois=$db->read($query,$data);
   return  $volumesparmois ;

}





    }



?>