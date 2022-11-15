<?php
include("includes/heades.php");
include("includes/navbar.php");
include("conexion.php");
$con=conectar();

$sql="SELECT * FROM ruta";
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
    <title>Ruta Tabla</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <h1>Ingresa Datos</h1>
                <form action="insertar-ruta.php" method="POST">
                    <input type="text" class="form-control mb-3" name="id_ruta" placeholder="ID de Ruta">
                    <input type="text" class="form-control mb-3" name="nombre_ruta" placeholder="Nombre Ruta">
                    <input type="submit" class="btn btn-primary">
                </form>
            </div>
            <div class="col-md-8">
                <h1>Mostrar tabla</h1>
                <table class="table">
                    <thead class="table-success table-striped" >
                        <tr>
                            <th>Id-Ruta</th>
                            <th>Nombre Ruta</th>
                            <th>Operaciones</th>
                        </tr>
                    </thead>  
                    <tbody>
                        <?php
                           while($row=mysqli_fetch_array($query)){
                        ?>
                        <th><?php echo $row['id_ruta']?></th>
                        <th><?php echo $row['nombre_ruta']?></th>
                        <th>
                          <div class="col">
                              <div class="row">
                                  <div>
                                    <a href="delete-ruta.php?id=<?php echo $row['id_ruta'] ?>" class="btn btn-danger">Eliminar</a>
                                 </div>
                                  <div>
                                    <a href="actualizar-ruta.php?id=<?php echo $row['id_ruta'] ?>" class="btn btn-info">Editar</a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">   
    </script>         
</body>
</html>