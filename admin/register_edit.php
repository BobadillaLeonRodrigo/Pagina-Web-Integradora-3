<?php
session_start();
include('includes/heades.php');
include('includes/navbartable.php');
?>


<div class="container-fluid">


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"> EDIT Admin Profile </h6>
    </div>
    <div class="card-body">
    <?php

    $connection = mysqli_connect("localhost","root","","CuervoBus");

    if(isset($_POST['edit_btn']))
    {
        $id = $_POST['edit_id'];
        
        $query = "SELECT * FROM registro WHERE id_registro='$id_registro' ";
        $query_run = mysqli_query($connection, $query);

        foreach($query_run as $row)
        {
            ?>

<!--Agregar el name de cada boton en code.php-->

<form action="code.php" method="POST">
<!--cambiar el nombre del name y cambiar la parte de row del parentecis por el del campo de la base de datos-->
<input type="hidden" name="edit_id" value="<?php echo $row['id_registro'] ?>">
<div class="form-group">
    <label>Id-Registro </label>
    <input type="text" name="edit_idregistro" value="<?php echo $row['id_registro'] ?>" class="form-control" placeholder="Enter Username">
</div>
<div class="form-group">
    <label>Id-Carrera</label>
    <input type="email" name="edit_idcarrera" value="<?php echo $row['id_carrera'] ?>" class="form-control" placeholder="Enter Email">
</div>

<div class="form-group">
    <label> Id-Ruta </label>
    <input type="text" name="edit_idruta" value="<?php echo $row['id_ruta'] ?>" class="form-control" placeholder="Enter Username">
</div>
<div class="form-group">
    <label>Nombre</label>
    <input type="email" name="edit_nombre" value="<?php echo $row['nombrer'] ?>" class="form-control" placeholder="Enter Email">
</div>

<div class="form-group">
    <label> Apellido P </label>
    <input type="text" name="edit_apellidop" value="<?php echo $row['ap'] ?>" class="form-control" placeholder="Enter Username">
</div>
<div class="form-group">
    <label>Apellido M</label>
    <input type="email" name="edit_apellidom" value="<?php echo $row['am'] ?>" class="form-control" placeholder="Enter Email">
</div>

<div class="form-group">
    <label> Matricula </label>
    <input type="text" name="edit_matricula" value="<?php echo $row['matricula'] ?>" class="form-control" placeholder="Enter Username">
</div>
<div class="form-group">
    <label> Correo-Intitucional </label>
    <input type="email" name="edit_correo" value="<?php echo $row['correo_intitucional'] ?>" class="form-control" placeholder="Enter Email">
</div>

<div class="form-group">
    <label>Password</label>
    <input type="password" name="edit_password" value="<?php echo $row['password'] ?>"
    class="form-control" placeholder="Enter Password">
</div>

<a href="register.php" class="btn btn-danger"> CANCEL </a>
<button type="submit" name="updatebtn" class="btn btn-primary"> Update </button>

</form>
<?php
    }
}

?>  

</div>
</div>
</div>

</div>
<!-- /.container-fluid -->

<?php
include('includes/scriptstable.php');
include('includes/footertable.php');
?>