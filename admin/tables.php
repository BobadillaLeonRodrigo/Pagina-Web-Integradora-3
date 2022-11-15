<?php
session_start();
include('includes/heades.php');
include('includes/navbartable.php');
?>
<!--El heades.php y nadbartable.php son los achivos llamados para agregarlo a la pagina de table.php-->

 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tables</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p>
        
       
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">


    <?php
 include('includes/registro.php');
 ?>
<!-- Con el include manda a llamar de directorio de includo del doc de registro.php-->

 <?php
if(isset($_SESSION['success'])&& $_SESSION['success']!='')
{
    echo '<h2>  ' .$_SESSION['success'].'</h2>';
    unset($_SESSION['success']);
}
if(isset($_SESSION['status'])&& $_SESSION['status']!='')
{
    echo '<h2 class="bg-info">  ' .$_SESSION['status'].'</h2>';
    unset($_SESSION['status']);
}
 ?>
    
        <div class="table-responsive">


        <?php
        //nombre de la base de datos
        $connection = mysqli_connect("localhost","root","","CuervoBus");
                $query = "SELECT * FROM registro";
                $query_run = mysqli_query($connection, $query);
            ?>


            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              
                <thead>
                    <tr>
                        <!--Parte del paneladmin donde depliega el tipo de campo que tiene la fila (atribustos)-->
                        <th>Id-Registro</th>
                        <th>Id-Carrera</th>
                        <th>Id-Ruta</th>
                        <th>Nombre</th>
                        <th>Apellido P</th>
                        <th>Apellido M</th>
                        <th>Matricula</th>
                        <th>Correo Institucional</th>
                        <th>EDIT</th>
                        <th>DELATE</th>
                    </tr>
                </thead>
                <tfoot>
                <?php
                        if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                        ?>
                            <tr>
                                <!-- Agrega los campos de la tabla para desplegarlos en ella-->
                                <td><?php  echo $row['id_registro']; ?></td>
                                <td><?php  echo $row['id_carrera']; ?></td>
                                <td><?php  echo $row['id_ruta']; ?></td>
                                <td><?php  echo $row['nombrer']; ?></td>
                                <td><?php  echo $row['ap']; ?></td>
                                <td><?php  echo $row['am']; ?></td>
                                <td><?php  echo $row['matricula']; ?></td>
                                <td><?php  echo $row['correo_intitucional']; ?></td>
                                
                                <td>
                                    <!-- Para agregar al usuario lo toma del register_edit.php-->
                                    <form action="register_edit.php" method="post">
                                        <input type="hidden" name="edit_id" value="<?php echo $row['id_registro']; ?>">
                                        <button type="submit" name="edit_btn" class="btn btn-success">Editar</button>
                                    </form>
                                </td>
                                <td>
                                    <!-- La para eliminar toma del code.php-->
                                    <form action="code.php" method="post">
                                        <input type="hidden" name="delete_id" value="<?php echo $row['id_registro']; ?>">
                                        <button type="submit" name="delete_btn" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        <?php
                            } 
                        }
                        else {
                            echo "No Record Found";
                        }
                        ?>
                    </tfoot>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

 
<?php
//agrega los archivos de scripttable.php y footertable.php para que se inserten en la parte final del archivo de tabls.php
include('includes/scriptstable.php');
include('includes/footertable.php');
?>