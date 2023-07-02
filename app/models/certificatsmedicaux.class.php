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


    public function get_Last_Certificat($post){
        //-- Instanciation de la BD,
        $db=Database::getDbInstance();

        $refChauf = trim($post['refChauffeur']);

        $sql="SELECT Ref_Certificat_Medical,Date_Certificat_Medical,Date_Echéance_Certificat_Medical,nom_Chauffeur,prenom_Chauffeur,certificatsmedicauxtests.Ref_Chauffeur FROM certificatsmedicauxtests JOIN chauffeurstests on chauffeurstests.ref_Chauffeur = certificatsmedicauxtests.Ref_Chauffeur WHERE certificatsmedicauxtests.Ref_Chauffeur=$refChauf ORDER BY Ref_Certificat_Medical DESC"; 
        $result=$db->read($sql);
               
        return  $result[0];
        
    }

   





}

?>