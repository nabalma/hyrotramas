<?php

class Certificatsmedicaux {


    public function get_nextMedicalVisitDate(){
        //-- Instanciation de la BD,
        $db=Database::getDbInstance();

        //  -- Select all the users that are not approved yet 
        $query="SELECT Date_Echéance_Certificat_Medical FROM certificatsmedicauxtests ORDER BY Date_Echéance_Certificat_Medical DESC";
        $result=$db->read($query);
        return  $result[0]["Date_Echéance_Certificat_Medical"] ;
        
    }


    public function get_Due_Next_Visits(){
        //-- Instanciation de la BD,
        $db=Database::getDbInstance();

        //  -- Select all the users that are not approved yet
        $query="SELECT (MAX(Date_Echéance_Certificat_Medical)) AS echeance FROM certificatsmedicauxtests WHERE Date_Echéance_Certificat_Medical<=CURDATE() GROUP BY Ref_Chauffeur";
        $result=$db->read($query);
        return  count($result);
        
    }


  


    public function add_Visite($post){

        //-- Instanciation de la BD,
        $db=Database::getDbInstance();

        // Collecte des données reçues
        $dateCert = date('Y-m-d', strtotime($post['dateCertificat']));
        $dateEcheanceCert = date('Y-m-d', strtotime($post['dateEcheanceCertificat']));
        $refChauf = $post['refChauffeur'];

    // Requête d'insertion avec des valeurs formatées
        $query = "INSERT INTO certificatsmedicauxtests (Date_Certificat_Medical, Date_Echéance_Certificat_Medical, Ref_Chauffeur) VALUES ('$dateCert', '$dateEcheanceCert', '$refChauf')";

        $resultat = $db->write($query);

        if ($resultat === true) {
            return "success";
        } else {
            return "false";
        }
  

    }





}

?>