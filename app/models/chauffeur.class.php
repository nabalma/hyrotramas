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



    






    



}

?>