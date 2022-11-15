<?php
include("con_db.php"); //conexion de base de datos
//registrarme es el name del boton del formulario
if(isset($_POST['registrarme'])){
    if(strlen($_POST['nombrer']) >= 1 && strlen($_POST['apa']) >= 1 && strlen($_POST['ama']) >= 1 && strlen($_POST['emailr']) >= 1 &&
    strlen($_POST['matricula']) >= 1 &&
    strlen($_POST['contraseña']) >= 1 &&
    strlen($_POST['id_carrera']) >= 1 &&
    strlen($_POST['id_ruta']) >= 1 ){
        $nombrer = trim ($_POST['nombrer']);
        $apa = trim ($_POST['apa']);
        $ama = trim ($_POST['ama']);
        $emailr = trim ($_POST['emailr']);
        $matricula = trim ($_POST['matricula']);
        $contraseña = trim($_POST['contraseña']);
        $id_carrera = trim ($_POST['id_carrera']);
        $id_ruta = trim ($_POST['id_ruta']);

//if(filter_var($nombrer,$apa,$ama,$emailr,$contraseña, filter_sanitize_string)){

    $consulta = "INSERT INTO registro (nombrer, apa, ama, emailr, matricula, contraseña,id_carrera,id_ruta) VALUES ('$nombrer','$apa','$ama','$emailr','$matricula','$contraseña','$id_carrera','$id_ruta')";    
    $resultado = mysqli_query($conex,$consulta);
    if($resultado){
        //header("Location:iniciarsesion.php");
        ?>
        <h3>Te has Registrado Correctamente</h3>
        <?php
        //include("funcionregistroValidado.php"); usando JavaScript
    } else{
        //header("Location: register.php");
        ?>
        <h3>¡Ups! ha ocurrido un error!</h3>
        <?php
        //include("funcionregistroError.php"); usando JavaScript
    }
 }  else{
    ?>
    <h3>Ingresa todos los campos del Registro</h3>
    <?php
    //include("funcionregistrollenado.php"); usando JavaScript
 }
}     
//}
?>