<?php
$hostdb= "localhost";
$userdb= "root";
$passdb= "";
$db= "incubadoras";

//Realizamos la conexion
$conexion = new mysqli("localhost","root","","incubadoras");

//Estructura de control por si falla
if(!$conexion)
{
die("No he podido conectar porque: ".mysql_error());
}
?>
