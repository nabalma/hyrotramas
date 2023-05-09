<?php 

//Une fonction utlilitaire pour afficher sous une belle forme le classique print_r
function show($data){
    echo"<pre>";
    print_r($data);
    echo"</pre>";
}

function unsetAllSessions(){

     //Unsetting all the sessions set, one by one 
     if(isset($_SESSION["login_error"])){unset($_SESSION["login_error"]);}
     if(isset($_SESSION["connectedUser"])){unset($_SESSION["connectedUser"]);}
     if(isset($_SESSION["signUperror"])){unset( $_SESSION["signUperror"]);}
}





?>