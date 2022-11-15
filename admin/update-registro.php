<?php
include("conexion.php");
$con=conectar();
$id_registro=$_POST['id_registro'];
$nombrer=$_POST['nombrer'];
$apa=$_POST['apa'];
$ama=$_POST['ama'];
$emailr=$_POST['emailr'];
$matricula=$_POST['matricula'];
$contraseña=$_POST['contraseña'];
$id_carrera=$_POST['id_carrera'];
$id_ruta= $_POST['id_ruta'];
$sql="UPDATE registro SET nombrer='$nombrer', apa='$apa', ama='$ama', emailr='$emailr', contraseña='$contraseña', matricula='$matricula', id_carrera='$id_carrera', id_ruta='$id_ruta' WHERE id_registro='$id_registro'";
$query=mysqli_query($con,$sql);
if($query){
    Header("Location: registro.php");}
?>