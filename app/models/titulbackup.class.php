<?php

class TitulBackup {


    public function get_All_Categories_Drivers(){
        //-- Instanciation de la BD,
        $db=Database::getDbInstance();

        //  -- Select all the users that are not approved yet 
        $query="SELECT 	Ref_TitulaireBackUp,Code_TitulaireBackUp,Designation_TitulaireBackUp FROM titulairebackup ORDER BY Designation_TitulaireBackUp ASC";
        $result=$db->read($query);
        return  $result ;
        
    }


   






}

?>