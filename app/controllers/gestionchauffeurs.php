<?php
// Cette classe extends le controlleur principal
class GestionChauffeurs extends Controller{

  public $displayedData=[];

  
    // Il sagit ici de la fonction index du controleur Home. En effet, si lurl est home/index, cest cette fonction index qui sexecute. 
    
    public function index(){ 
        
      if(isset($_SESSION["connectedUser"]) && $_SESSION["connectedUser"]["profil"]=="gestionChauffeurs"){


        //1.0- Importer le fichier modele Chauffeur
        $driver = $this->load_model("Chauffeur"); //Attention, le parametre a provider ici doit etre entre quote (cest un string ) et doit commencer par une majuscule

        //1.1- Execution de la fonction login de la classe User (Appel de la fonction --> se connectert du User)
        
        $nbreChauffeursActif=$driver->get_ActiveDriversNumber();
        $this->displayedData[]=$nbreChauffeursActif; //Nombre actif de chauffeurs : Index 0 du displayData


        $ageMoyenChauffeursActif=$driver->get_AverageAgeforActiveDrivers();
        $this->displayedData[]=$ageMoyenChauffeursActif; //Age moyen : Index 1 du displayData
    





        // *** - Affichage de la vue
        //--------------------------------------------------------------------------------------------
        //Ici, elle est faite,de par son contenu, pour afficher une vue. La vue index contenu dans le dossier en argument de la fonction view
        $this->view("chauffeurs/index",$this->displayedData); // le parametre $path est une chaine de caractere correspondant au chemin du fichier a afficher, a partir du dosseir views


      }else{
        $this->view("home/accueil");

    }

    }


}

?>