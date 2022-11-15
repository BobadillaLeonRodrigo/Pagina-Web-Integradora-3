<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <!-- CSS BOOTSTRAP -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- sCRIPT BOOTSTRAP -->
    <title>Registro</title>
</head>
<body class="bg-black">
  <!-- STAR NAV -->
  <div id="header">
    <div class="menuContainer">
    </div>	
  </div>
<!--END NAV-->
  <p><h1 class="text-center bg-black text-white">Registro</h1></p> 
      <!-- END NAV -->
          <!--Inicio de Container (formulario)-->
          <!--formulario del la parte de register usando post-->
          <!--Action podemos agregar registrar-r.php para hacer direccion a iniciarsecion.php -->
    <form action="" method="POST">
          <div class="container bg-black container-fluid">
            <div class="row text-center">
              <div class="col-12 col-sm-4 text-white">
                <label for="">Ingresa Nombre</label>
                <input class="form-control bg-black text-white" type="text" name="nombrer" id="" placeholder="Roberto">
              </div>
              <div class="col-12 col-sm-4 text-white">
                <label for="">Ingresa Apellido Paterno</label>
                <input class="form-control bg-black text-white" type="text" name="apa" id="" placeholder="Gonzales">
              </div>
              <div class="col-12 col-sm-4 text-white">
                <span>Ingresa Apellido Materno</span>
                <input class=" form-control bg-black text-white" type="text" name="ama" id="" placeholder="Alvarez">
              </div>
              <div class="col-12 col-sm-4 text-white">
                <label for="">Correo Institucional</label>
                <input class="form-control bg-black text-white" type="email" name="emailr" id="" placeholder="Ejem: al123456789@gmail.com">
              </div>
              <div class="col-12 col-sm-4 text-white">
                <label for="">Matricula</label>
                <input class="form-control bg-black text-white" type="number" name="matricula" id="" placeholder="12345678">
              </div>
              <div class="col-12 col-sm-4 text-white bg-black">
                <label for="inputPassword5">Contraseña</label>
                <input type="password" id="inputPassword5" class="form-control bg-black" name="contraseña" aria-describedby="passwordHelpBlock">
              </div>
              <select class="form-select bg-black col-12 col-sm-4 text-white" name="id_carrera" aria-label="Default select example">
                <option selected>Carrera</option>
                <option value="200">TSU: Mantenimiento, Área Inductrial.</option>
                <option value="201">ING: Mantenimiento Industrial.</option>
                <option value="202">TSU: Mecatronica, Área Sistemas de Manufactura Flexible.</option>
                <option value="203">ING: Mecatronica.</opction>
                <option value="204">TSU: Desarrollo de Negocios, Área Mercadotecnia.</option>
                <option value="205">TSU: Desarrollo de Negocios, Área Ventas.</option>
                <option value="206">LIC: Innovación de Negocios y Mercadotecnia.</option>
                <option value="207">TSU: Tecnologías de la Información, Área Infraestructura de Redes Digitales.</option>
                <option value="208">TSU: Tecnologías de la Información, Área Desarrollo de Software Multiplataforma.</option>
                <option value="209">ING: Redes Inteligentes y Ciberseguridad.</option>
                <option value="210">ING: Desarrollo y Gestión de Software.</opction>
                <option value="211">TSU: Procesos Industriales, Área Manufactura.</option>
                <option value="212">ING: Sistemas Productivos.</option>
                <option value="213">TSU: Paramédico.</option> 
                <option value="214">LIC: Protección Civil y Emergencias.</opction>
                <option value="215">TSU: Quimica, Área Tecnología Ambiental.</option>
                <option value="216">ING: Tecnología Ambiental.</option>
                <option value="217">LIC: En Enfermeria.</opction>
                <option value="218">TSU: Procesos Alimentarios.</option>
                <option value="219">TSU: Quimica, Área Biotecnología.</option>
              </select>
              <select class="form-select bg-black text-white col-12 col-sm-4" name="id_ruta" aria-label="Default select example">
                <option selected>Ruta</option>
                <option value="100">Tollocan</option>
                <option value="101">Xonacatlan</option>
              </select>
            </div> 
            <br><br>
            
            <input type="submit" name="registrarme" size="10" value="Registrarme">
            <!--<a href="http://localhost/INTEGRADOR/iniciarsesion.php" type="submit"
        class="btn btn-black btn-lg position-absolute top-auto start-50 translate-middle-x text-white border-0 bg-dark" 
        class="registrarme"
        tabindex="-1" role="button" aria-disabled="true">Registrarme</a>-->
            <!--<button type="submit">Enviar Formulario</button>-->
</form>
<?php include("registrar-r.php"); ?>
<!--Fin del formulario post-->
        <br><br><br>
        <!--Pie de pagina-->
        <footer class="bg-light text-center text-lg-start">
        <div class="text-center p-3 container-fluid" style="background-color: white;">
          <img src="http://localhost/INTEGRADOR/assets/img/telefono.jpeg" width="30px" height="30px">  7221864329
          <img src="http://localhost/INTEGRADOR/assets/img/correo.jpeg" width="30px" height="30px">  central@gmail.com
          <img src="http://localhost/INTEGRADOR/assets/img/instragram.jpeg" width="30px" height="30px">  SCInt
          <img src="http://localhost/INTEGRADOR/assets/img/facebook.jpeg" width="30px" height="30px">  SCInternet
        </div>
      </footer>
    <!--Fin de pie de pagina-->
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<!--Implementacion del layout-->
<script src="/integrador/assets/js/layout.js"></script>
</html> 