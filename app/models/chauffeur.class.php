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




    



}

?>