<?php
// Cette classe extends le controlleur principal
class OperationsChauffeurs extends Controller{

  public $displayedData=[];
  
    // Il sagit ici de la fonction index du controleur Home. En effet, si lurl est home/index, cest cette fonction index qui sexecute. 
    
    public function index(){ 
    
        
      if(isset($_SESSION["connectedUser"]) && $_SESSION["connectedUser"]["profil"]=="gestionChauffeurs"){

         //1.0- Importer le fichier modele Chauffeur
         $driver = $this->load_model("Chauffeur"); //Attention, le parametre a provider ici doit etre entre quote (cest un string ) et doit commencer par une majuscule


         $listeChauffeurs=$driver->get_Drivers_details();
         $this->displayedData[]=$listeChauffeurs; //Age moyen : Index 0 du displayData

        


        // *** - Affichage de la vue
        //--------------------------------------------------------------------------------------------
        //Ici, elle est faite,de par son contenu, pour afficher une vue. La vue index contenu dans le dossier en argument de la fonction view
        $this->view("chauffeurs/operationschauffeurs"); // le parametre $path est une chaine de caractere correspondant au chemin du fichier a afficher, a partir du dosseir views


      }else{
        $this->view("home/accueil");

    }

    }


}

?>