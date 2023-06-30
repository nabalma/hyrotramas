<?php

class DecisionEvaluation {


    public function get_All_DecisionsEvaluations(){
        //-- Instanciation de la BD,
        $db=Database::getDbInstance();

        //  -- Select all the users that are not approved yet 
        $query="SELECT 	Ref_Decision_Evaluation,Designation_Decision_Evaluation FROM decisionevaluations ORDER BY Designation_Decision_Evaluation ASC";
        $result=$db->read($query);
        return  $result ;
        
    }


   






}

?>