<?php 
include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM registro WHERE id_registro='$id'";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
        <div class="container mt-5">
            <form action="update-registro.php" method="POST">                  
                <input type="hidden" name="id_registro" value="<?php echo $row['id_registro']?>">      
                <input type="text" class="form-control mb-3" name="nombrer" placeholder="Nombres" value="<?php echo $row['nombrer']?>">
                <input type="text" class="form-control mb-3" name="apa" placeholder="Apellido Paterno" value="<?php echo $row['apa']?>"> 
                <input type="text" class="form-control mb-3" name="ama" placeholder="Apellido Materno" value="<?php echo $row['ama']?>">
                <input type="text" class="form-control mb-3" name="emailr" placeholder="Correo" value="<?php echo $row['emailr']?>">
                <input type="text" class="form-control mb-3" name="matricula" placeholder="Matricula" value="<?php echo $row['matricula']?>">
                <input type="text" class="form-control mb-3" name="contraseña" placeholder="Contraseña" value="<?php echo $row['contraseña']?>">
                <input type="text" class="form-control mb-3" name="id_carrera" placeholder="ID Carrera" value="<?php echo $row['id_carrera']?>"> 
                <input type="text" class="form-control mb-3" name="id_ruta" placeholder="ID Ruta" value="<?php echo $row['id_ruta']?>"> 
                <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
            </form>                
        </div>
    </body>
</html>