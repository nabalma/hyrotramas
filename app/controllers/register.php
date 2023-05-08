<?php
// Cette classe extends le controlleur principal
class Register extends Controller{
 
    public $displayedData =[];
  
    // Il sagit ici de la fonction index du controleur Home. En effet, si lurl est home/index, cest cette fonction index qui sexecute. 
    
    public function index(){

      unset($_SESSION["signUperror"]);
      
          // *** 1- Enregistrement de l'utilisateur dans la BD
        //--------------------------------------------------------------------------------------------
        //Recevoir les données du formulaire et inserer l'utilisateur dans la base de données
        if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["creerCompte"])){

            //1.0- Importer le fichier modele
         $user = $this->load_model("User"); //Attention, le parametre a provider ici doit etre entre quote (cest un string ) et doit commencer par une majuscule

            //1.1- Execution de la fonction SignUp de la classe User (Appel de la fonction --> Enregistrement du User)
         $user->signUp($_POST);
        }


        // *** - Affichage de la vue
        //--------------------------------------------------------------------------------------------
        //Ici, elle est faite,de par son contenu, pour afficher une vue. La vue index contenu dans le dossier en argument de la fonction view
       $this->view("register/index",$this->displayedData); // le parametre $path est une chaine de caractere correspondant au chemin du fichier a afficher, a partir du dosseir views
   
    }




}

?>