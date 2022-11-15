<?php
include("conexion.php");
$con=conectar();
$id_carrera=$_GET['id'];
$sql="DELETE FROM carrera WHERE id_carrera='$id_carrera'";
$query=mysqli_query($con,$sql);
if($query){
    Header("Location: carrera.php");
}