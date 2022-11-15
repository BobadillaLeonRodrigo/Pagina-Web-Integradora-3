<?php
$nombrer = $_POST['nombrer'];
$contraseña = $_POST['contraseña'];
session_start();
$_SESSION['nombrer'] = $nombrer;
include('con_db.php'); //conexion de base de datos
$consulta = "SELECT * FROM registro WHERE nombrer = '$nombrer' AND contraseña = '$contraseña'";

//$consult = "SELECT * FROM registro WHERE nombrer = '$admin' AND contraseña = '$root123'";

$resultado = mysqli_query($conex, $consulta);
$filas = mysqli_num_rows($resultado);
if($filas){
    header("Location: finregister.php"); //si es verdad direcciona a la siguiente pagina
}else{
    include("funcioninicio.php"); //si no vuelve a la misma y mandar la funcion (Javascript)
    include("iniciarsesion.php");
}

/*   Tomar datos de la base de datos para agregar al panel y sea login de admin y contrasela root123
if($consult){
    header("Location: admin/index.php");
}else{
    include("funcioninicio.php");
    include("iniciarsesion.php");
}
*/
mysqli_free_result($resultado);
mysqli_close($conex);
?>