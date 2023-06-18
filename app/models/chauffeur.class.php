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
                return  $moyenneAges ;
                
    }

    






    



}

?>