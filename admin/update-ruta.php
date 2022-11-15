<?php
include("conexion.php");
$con=conectar();
$id_ruta=$_POST['id_ruta'];
$nombre_ruta=$_POST['nombre_ruta'];
$sql="UPDATE ruta SET nombre_ruta='$nombre_ruta', nombre_ruta='$nombre_ruta' WHERE id_ruta='$id_ruta'";
$query=mysqli_query($con,$sql);
if($query){
    Header("Location: ruta.php");}
?>