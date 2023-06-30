<?php

class CatEvaluation {


    public function get_All_CatEvaluations(){
        //-- Instanciation de la BD,
        $db=Database::getDbInstance();

        //  -- Select all the users that are not approved yet 
        $query="SELECT 	Ref_Cat_Evaluation_Chauffeur,Code_Cat_Evaluation_Chauffeur,Designation_Cat_Evaluation_Chauffeur FROM categorieevaluationchauffeurs ORDER BY Designation_Cat_Evaluation_Chauffeur ASC";
        $result=$db->read($query);
        return  $result ;
        
    }


   






}

?>