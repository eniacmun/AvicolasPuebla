<?php
$hostdb= "us-cdbr-east-02.cleardb.com";
$userdb= "b6a53248e600e3";
$passdb= "f9f96a29ec31a940";
$db= "heroku_fa21d1ed065ec8c";

//Realizamos la conexion
$conexion = new mysqli("us-cdbr-east-02.cleardb.com","b6a53248e600e3","ec31a940","heroku_fa21d1ed065ec8c");
 
//Estructura de control por si falla
if(!$conexion)
{
die("No he podido conectar porque: ".mysql_error());
}
?>
