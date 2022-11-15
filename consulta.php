<?php
/*  Mandamos a llamar  nuestra conexion de php  con require */
require ('./DB/conexion.php');
/* Declaramos una variable y dentro de ella asignamos una consulta */
/*Cliente es la tabla o entida de la Base de datos*/
  $sql = "SELECT * FROM `Cliente`;";
  $result = mysqli_query($conexion, $sql);
  $Cliente = array();
  while ($fila = mysqli_fetch_array($result)) {
    array_push($Cliente, $fila);
  }
  echo json_encode($Cliente);
  mysqli_free_result($result);
  mysqli_close($conexion);
?>