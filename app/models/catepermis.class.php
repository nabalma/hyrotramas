<?php

class CatePermis {


    public function get_All_Categories_Permis(){
        //-- Instanciation de la BD,
        $db=Database::getDbInstance();

        //  -- Select all the users that are not approved yet 
        $query="SELECT 	Ref_Cat_Permis,Code_Cat_Permis,Designation_Cat_Permis FROM categoriespermis ORDER BY Designation_Cat_Permis ASC";
        $result=$db->read($query);
        return  $result ;
        
    }


   






}

?>