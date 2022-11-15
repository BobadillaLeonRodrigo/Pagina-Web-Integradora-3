<?php
include("conexion.php");
$con=conectar();
$id_ruta=$_POST['id_ruta'];
$nombre_ruta=$_POST['nombre_ruta'];
$sql="INSERT INTO ruta VALUES('$id_ruta','$nombre_ruta')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: ruta.php");

}else{
 
}
?> 