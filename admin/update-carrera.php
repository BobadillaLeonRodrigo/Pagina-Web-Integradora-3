<?php
include("conexion.php");
$con=conectar();
$id_carrera=$_POST['id_carrera'];
$nombreC=$_POST['nombreC'];
$sql="UPDATE carrera SET id_carrera='$id_carrera',nombreC='$nombreC' WHERE id_carrera='$id_carrera'";
$query=mysqli_query($con,$sql);
if($query){
    Header("Location: carrera.php");}
?>