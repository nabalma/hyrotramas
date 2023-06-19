<?php

class Certificatsmedicaux {


    public function get_nextMedicalVisitDate(){
        //-- Instanciation de la BD,
        $db=Database::getDbInstance();

        //  -- Select all the users that are not approved yet 
        $query="SELECT Date_Echéance_Certificat_Medical FROM certificatsmedicaux ORDER BY Date_Echéance_Certificat_Medical DESC";
        $result=$db->read($query);
        return  $result[0]["Date_Echéance_Certificat_Medical"] ;
        
    }


    public function get_Due_Next_Visits(){
        //-- Instanciation de la BD,
        $db=Database::getDbInstance();

        //  -- Select all the users that are not approved yet
        $query="SELECT (MAX(Date_Echéance_Certificat_Medical)) AS echeance FROM certificatsmedicaux WHERE Date_Echéance_Certificat_Medical<=CURDATE() GROUP BY Ref_Chauffeur";
        $result=$db->read($query);
        return  count($result);
        
    }






}

?>