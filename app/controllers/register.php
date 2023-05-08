<?php
// Cette classe extends le controlleur principal
class Register extends Controller{
  
    // Il sagit ici de la fonction index du controleur Home. En effet, si lurl est home/index, cest cette fonction index qui sexecute. 
    
    public function index(){  
        













        // *** - Affichage de la vue
        //--------------------------------------------------------------------------------------------
        //Ici, elle est faite,de par son contenu, pour afficher une vue. La vue index contenu dans le dossier en argument de la fonction view
       $this->view("register/index"); // le parametre $path est une chaine de caractere correspondant au chemin du fichier a afficher, a partir du dosseir views
   
    }




}

?>