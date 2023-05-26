<?php
// Cette classe extends le controlleur principal
class OperationsAdmin extends Controller{
  
 
  public $displayedData=[];
 
  
    // Il sagit ici de la fonction index du controleur Home. En effet, si lurl est home/index, cest cette fonction index qui sexecute. 
    
    public function index(){ 
        
      if(isset($_SESSION["connectedUser"]) && $_SESSION["connectedUser"]["profil"]=="administrateur"){

        //Importer le modele User
        $user = $this->load_model("User");

        //Generer la liste des approbations en attente et la passer au tableau daffichage
        $listeapprobations=$this->listeApprobations($user);
        $this->displayedData[]=$listeapprobations;

        
      
        if(isset($_POST["approuver"])){
            $this->set_Approver($_SESSION["connectedUser"]["prenom"],$user,$_POST["ref"]);
            $this->approve_User($user,$_POST["ref"]);           
        }

        

        if(isset($_POST["supprimer"])){
          $this->delete_User($user,$_POST["ref"]);   
        }






        // *** - Affichage de la vue
        //--------------------------------------------------------------------------------------------
        //Ici, elle est faite,de par son contenu, pour afficher une vue. La vue index contenu dans le dossier en argument de la fonction view
        $this->view("administration/operationsadmin",$this->displayedData); // le parametre $path est une chaine de caractere correspondant au chemin du fichier a afficher, a partir du dosseir views


      }else{
        $this->view("home/accueil");

    }

    }




    // la fonction de la classe qui permet de generer la liste des utilisateurs non approuvés
    public function listeApprobations($user)
    {  
      $result = $user->get_not_approved_users();
      return $result;       
    }


     // la fonction de la dite classe qui permet de setter qui est lapprobateur. Elle appelle une fonction la classe Utilisateur
     public function set_Approver($approver,$user,$ref)
     {  
       $result = $user->setapprover($approver,$ref);
       return $result;       
     }
 

    // la fonction de la dite classe qui permet dapprouver le user dont la ref est $ref. Elle appelle une fonction la classe Utilisateur
    public function approve_User($user,$ref)
    {  
      $result = $user->approveUser($ref);
      return $result;       
    }

     // la fonction de la dite classe qui permet dapprouver le user dont la ref est $ref. Elle appelle une fonction la classe Utilisateur
     public function delete_User($user,$ref)
     {  
       $result = $user->deleteUser($ref);
       return $result;       
     }

  

     







}



?>