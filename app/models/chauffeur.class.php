<?php

class Chauffeur {


    public function get_chauffeurs(){
            //-- Instanciation de la BD,
            $db=Database::getDbInstance();

            //  -- Select all the users that are not approved yet 
            $query="SELECT * FROM chauffeurs";
            $result=$db->read($query);
            return  $result ;
    }
     
  
    public function get_chauffeurByRef($refChauffeur){
        //-- Instanciation de la BD,
        $db=Database::getDbInstance();

        //  -- Select all the users that are not approved yet 
        $query="SELECT * FROM chauffeurs WHERE ref_Chauffeur=$refChauffeur";
        $result=$db->read($query);
        return  $result ;
        
    }

    public function get_EcheanceFormationChauffeur($refChauffeur){
        //-- Instanciation de la BD,
        $db=Database::getDbInstance();

        //  -- Select all the users that are not approved yet 
        $query="SELECT Date_Echéance_Evaluation_Chauffeur FROM evaluationschauffeurs WHERE ref_Chauffeur=$refChauffeur ORDER BY Date_Echéance_Evaluation_Chauffeur DESC LIMIT 1";
        $result=$db->read($query);
        return  $result ;
        
    }


    public function get_EcheanceVisiteMedicale($refChauffeur){
        //-- Instanciation de la BD,
        $db=Database::getDbInstance();

        //  -- Select all the users that are not approved yet 
        $query="SELECT Date_Echéance_Certificat_Medical FROM certificatsmedicaux WHERE Ref_Chauffeur=$refChauffeur ORDER BY Date_Echéance_Certificat_Medical DESC LIMIT 1";
        $result=$db->read($query);
        return  $result ;
        
    }


    public function activateDrivers($refDriver){
        //-- Instanciation de la BD,
        $db=Database::getDbInstance();

        //  -- Select all the users that are not approved yet 
        $query="SELECT * FROM chauffeurs WHERE actifOuNon='Actif'";
        $result=$db->read($query);
        return  count($result) ;
        
    }


    public function get_ActiveDriversNumber(){
        //-- Instanciation de la BD,
        $db=Database::getDbInstance();

        //  -- Select all the users that are not approved yet 
        $query="SELECT * FROM chauffeurs WHERE actifOuNon='Actif'";
        $result=$db->read($query);
        return  count($result) ;
        
    }

    public function get_AverageAgeforActiveDrivers(){
        //-- Instanciation de la BD,
        $db=Database::getDbInstance();

        //  -- Select all the users that are not approved yet 
        $query="SELECT date_de_naissance_Chauffeur FROM chauffeurs WHERE actifOuNon='Actif'";
        $result=$db->read($query);
        
        
        $sommeAges = 0;
        $nombreChauffeurs = 0;

        foreach ($result as $key => $value) {
            $dateNaissance = $value['date_de_naissance_Chauffeur'];
            
         
            $age = date("Y")-date("Y", strtotime($dateNaissance));
            $sommeAges += $age;
            $nombreChauffeurs++;
        }

        $moyenneAges = $sommeAges / $nombreChauffeurs;
                return  round($moyenneAges) ;
                
    }

    public function get_AverageExperienceforActiveDrivers(){
        //-- Instanciation de la BD,
        $db=Database::getDbInstance();

        //  -- Select all the users that are not approved yet 
        $query="SELECT date_Obtention_Permis_Chauffeur FROM chauffeurs WHERE actifOuNon='Actif'";
        $result=$db->read($query);
        
        
        $sommeExperiences = 0;
        $nombreChauffeurs = 0;

        foreach ($result as $key => $value) {
            $dateNaissance = $value['date_Obtention_Permis_Chauffeur'];
            
         
            $age = date("Y")-date("Y", strtotime($dateNaissance));
            $sommeExperiences += $age;
            $nombreChauffeurs++;
        }

        $moyenneExperience = $sommeExperiences / $nombreChauffeurs;
                return  round($moyenneExperience,1) ;
                
    }



    public function get_Over_Average_Experiences($cible){
        //-- Instanciation de la BD,
        $db=Database::getDbInstance();

        //  -- Select all the users that are not approved yet
        $query="SELECT date_Obtention_Permis_Chauffeur FROM chauffeurs WHERE (((CURDATE()-date_Obtention_Permis_Chauffeur)/366) >=$cible) AND actifOuNon='Actif' GROUP BY Ref_Chauffeur";
        $result=$db->read($query);
        return  count($result);
        
    }


