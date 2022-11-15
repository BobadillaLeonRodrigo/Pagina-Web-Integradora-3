<?php
session_start();
$connection = mysqli_connect("localhost","root","","CuervoBus");

if(isset($_POST['registerbtn']))
{
    //campos de la tabla registro
    $id_registro = $_POST['id_registro'];
    $id_carrera = $_POST['id_carrera'];
    $id_ruta = $_POST['id_ruta'];
    $nombrer = $_POST['nombrer'];
    $ap = $_POST['ap'];
    $am = $_POST['am'];
    $matricula = $_POST['matricula'];
    $correo_intitucional = $_POST['correo_intitucional'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];

    $email_query = "SELECT * FROM registro WHERE correo_intitucional='$correo_intitucional' ";
    $email_query_run = mysqli_query($connection, $email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = "Correo electrónico ya tomado. Por favor, intente con otro.";
        $_SESSION['status_code'] = "error";
        header('Location: tables.php');  
    }
    else
    {
        if($password === $cpassword)
        { //ingresamos los datos de como se declaro la tabla
            $query = "INSERT INTO registro (id_registro,id_carrera,id_ruta,nombrer,ap,am,matricula,correo_intitucional,password) 
            VALUES ('$id_registro','$id_carrera','$id_ruta','$nombrer','$ap','$am','$matricula','$correo_intitucional','$password')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved"; y cambiar el tables de cada una de la bae de datos
                $_SESSION['success'] = "Perfil de administrador agregado";
                $_SESSION['status_code'] = "success";
                header('Location: tables.php');
            }
            else 
            {
                $_SESSION['status'] = "Admin Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: tables.php');  
            }
        }
        else 
        {
            $_SESSION['status'] = "
            Contraseña y Confirmar contraseña no coinciden";
            $_SESSION['status_code'] = "warning";
            header('Location: tables.php');  
        }
    }

}

if(isset($_POST['updatebtn']))
{
    //Cambiamos lo datos de acuerdo a los datos de la tabla en base de datos
    // en corteches se agrega el name del boton en register_edit.php
    $id_registro = $_POST['edit_id'];
    $id_carrera = $_POST['edit_idcarrera'];

    $id_ruta = $_POST['edit_idruta'];
    $nombrer = $_POST['edit_nombrer'];

    $ap = $_POST['edit_apellidop'];
    $am = $_POST['edit_apellidom'];

    $matricula = $_POST['edit_matricula'];
    $correo_intitucional = $_POST['edit_correo'];

    $password = $_POST['edit_password'];
    //agregamos los campos de la tabla registro de la base de datos CuervoBus
    $query = "UPDATE regitro SET id_registro='$id_registro',id_carrera='$id_carrera',id_ruta='$id_ruta',nombrer='$nombrer',ap='$ap',am='$am',matricula='$matricula',correo_intitucional='$correo_intitucional',password='$password' WHERE id_registro='$id_registro'";
    $query_run = mysqli_query($connection, $query);
    if($query_run)
    {
        $_SESSION['status'] = "Tus datos están actualizados";
        $_SESSION['status_code'] = "success";
        header('Location: tables.php'); 
    }
    else
    {
        $_SESSION['status'] = "Tus datos no estan actualizados";
        $_SESSION['status_code'] = "error";
        header('Location: tables.php'); 
    }
}
if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];
    $query = "DELETE FROM register WHERE id_registro='$id_registro' ";
    $query_run = mysqli_query($connection, $query);
    if($query_run)
    {
        $_SESSION['status'] = "Tus datos han sido eliminados";
        $_SESSION['status_code'] = "success";
        header('Location: tables.php'); 
    }
    else
    {
        $_SESSION['status'] = "Tus datos no han sido eliminados";       
        $_SESSION['status_code'] = "error";
        header('Location: tables.php'); 
    }    
}


if(isset($_POST['login_btn']))
{
    $correo_intitucional= $_POST['correo_intitucional'];
    $password_login = $_POST['password']; 
    $query = "SELECT * FROM registro WHERE correo_intitucional='$email_login' AND password = '$password_login' ";
    $query_run = mysqli_query($connection, $query);

    if(mysqli_fetch_array($query_run))
    {
       $_SESSION['id_registro'] = $email_login;
       header('Location: index.php');
    }
    else
    {
        $_SESSION['status'] = 'Email id / Password is invalid';
        header('Location: login.php');
    }
}



?>