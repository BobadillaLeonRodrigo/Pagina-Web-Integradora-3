<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS BOOTSTRAP -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- SCRIPT BOOTSTRAP -->
    <link rel="stylesheet" type="text/css" href="./css/index.scss">
    <title>IniciarSesión</title>
</head>
<body class="bg-black">
     <!-- STAR NAV -->
     <div id="header">
			<div class="menuContainer">
			</div>	
		</div>
  <!--END NAV-->
  <!--Inicio de Seción--> 
      <form action="validar.php" class="bg-black" method="POST">
        <div class="container bg-black">
          <div class="row justify-content-center pt-5 mt-5 m-1">
            <div class="col-md-6 col-sm-8 coL-xL-4 coL-Lg-5 formulario">
            <div class="form-group text-center text-white">
          <label for="exampleInputEmail1" class="form-label text-white">Ingresa tu Nombre</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="nombrer" aria-describedby="emailHelp">
        </div>
        <div class="form-group text-center pt-3">
        <label for="inputPassword5" class="form-label text-white">Ingresa tu Contraseña</label>
        <input type="password" id="inputPassword5" class="form-control" name="contraseña" aria-describedby="passwordHelpBlock">
        <input type="submit" value = "Iniciar Sesion" onclick="error()">
        <!-- <button type="submit" name="ingresar" class="btn"><a href="http://localhost/INTEGRADOR/finregister.php">Ingresar</a></button>-->
        <button type="submit" class="btn"><a href="http://localhost/INTEGRADOR/password.php">¿Olvidaste tu contraseña?</a></button>
       
        <button type="submit" class="btn"><a href="http://localhost/INTEGRADOR/admin/index.php">Ingresar al Panel</a></button>
        <!--<input type="submit" value = "Ingresar al panel" onclick="error()">-->
      </form>
      <br><br><br><br><br><br><br>
        </div>
    </div>
      <!--Pie de pagina-->
     <footer class="bg-black text-center text-lg-start">
      <div class="text-center" style="background-color: bark;">
        <div class="text-white">
          <img src="http://localhost/INTEGRADOR/assets/img/telefono1.jpg" width="30px" height="30px">  7221864329
          <img src="http://localhost/INTEGRADOR/assets/img/correo1.jpg" width="30px" height="30px">  central@gmail.com
          <img src="http://localhost/INTEGRADOR/assets/img/instagram1.jpg" width="30px" height="30px">  SCInt
          <img src="http://localhost/INTEGRADOR/assets/img/facebook1.jpg" width="30px" height="30px">  SCInternet
        </div>
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