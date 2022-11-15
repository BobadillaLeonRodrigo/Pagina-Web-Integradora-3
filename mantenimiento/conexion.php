<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
/*Este es el nombre de la base de datos*/ 
$dbname = "misuper";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass , $dbname);

if(!$conn)
{
	die("No hay conexion: ".mysqli_connect_error());	
}

?>