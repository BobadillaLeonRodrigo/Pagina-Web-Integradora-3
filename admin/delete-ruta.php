<?php
include("conexion.php");
$con=conectar();
$id_ruta=$_GET['id'];
$sql="DELETE FROM ruta  WHERE id_ruta='$id_ruta'";
$query=mysqli_query($con,$sql);
if($query){
    Header("Location: ruta.php");
} 