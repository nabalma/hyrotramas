<?php

class SousCatevaluation {


    public function get_All_SousCatEvaluations(){
        //-- Instanciation de la BD,
        $db=Database::getDbInstance();

        //  -- Select all the users that are not approved yet 
        $query="SELECT 	Ref_Sous_Cat_Eval_Chauffeur,Code_Sous_Cat_Eval_Chauffeur,Designation_Sous_Cat_Eval_Chauffeur FROM souscategoriesevaluationchauffeurs ORDER BY Designation_Sous_Cat_Eval_Chauffeur ASC";
        $result=$db->read($query);
        return  $result ;
        
    }


   






}

?>