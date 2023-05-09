<?php
// Cette classe extends le controlleur principal
class TableauBordGeneral extends Controller{
  
    // Il sagit ici de la fonction index du controleur Home. En effet, si lurl est home/index, cest cette fonction index qui sexecute. 
    
    public function index(){ 
        
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
       $this->view("tableaubordgeneral/index"); // le parametre $path est une chaine de caractere correspondant au chemin du fichier a afficher, a partir du dosseir views
   
    }




}

?>