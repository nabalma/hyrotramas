<?php

class Transporter {



    public function get_transporters(){
   //-- Instanciation de la BD,
            $db=Database::getDbInstance();

  //  -- Select all the users that are not approved yet 
  $query="SELECT * FROM transporteurs";
  $result=$db->read($query);
  return  $result ;
    }


    public function create($post){}

  
    public function get_transporter($ref){
        
    }

}

?>