<?php
include("conexion.php");
$con=conectar();
$id_carrera=$_POST['id_carrera'];
$nombreC=$_POST['nombreC'];
$sql="INSERT INTO carrera VALUES('$id_carrera','$nombreC')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: carrera.php");

}else{
 
}
?>