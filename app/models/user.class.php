<?php

class User {

        // La variable de collecte des erreurs. 
        //1- La seule variable qui se verra cumulative des erreurs eventuelles. 
        //2-Comme cest une variable derreur, On ne la chargera quen cas derreur (on utilisere le !  la negation, sil le faut) 
    private $loginerror = "";
    private $reseterror="";
    
   
        /*********************************************
                     I- SIGN UP FONCTION
        **********************************************/

    public function signUp($post){
            
        //1.1 -- Instanciation de la BD, Ne pas instancier une db car il se peut qune soit deja instancier quelque part. Faire plutot get instance...
        $db=Database::getInstance();

        
       
        //1.2 -- Collecte des donnees recues 
        $name = trim($post['name']);
        $firstname = trim($post['firstname']);
        $email = trim($post['email']);
        $phone = trim($post['phone']);
        $password = trim($post['password']);
        $repassword =trim($post['repassword']);
        $profil =trim($post['profil']);
    
      //  preg_match("//"); Et on met a linterieur des slash la valeur de la regex



      /*    1.3 -- Validation du nom
            --------------------------------------------------------------------------------
        -	A valid name should start with an alphabet so, [A-Za-z].
        -  All other characters can be alphabets, numbers or an underscore so, [A-Za-z0-9_].
        - Since length constraint was given as 5-15 and we had already fixed the first character, so we give {4,14}.
      */

        if(empty($name) OR !preg_match("/^[A-Za-z][A-Za-z0-9_]{4,14}$/",$name)){
            $this->loginerror.=" - Prière entrez un nom valide. Le nom doit etre entre 3 et 15 caractéres ! <br>";
        };


        
      /*    1.3 -- Validation du prenom (firstname)
            --------------------------------------------------------------------------------
        -	A valid firstname should start with an alphabet so, [A-Za-z].
        -  All other characters can be alphabets, numbers or an underscore so, [A-Za-z0-9_].
        - Since length constraint was given as 5-15 and we had already fixed the first character, so we give {4,14}.
      */

      if(empty($firstname) OR !preg_match("/^[A-Za-z][A-Za-z0-9_]{4,14}$/",$firstname)){
        $this->loginerror.=" - Prière entrez un prénom valide. Le prénom doit etre entre 3 et 15 caractéres ! <br>";
    };


         /* 1.4 -- Validation de lemail
            --------------------------------------------------------------------------------
       Simple email expression. 
       Doesn't allow numbers in the domain name and doesn't allow for top level domains that are less than 2 or more than 3 letters (which is fine until they allow more). 
       Doesn't handle multiple &quot;.&quot; in the domain (joe@abc.co.uk).
      */

        if(empty($email) OR !preg_match("/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/",$email)){
            $this->loginerror.=" - Prière entrez un email valide. Simple email au format habituel : email@domaine.extension <br>";
        } 


        
         /* 1.4 -- Validation du phone
            --------------------------------------------------------------------------------
       Phone number in Canada like 438-278-2589
      */

      if(empty($phone) OR !preg_match("/^(\(\+[0-9]{2}\))?([0-9]{3}-?)?([0-9]{3})\-?([0-9]{4})(\/[0-9]{4})?$/",$phone)){
        $this->loginerror.=" - Prière entrez un numéro de téléphone valide : 111-111-1111 <br>";
    } 



        /* 1.5 -- Validation of password input
            --------------------------------------------------------------------------------
      Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character:
      */
      if(empty($password) OR empty($repassword) OR !preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/",$password) OR !preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/",$repassword)){
        $this->loginerror.=" - Prière entrez un mot de passe valide : 8 lettres minimum, Au moins une majuscule, Au moins une minuscule, Au moins un chiffre et Au moins un caractére spécial <br>";
    } 

    /*1.6 -- Checking the Matching of the two passwords provided */

    if($password !== $repassword){
        $this->loginerror.=" - Les mots de passe entrés ne correspondant pas <br>";
    }


