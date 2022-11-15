<?php
include("conexion.php");
$con=conectar();
$id_registro = $_POST['id_regitro'];
$nombrer = $_POST['nombrer'];
$apa = $_POST['apa'];
$ama = $_POST['ama'];
$emailr = $_POST['emailr'];
$matricula = $_POST['matricula'];
$contraseña = $_POST['contraseña'];
$id_carrera = $_POST['id_carrera'];
$id_ruta = $_POST['id_ruta'];

$consulta = "INSERT INTO registro VALUES ('$id_registro','$nombrer','$apa','$ama','$emailr','$matricula','$contraseña','$id_carrera','$id_ruta')";
$query = mysqli_query ($con,$consulta);
if($query){
    Header("Location: registro.php");
}else{
}
?>