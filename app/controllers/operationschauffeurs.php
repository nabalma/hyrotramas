<?php
// Cette classe extends le controlleur principal
class OperationsChauffeurs extends Controller{

  public $displayedData=[];
  
    // Il sagit ici de la fonction index du controleur Home. En effet, si lurl est home/index, cest cette fonction index qui sexecute. 
    
    public function index(){ 
    
        
      if(isset($_SESSION["connectedUser"]) && $_SESSION["connectedUser"]["profil"]=="gestionChauffeurs"){

         //1.0- Importer le fichier modele Chauffeur
         $driver = $this->load_model("Chauffeur"); //Attention, le parametre a provider ici doit etre entre quote (cest un string ) et doit commencer par une majuscule
         $certificat = $this->load_model("Certificatsmedicaux"); //Attention, le parametre a provider ici doit etre entre quote (cest un string ) et doit commencer par une majuscule
         $evaluation = $this->load_model("Formations"); //Attention, le parametre a provider ici doit etre entre quote (cest un string ) et doit commencer par une majuscule
         $catevaluation = $this->load_model("CatEvaluation"); //Attention, le parametre a provider ici doit etre entre quote (cest un string ) et doit commencer par une majuscule
         $sousCatevaluation = $this->load_model("SousCatevaluation"); //Attention, le parametre a provider ici doit etre entre quote (cest un string ) et doit commencer par une majuscule
         $decisionCatevaluation = $this->load_model("DecisionEvaluation"); //Attention, le parametre a provider ici doit etre entre quote (cest un string ) et doit commencer par une majuscule
         $catPermis = $this->load_model("CatePermis"); //Attention, le parametre a provider ici doit etre entre quote (cest un string ) et doit commencer par une majuscule
         $titbackup = $this->load_model("TitulBackup"); //Attention, le parametre a provider ici doit etre entre quote (cest un string ) et doit commencer par une majuscule

         $listeChauffeurs=$driver->get_Drivers_details();
         $this->displayedData["listeChauffeur"]=$listeChauffeurs; //Age moyen : Index 0 du displayData


         $listeCatEvaluations=$catevaluation->get_All_CatEvaluations();
         $this->displayedData["listeCatEvaluation"]=$listeCatEvaluations; //Age moyen : Index 1 du displayData
        
       
        $listeSousCatEvaluations=$sousCatevaluation->get_All_SousCatEvaluations();
        $this->displayedData["listeSousCatEvaluation"]=$listeSousCatEvaluations; //Age moyen : Index 2 du displayData

         $listeDecisionsEvaluations=$decisionCatevaluation->get_All_DecisionsEvaluations();
         $this->displayedData["listeDecisionEvaluation"]=$listeDecisionsEvaluations; //Age moyen : Index 3 du displayData


         $listeCatPermis=$catPermis->get_All_Categories_Permis();
         $this->displayedData["listeCatPermis"]=$listeCatPermis; //Age moyen : Index 4 du displayData


         $listetitBackup=$titbackup->get_All_Categories_Drivers();
         $this->displayedData["listeTitulBackUp"]=$listetitBackup; //Age moyen : Index 5 du displayData










         if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["submit_nouveau_chauffeur"])){

          //1.1- Execution de la fonction register de la classe Driver
          $add_chauffeur=$driver->add_Driver($_POST);
          $this->displayedData["ajout_nouveau_chauffeur"]=$add_chauffeur; //Age moyen : Index 6 du displayData
    
      }


      if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["submit_nouveau_certificat"])){

        //1.1- Execution de la fonction register de la classe Driver
        $add_certificat=$certificat->add_Visite($_POST);
        $this->displayedData["ajout_nouveau_certificat"]=$add_certificat; //Age moyen : Index 6 du displayData
    }


    if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["submit_nouvel_evaluation"])){

      //1.1- Execution de la fonction register de la classe Driver
      $add_evaluation=$evaluation->add_Evaluation($_POST);
      $this->displayedData["ajout_nouvel_evaluation"]=$add_evaluation; //Age moyen : Index 6 du displayData
  }


  if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["get_statut"])){

    //1.1- Execution de la fonction register de la classe Driver
    if($_POST["refChauf"] !="Choisir Chauffeur..."){
    $statut=$driver->get_Driver_Statut($_POST);
    $this->displayedData["get_statut"]=$statut; //Age moyen : Index 6 du displayData
    }
}


if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["toggle_statut"])){

  //1.1- Execution de la fonction register de la classe Driver
  if($_POST["refChauf"] !="Choisir Chauffeur..."){
    $statut=$driver->toggle_Driver_Statut($_POST);
  $this->displayedData["toggle_statut"]=$statut; //Age moyen : Index 7 du displayData
  }
  
  
   
   
}








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