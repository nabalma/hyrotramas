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
    

         //1.0- Importer le fichier modele Chauffeur
         $echeanceVisite = $this->load_model("Certificatsmedicaux");
         $prochaineVisite=$echeanceVisite->get_nextMedicalVisitDate();
         $this->displayedData[]=$prochaineVisite; //Age moyen : Index 2 du displayData

     
         $nbreVisitEchues=$echeanceVisite->get_Due_Next_Visits();
         $this->displayedData[]=$nbreVisitEchues; //Age moyen : Index 3 du displayData


         $ExperienceMoyenChauffeursActif=$driver->get_AverageExperienceforActiveDrivers();
         $this->displayedData[]=$ExperienceMoyenChauffeursActif; //Age moyen : Index 4 du displayData

         $OverExperiencesChauffeursActif=$driver->get_Over_Average_Experiences($ExperienceMoyenChauffeursActif);
         $this->displayedData[]=$OverExperiencesChauffeursActif; //Age moyen : Index 5 du displayData



          //1.0- Importer le fichier modele Chauffeur
          $formation = $this->load_model("Formations");
          $prochaineFormation=$formation->get_nextTrainingDate();
          $this->displayedData[]=$prochaineFormation; //Age moyen : Index 6 du displayData
 
      
          $nbreFormationsEchues=$formation->get_Due_Next_Training();
          $this->displayedData[]=$nbreFormationsEchues; //Age moyen : Index 7 du displayData


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