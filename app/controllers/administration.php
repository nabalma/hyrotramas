<?php
// Cette classe extends le controlleur principal
class Administration extends Controller{

  public $displayedData=[];
  
    // Il sagit ici de la fonction index du controleur Home. En effet, si lurl est home/index, cest cette fonction index qui sexecute. 
    
    public function index(){ 
        
      if(isset($_SESSION["connectedUser"]) && $_SESSION["connectedUser"]["profil"]=="administrateur"){

        //Generer la liste des approbations en attente et la passer au tableau daffichage
        $countapprobations=$this->countApprobations();
        $this->displayedData[]=$countapprobations;      



        // *** - Affichage de la vue
        //--------------------------------------------------------------------------------------------
        //Ici, elle est faite,de par son contenu, pour afficher une vue. La vue index contenu dans le dossier en argument de la fonction view
        $this->view("administration/index",$this->displayedData); // le parametre $path est une chaine de caractere correspondant au chemin du fichier a afficher, a partir du dosseir views


      }else{
        $this->view("home/accueil");

    }

    }


    public function countApprobations(){
      //1.0- Importer le fichier modele
      $user = $this->load_model("User");
      $result = $user->get_not_approved_users();
      return count($result);
    }     


}

?>