<?php

class Camion {



    public function get_camions(){
   //-- Instanciation de la BD,
            $db=Database::getDbInstance();

  //  -- Select all the users that are not approved yet 
  $query="SELECT * FROM camions";
  $result=$db->read($query);
  return  $result ;
    }


    public function create($post){}

  
    public function get_camionsByRef($refCamion){
        //-- Instanciation de la BD,
        $db=Database::getDbInstance();

        //  -- Select all the users that are not approved yet 
        $query="SELECT * FROM camions WHERE ref_Camion=$refCamion";
        $result=$db->read($query);
        return  $result ;
        
    }


    public function get_camionsByTransporter($refTransporter){
        //-- Instanciation de la BD,
        $db=Database::getDbInstance();

        //  -- Select all the users that are not approved yet 
        $query="SELECT * FROM camions WHERE ref_Transporteur=$refTransporter";
        $result=$db->read($query);
        return  $result ;
        
    }


    public function get_STDcamionInfos($refCamion){
        //-- Instanciation de la BD,
        $db=Database::getDbInstance();

        //  -- Select all the users that are not approved yet 
        $query="SELECT * FROM camions,produits,chauffeurs WHERE ref_Camion=$refCamion AND camions.produit_affecté=produits.ref_Produit AND camions.chauffeur_associe=chauffeurs.ref_Chauffeur";
        $result=$db->read($query);
        return  $result ;
        
    }

    public function get_chauffeurByCamion($refCamion){
        //-- Instanciation de la BD,
        $db=Database::getDbInstance();

        //  -- Select all the users that are not approved yet 
        $query="SELECT chauffeur_associe FROM camions WHERE ref_Camion=$refCamion";
        $result=$db->read($query);
        return  $result[0]["chauffeur_associe"] ;
        
    }






}

?>