<?php

class Formations {


    public function get_nextTrainingDate(){
        //-- Instanciation de la BD,
        $db=Database::getDbInstance();

        //  -- Select all the users that are not approved yet 
        $query="SELECT Date_Echéance_Evaluation_Chauffeur FROM evaluationschauffeurs ORDER BY Date_Echéance_Evaluation_Chauffeur DESC";
        $result=$db->read($query);
        return  $result[0]["Date_Echéance_Evaluation_Chauffeur"] ;
        
    }


    public function get_Due_Next_Training(){
        //-- Instanciation de la BD,
        $db=Database::getDbInstance();

        //  -- Select all the users that are not approved yet
        $query="SELECT (MAX(Date_Echéance_Evaluation_Chauffeur)) AS echeance FROM evaluationschauffeurs WHERE Date_Echéance_Evaluation_Chauffeur<=CURDATE() GROUP BY Ref_Chauffeur";
        $result=$db->read($query);
        return  count($result);
        
    }


    public function get_Average_Note_Training(){
        //-- Instanciation de la BD,
        $db=Database::getDbInstance();

        $sql="SELECT (COUNT(Note_Evaluation_Chauffeur)) AS nbre FROM evaluationschauffeurs WHERE Date_Echéance_Evaluation_Chauffeur>=CURDATE()";
        $resultat=$db->read($sql);
        $nbre = $resultat[0]["nbre"];

        //  -- Select all the users that are not approved yet
        $query="SELECT (AVG(Note_Evaluation_Chauffeur)) AS moyenne_note FROM evaluationschauffeurs WHERE Date_Echéance_Evaluation_Chauffeur>=CURDATE() LIMIT $nbre";
        $result=$db->read($query);
        return  round($result[0]["moyenne_note"],1);
        
    }



    public function add_Evaluation($post){

        //-- Instanciation de la BD,
        $db=Database::getDbInstance();

        // Collecte des données reçues

        $numdoc = trim($post['numdoc']);
        $refChauf = $post['refChauffeur'];

        $dateEval = date('Y-m-d', strtotime($post['dateEvaluation']));
        $dateEcheanceEval = date('Y-m-d', strtotime($post['dateEcheanceEvaluation']));

        $catEval = $post['categorieEvaluation'];
        $sousCatEval = $post['sousCategorieEvaluation'];

        $noteEval = trim($post['noteEvaluation']);
        $decisionEval = $post['decisionEvaluation'];
        $commentaires = trim($post['commentairesEvaluation']);


    // Requête d'insertion avec des valeurs formatées
        $query = "INSERT INTO evaluationschauffeurstests (Num_Doc_dEvaluation, Date_Evaluation_Chauffeur, Date_Echéance_Evaluation_Chauffeur, Ref_Chauffeur, Categorie_dEvaluation, Sous_Categorie_Evaluation_Chauffeur, Note_Evaluation_Chauffeur, Decision_Evaluation_Chauffeur, Commentaires_Evaluation_Chauffeur) VALUES(:Num_Doc_dEvaluation,'$dateEval','$dateEcheanceEval',$refChauf,$catEval,$sousCatEval,$noteEval,$decisionEval,:Commentaires_Evaluation_Chauffeur)";
  


        $data["Num_Doc_dEvaluation"]=$numdoc;
        $data["Commentaires_Evaluation_Chauffeur"]=$commentaires;
       

        $resultat = $db->write($query,$data);
  

        if ($resultat === true) {
            return "success";
        } else {
            return "false";
        }
  

    }








}

?>