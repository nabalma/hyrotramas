<?php

class TypeContrat {


    public function get_All_Contrats_Types(){
        //-- Instanciation de la BD,
        $db=Database::getDbInstance();

        //  -- Select all the users that are not approved yet 
        $query="SELECT 	Ref_Type_Contrat_Chauffeur,Code_Type_Contrat_Chauffeur,Designation_Type_Contrat_Chauffeur FROM typescontratschauffeurs ORDER BY Designation_Type_Contrat_Chauffeur ASC";
        $result=$db->read($query);
        return  $result ;
        
    }


   






}

?>