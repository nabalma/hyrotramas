<?php
 
// Server informations
$path = $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["HTTP_HOST"].$_SERVER["SCRIPT_NAME"];
$path = str_replace("index.php","",$path);

define("ROOT",$path);
define("ASSETS",$path."assets/");


// Website Titles
define("WEBSITE_TITLE","FILMOTHEQUE");

//Database informations
define("DB_NAME","filmotheque_db");
define("DB_USER","root");
define("DB_PASS","");
define("DB_TYPE","mysql");
define("DB_HOST","localhost");


?>