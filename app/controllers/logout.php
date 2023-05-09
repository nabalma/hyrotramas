<?php
// Cette classe extends le controlleur principal
class Logout extends Controller{
  
    // Il sagit ici de la fonction index du controleur Home. En effet, si lurl est home/index, cest cette fonction index qui sexecute. 
    
    public function index(){  
      

        //1.0- Importer le fichier modele
         $user = $this->load_model("User"); //Attention, le parametre a provider ici doit etre entre quote (cest un string ) et doit commencer par une majuscule

        //1.1- Execution de la fonction login de la classe User (Appel de la fonction --> se connectert du User)
         $user->logout();
     

        
        // *** - Affichage de la vue
        //--------------------------------------------------------------------------------------------
        //Ici, elle est faite,de par son contenu, pour afficher une vue. La vue index contenu dans le dossier en argument de la fonction view
       $this->view("logout/index"); // le parametre $path est une chaine de caractere correspondant au chemin du fichier a afficher, a partir du dosseir views
   
    }




}

?>