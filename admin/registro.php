<?php
include('includes/heades.php');
include('includes/navbar.php');
include("conexion.php");
$con=conectar();
$sql="SELECT id_registro,nombrer,apa,ama,emailr,matricula,contraseña,id_carrera,id_ruta FROM registro";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Registro Tabla</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <h1>Ingresa Datos</h1>
                <form action="insertar-registro.php" method="POST">
                    <input type="number" class="form-control mb-3" name="id_registro" placeholder="ID de Registro">
                    <input type="text" class="form-control mb-3" name="nombrer" placeholder="Nombre">
                    <input type="text" class="form-control mb-3" name="apa" placeholder="Apellido Paterno">
                    <input type="text" class="form-control mb-3" name="ama" placeholder="Apellido Materno">
                    <input type="email" class="form-control mb-3" name="emailr" placeholder="Correo">
                    <input type="number" class="form-control mb-3" name="matricula" placeholder="Matricula">
                    <input type="password" class="form-control mb-3" name="contraseña" placeholder="Contraseña">
                    <input type="number" class="form-control mb-3" name="id_carrera" placeholder="ID de Carrera">
                    <input type="number" class="form-control mb-3" name="id_ruta" placeholder="ID de Ruta">
                    <input type="submit" class="btn btn-primary" value="Agregar">
                </form>
                <!--<a type="" class="btn btn-info" href="http://localhost/INTEGRADOR/admin/index.php">Regresar al Inicio</a>-->
            </div>
            <div class="col-md-8">
                <h1>Mostrar tabla</h1>
                <table class="table-container table-bordered text-center">
                    <thead class="table-success table-striped text-center">
                        <tr class="text-center">
                            <th> Id-Registro </th>
                            <th> Nombre </th>
                            <th> Apellido Paterno </th>
                            <th> Apellido Materno </th>
                            <th> Correo </th>
                            <th> Matricula </th>
                            <th> Contraseña </th>
                            <th> ID Carrera </th>
                            <th> ID Ruta </th>
                            <th> Operaciones </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //Renderea lo datos de la tabla
                           while($row=mysqli_fetch_array($query)){
                            echo "<tr>";
                           //var_dump($row);
                        ?>
                        <th><?php echo $row['id_registro']?></th>
                        <th><?php echo $row['nombrer']?></th>
                        <th><?php echo $row['apa']?></th>
                        <th><?php echo $row['ama']?></th>
                        <th><?php echo $row['emailr']?></th>
                        <th><?php echo $row['matricula']?></th>
                        <!--Agregar Contraseña encriptada con md5 o password_hash -->
                        <th><?php echo $row['contraseña']?></th>
                        <th><?php echo $row['id_carrera']?> </th>
                        <th><?php echo $row['id_ruta']?> </th>
                        <th>
                          <div class="col">
                              <div class="row">
                                  <div>
                                    <a href="delete-registro.php?id=<?php echo $row['id_registro'] ?>" class="btn btn-danger">Eliminar</a>
                                 </div>
                                  <div>
                                    <a href="actualizar-registro.php?id=<?php echo $row['id_registro'] ?>" class="btn btn-info">Editar</a>
                                 </div>
                             </div>
                         </div>
                        </th>
                        <?php                      
                         echo "</tr>";
                           }
                        ?> 
                    </tbody>
                </table> 
            </div>
        </div>
    </div>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">   
    </script>         
</body>
</html>