    // before saving the user, check if the email is not yet already in the database
//    $query="SELECT * FROM users WHERE email =:email";
//    $data["email"]=$email;
//    $check=$db->read($query,$data);
//    if(count($check)>0){
//        $this->error.="Sorry, this email is already used. Please, another one ! <br>";
//    }



 
      /*  Saving the user in the db 
     --------------------------------------------------------------------------------*/
    if($this->loginerror==""){

        // Parametrized query. The values are preceded with : with the same names of the database table column names
//        $query ="INSERT INTO users(url_address,name,email,password,date,rank) VALUES(:url_address,:name,:email,:password,:date,:rank)";
        
        // The data to be used to execute the request. data is an array Object. its values will be the parameters of the query
//        $data = [];
//        $data["url_address"]="tokenTest";
//        $data["name"]=$name;
//        $data["email"]=$email;

//        $data["password"]=hash("sha1",$password);

//       $date= new DateTime(); $data["date"]=$date->format('Y-m-d H:i:s');
//        $data["rank"]="user";

        // Instanciating the db to use its public write function in order to write in the database. We use the query, and the array Data assigned below 
      //  $db = new Database();Ne pas instancier une db car il se peut qune soit deja instancier quelque part. Faire plutot get instance...
       
//        $result = $db->write($query,$data);



        //Retour a la page Login
//        if($result){
//             header("Location: ".ROOT."login");
//            die;
//        }
   
        
    }

       

   
      /*
      ---------Creation dune session pour sauvegarder les erreurs, et eventuellement les afficher dans la page Sign up 
      */
      $_SESSION["register_error"]=$this->loginerror; 
        
            

    }



     /*********************************************
                 II- LOGIN FONCTION
    **********************************************/    
    public function login($post){
      

       //1.1 -- Instanciation de la BD, Ne pas instancier une db car il se peut qune soit deja instancier quelque part. Faire plutot get instance...
       $db=Database::getInstance();
      
       //1.2 -- Collecte des donnees recues 
      
       $email = trim($post['email']);
       $password = trim($post['password']);
       $sesouvenir =trim($post['sesouvenir']);

   
     /*    1.3 -- Validation de l'email
           --------------------------------------------------------------------------------
           */

       if(empty($email)){
           $this->loginerror.=" - Vous devez indiquer une adresse email ! <br> ";
       };
      
     /*    1.4 -- Validation du mot de passe
           --------------------------------------------------------------------------------
           */

           if(empty($password)){
            $this->loginerror.="- Vous devez indiquer un mot de passe ! <br>";
        };


        /*Test denvoi de Email, Mot de passe oublié ? */
        


      $_SESSION["login_error"]=$this->loginerror;
     

    }


         /*********************************************
                 II- RESET PASSWORD FONCTION
    **********************************************/    
    public function resetpassword($post){
      
    

      //1.1 -- Instanciation de la BD, Ne pas instancier une db car il se peut qune soit deja instancier quelque part. Faire plutot get instance...
      $db=Database::getInstance();
     
      //1.2 -- Collecte des donnees recues 
      $email = trim($post['email']);
     

  
    /*1.3 -- Validation de l'email (Verification que le champ de saisie de l'email n'est pas saisie)
          --------------------------------------------------------------------------------
    */
      if(empty($email)){
          $this->reseterror.=" - Vous devez indiquer une adresse email ! <br> ";
      };


       /*1.4 -- Validation de l'email (Verification que ce Email existe dans la base de données)
          --------------------------------------------------------------------------------
    */
    // Requete de recherche de lemail dans la base de données
    //Si le count, ou le nbre de lignes retournées =0
    if(false){
      $this->reseterror.=" - Cet email n'est pas enregistré dans notre système. Merci de revérifier ! <br> ";
  };
     


       /*Test denvoi de Email, Mot de passe oublié ? */
       if(true){
       // Code denvoi de lemail si $this->reseterror = "";
    };    


     $_SESSION["reset_error"]=$this->reseterror;
    

   }






   
    







    public function delete($url){

    }

    public function get_user($url){

    }

    public function get_users(){

    }



   

}

?>