    public function get_Drivers_details(){
        //-- Instanciation de la BD,
        $db=Database::getDbInstance();

        //  -- Select all the users that are not approved yet
        $query="SELECT chauffeurs.ref_Chauffeur, code_Chauffeur, numero_Matricule_Chauffeur, nom_Chauffeur, prenom_Chauffeur, `date_de_naissance_Chauffeur`, `categorie_Permis_Permis`, `numero_Permis_Chauffeur`, numero_Telephone_Chauffeur, `camion_associe`, `actifOuNon`, MAX(Date_Echéance_Certificat_Medical) AS echeanceVisite, MAX(Date_Echéance_Evaluation_Chauffeur) AS echeanceFormation, TIMESTAMPDIFF(YEAR, date_de_naissance_Chauffeur, CURDATE()) AS age, TIMESTAMPDIFF(YEAR, date_Obtention_Permis_Chauffeur, CURDATE()) AS experience FROM chauffeurs JOIN certificatsmedicaux ON chauffeurs.ref_Chauffeur=certificatsmedicaux.Ref_Chauffeur JOIN evaluationschauffeurs ON chauffeurs.ref_Chauffeur=evaluationschauffeurs.Ref_Chauffeur GROUP BY chauffeurs.ref_Chauffeur ORDER BY nom_Chauffeur ASC";
        
        $result=$db->read($query);
        return  $result;
        
    }



    public function add($post){

        //-- Instanciation de la BD,
        $db=Database::getDbInstance();


         //1.2 -- Collecte des donnees recues 
         $actifOuNon= "Inactif";
         $code = trim($post['code']);
         $matricule = trim($post['numero']);
         $nom = trim($post['nom']);
         $prenom = trim($post['prenom']);
         $dateNaissance = trim($post['dateNaissance']);
         $numeroPermis = trim($post['numeroPermis']);
         $dateObtentionPermis = trim($post['dateObtentionPermis']);
         $categoriePermis = trim($post['categoriePermis']);
         $dateRecrutement = trim($post['dateRecrutement']);
         $dateIntegration = trim($post['dateIntegration']);
         $typeContrat = trim($post['typeContrat']);
         $telephone = trim($post['telephone']);
         $titulaireBackup = trim($post['titulaireBackup']);
         $camion = trim($post['camion']);

        //  -- Select all the users that are not approved yet
        $query ="INSERT INTO chauffeurstests(
            code_Chauffeur,
            numero_Matricule_Chauffeur,
            nom_Chauffeur,
            prenom_Chauffeur,
            date_de_naissance_Chauffeur,
            numero_Permis_Chauffeur,
            date_Obtention_Permis_Chauffeur,
            categorie_Permis_Permis,
            date_Recrutement_Chauffeur,
            date_dIntegration_Chauffeur,
            type_Contrat_Chauffeur,
            numero_Telephone_Chauffeur,
            titulaire_backup,
            camion_associe,
            actifOuNon) 
            VALUES(
                :code_Chauffeur,
                :numero_Matricule_Chauffeur,
                :nom_Chauffeur,
                :prenom_Chauffeur,
                :date_de_naissance_Chauffeur,
                :numero_Permis_Chauffeur,
                :date_Obtention_Permis_Chauffeur,
                :categorie_Permis_Permis,
                :date_Recrutement_Chauffeur,
                :date_dIntegration_Chauffeur,
                :type_Contrat_Chauffeur,
                :numero_Telephone_Chauffeur,
                :titulaire_backup,
                :camion_associe,
                :actifOuNon)";
        
       
        $data["code_Chauffeur"]= $code;
        $data["numero_Matricule_Chauffeur"]= $matricule;
        $data["nom_Chauffeur"]= $nom;
        $data["prenom_Chauffeur"]= $prenom;
        $data["date_de_naissance_Chauffeur"]= $dateNaissance;
        $data["numero_Permis_Chauffeur"]= $numeroPermis;
        $data["date_Obtention_Permis_Chauffeur"]= $dateObtentionPermis;
        $data["categorie_Permis_Permis"]= $categoriePermis;
        $data["date_Recrutement_Chauffeur"]= $dateRecrutement;
        $data["date_dIntegration_Chauffeur"]= $dateIntegration;
        $data["type_Contrat_Chauffeur"]= $typeContrat;
        $data["numero_Telephone_Chauffeur"]= $telephone;
        $data["titulaire_backup"]= $titulaireBackup;
        $data["camion_associe"]= $camion;
        $data["actifOuNon"]= $actifOuNon;
       
        $result = $db->write($query,$data);
        if ($result === true) {
           return "sucsess";
        } else {
            return "false";
        }
 
        /*
        // Redirection a la page de Login
        header("location:".ROOT."operationschauffeurs/"); 
        exit;
*/
        
    }







    






    



}

?>