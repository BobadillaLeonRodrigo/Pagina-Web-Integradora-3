<?php
include("conexion.php");
$con=conectar();

$id_registro=$_GET['id'];
$sql="DELETE FROM registro  WHERE id_registro='$id_registro'";
$query=mysqli_query($con,$sql);
if($query){
    Header("Location: registro.php");
}