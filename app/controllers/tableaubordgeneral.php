<?php
// Cette classe extends le controlleur principal
class TableauBordGeneral extends Controller{

    public $displayedData=[];
 
  
    // Il sagit ici de la fonction index du controleur Home. En effet, si lurl est home/index, cest cette fonction index qui sexecute. 
    
    public function index(){ 


//********************************************* */
//TEST ANNEE ET VOLUMES TRANSPORTES
/************************************************ */
        //1.0- Importer le fichier modele
       $user = $this->load_model("User"); //Attention, le parametre a provider ici doit etre entre quote (cest un string ) et doit commencer par une majuscule

        //1.1- Execution de la fonction login de la classe User (Appel de la fonction --> se connectert du User)
       $annees = $user->selectionnerTroisDerniereAnnees();
       $this->displayedData["annees"]=$annees;


        // Valeur par défaut de l'année selectionné
      $annee_selection = date("Y");
      $this->displayedData["annee_selection"]=$annee_selection;

      //Executer la requete pour en avoir les données des mois et des volumes 
      $volumesparmois = $user->volumesparmois($annee_selection);

      //Traiter les données pour les mois 
      $this->displayedData["liste_des_mois_volume_transporte"]=genererListeDesMois($volumesparmois);

      //Traiter les données pour les volumes transportés 
      $this->displayedData["liste_des_volumes_transportes_json"]=genererListeDesVolumesTransportes($volumesparmois);


      






      //  Gestion du clic sur le bouton de lannee
       if (isset($_POST["selectAnnee_Volume_Transporte"])) {

       // Récupère la valeur du bouton
      $annee_selection = $_POST['selectAnnee_Volume_Transporte'];
      $this->displayedData["annee_selection"]=$annee_selection;

      //Executer la requete pour en avoir les données des mois et des volumes 
      $volumesparmois = $user->volumesparmois($annee_selection);

      //Traiter les données pour les mois 
      $this->displayedData["liste_des_mois_volume_transporte"]=genererListeDesMois($volumesparmois);

      //Traiter les données pour les volumes transportés 
      $this->displayedData["liste_des_volumes_transportes_json"]=genererListeDesVolumesTransportes($volumesparmois);

         
        

         
         
        
      }
/****************************************************** */



        // Gestion du click sur le bouton suivant :
        if(isset($_POST["suivant"])){

                if(isset($_SESSION["connectedUser"])){

                //Redirection to page corresponding to the user Profil

                  //1--a : Redirection Administrateur
                  if($_SESSION["connectedUser"]["profil"]=="administrateur"){
                    header("Location: ". ROOT ."administration");
                    exit;
                    }
  
                   //1--b : Redirection Superviseur
                   if($_SESSION["connectedUser"]["profil"]=="superviseur"){
                     header("Location: ". ROOT ."supervision");
                     exit;
                     }
                                     
                    //1--c : Redirection Gestion Chauffeurs
                    if($_SESSION["connectedUser"]["profil"]=="gestionChauffeurs"){
                     header("Location: ". ROOT ."gestionchauffeurs");
                     exit;
                     }
  
  
                      //1--d : Redirection Gestion Voyages
                    if($_SESSION["connectedUser"]["profil"]=="gestionVoyages"){
                     header("Location: ". ROOT ."gestionvoyages");
                     exit;
                     }
  
  
                      //1--e : Redirection Gestion Camions
                    if($_SESSION["connectedUser"]["profil"]=="gestionCamions"){
                     header("Location: ". ROOT ."gestioncamions");
                     exit;
                     }
  
                      //1--f : Redirection Autre Profil
                    if($_SESSION["connectedUser"]["profil"]=="autre"){
                     header("Location: ". ROOT ."autreprofil");
                     exit;
                     }
                     
                     
                }

        }

       
        // *** - Affichage de la vue
        //--------------------------------------------------------------------------------------------
        //Ici, elle est faite,de par son contenu, pour afficher une vue. La vue index contenu dans le dossier en argument de la fonction view
       $this->view("tableaubordgeneral/index",$this->displayedData); // le parametre $path est une chaine de caractere correspondant au chemin du fichier a afficher, a partir du dosseir views
   
    }




}



/*-------------------------------------------------------------------------
------------------FONCTIONS HORS CLASSES UTILES POUR CETTE PAGE
-------------------------------------------------------------------------*/

function genererListeDesMois($volumesparmois){
  
  $displayedData=[];

  // 1-----  Liste des mois 
  $liste_des_mois = [];

  //Extraire les mois de la donnée brute
  foreach ($volumesparmois as $key => $value)
  {
    foreach($value as $key => $value){
      if($key=="mois"){
      $liste_des_mois[]=$value;
     
    }
    }           
  }

  //print_r($liste_des_mois);

  // Encoder les mois pour que Chart-js puisse les utiliser 
  $liste_des_mois_json = json_encode($liste_des_mois);

  //Alimenter le tableau des données a afficher avec les mois . 
  $displayedData["liste_des_mois_volume_transporte"]=$liste_des_mois_json;

  return $displayedData["liste_des_mois_volume_transporte"];

}





function genererListeDesVolumesTransportes($volumesparmois){
  
  $displayedData=[];

   //2------ Liste des volumes transportés. 
   $liste_des_volumes = [];

   //Extraire les volumes de la donnée brute
  foreach ($volumesparmois as $key => $value)
  {
    foreach($value as $key => $value){
      if($key=="volumetransportes"){
      $liste_des_volumes[]=$value;
      
    }
    }           
  }
   //print_r($liste_des_volumes);
   
     // Encoder les volumes pour que Chart-js puisse les utiliser 
  $liste_des_volumes_json = json_encode($liste_des_volumes);

    //Alimenter le tableau des données a afficher avec les volumes . 
  $displayedData["liste_des_volumes_transportes_json"]=$liste_des_volumes_json;

  return $displayedData["liste_des_volumes_transportes_json"];

}


?>


