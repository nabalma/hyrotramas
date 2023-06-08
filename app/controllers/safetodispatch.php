<?php
// Cette classe extends le controlleur principal
class Safetodispatch extends Controller{
  
  
    // Il sagit ici de la fonction index du controleur Home. En effet, si lurl est home/index, cest cette fonction index qui sexecute. 
    
    public function index(){ 
        
      if(isset($_SESSION["connectedUser"]) && $_SESSION["connectedUser"]["profil"]=="gestionVoyages"){

             //1.0- Importer les fichiers modeles necessaires a la page
             $transporter = $this->load_model("Transporter");
             $camion = $this->load_model("Camion");
             $chauffeur = $this->load_model("Chauffeur");


        /******************************************************************************* */
        // Generer la liste de tous les transporteurs pour permettre la selection par lutilisateur
        /******************************************************************************** */  
            $transporters=$transporter->get_transporters();

            if(isset($_SESSION["SafetoDispatch"]["transporters"]))
            {
              unset($_SESSION["SafetoDispatch"]["transporters"]);
              $_SESSION["SafetoDispatch"]["transporters"]=$transporters;
            }
              else
            {
              $_SESSION["SafetoDispatch"]["transporters"]=$transporters;
            }
              
            
        /*************************************************************************************************************** */
        // Generer la liste de tous les chauffeurs
        /**************************************************************************************************************** */

        $drivers = $chauffeur->get_chauffeurs();
        if(isset($_SESSION["SafetoDispatch"]["chauffeurs"]))
        {
          unset($_SESSION["SafetoDispatch"]["chauffeurs"]);
          $_SESSION["SafetoDispatch"]["chauffeurs"]=$drivers;
        }
          else
        {
          $_SESSION["SafetoDispatch"]["chauffeurs"]=$drivers;
        }
          

     


        /*************************************************************************************************************** */
        // Generer la liste des camions du transporteur selectionné pour permettre la selection du camion par lutilisateur
        /**************************************************************************************************************** */
         if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["submit_Transporteur"])){


          // Mise de la reference en session
          $reference=$_POST["reference"];
          if(isset($_SESSION["SafetoDispatch"]["reference"]))
          {
            unset($_SESSION["SafetoDispatch"]["reference"]);
            $_SESSION["SafetoDispatch"]["reference"]=$reference;
          }
            else
          {
            $_SESSION["SafetoDispatch"]["reference"]=$reference;
          }


          // Mise de la date STD en session
          $dateSTD=$_POST["dateSTD"];
          if(isset($_SESSION["SafetoDispatch"]["dateSTD"]))
          {
            unset($_SESSION["SafetoDispatch"]["dateSTD"]);
            $_SESSION["SafetoDispatch"]["dateSTD"]=$dateSTD;
          }
            else
          {
            $_SESSION["SafetoDispatch"]["dateSTD"]=$dateSTD;
          }


          // Mise du transporeur selectionné en session
            $transporteur=$_POST["transporteur"];
            if(isset($_SESSION["SafetoDispatch"]["leTransporteur"]))
            {
              unset($_SESSION["SafetoDispatch"]["leTransporteur"]);
              $_SESSION["SafetoDispatch"]["leTransporteur"]=$transporteur;
            }
              else
            {
              $_SESSION["SafetoDispatch"]["leTransporteur"]=$transporteur;
            }


          // La liste des camioms du transporteur selectionné
            $camions=$camion->get_camionsByTransporter($transporteur);
            if(isset($_SESSION["SafetoDispatch"]["camions"]))
            {
              unset($_SESSION["SafetoDispatch"]["camions"]);
              $_SESSION["SafetoDispatch"]["camions"]=$camions;
            }
              else
            {
              $_SESSION["SafetoDispatch"]["camions"]=$camions;
            }

            
      }

        /*************************************************************************************************************** */
        // Generer la liste des informations relatives au camion selectionner
        /**************************************************************************************************************** */

      if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["submit_Camion"])){

        //Mise du camions selectionné en session 
        $leCamion=$_POST["camionSelect"];
        $dataCamion=$camion->get_STDcamionInfos($leCamion);
       if(isset($_SESSION["SafetoDispatch"]["dataCamion"]))
            {
              unset($_SESSION["SafetoDispatch"]["dataCamion"]);
              $_SESSION["SafetoDispatch"]["dataCamion"]=$dataCamion;
            }
              else
            {
              $_SESSION["SafetoDispatch"]["dataCamion"]=$dataCamion;
            }
      
      }




      if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["create_STD"])){
        unset($_SESSION["SafetoDispatch"]);

         
      }


        // *** - Affichage de la vue
        //--------------------------------------------------------------------------------------------
        //Ici, elle est faite,de par son contenu, pour afficher une vue. La vue index contenu dans le dossier en argument de la fonction view
        $this->view("safetodispatch/index",$_SESSION["SafetoDispatch"]); // le parametre $path est une chaine de caractere correspondant au chemin du fichier a afficher, a partir du dosseir views


      }else{
        $this->view("home/accueil");

    }

    }

   


}

?>