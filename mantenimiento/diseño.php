<html>
<head>
    <meta charset="utf-8">
</head>

<body>
<center>
<form name="Mantenimiento" action="mantenimiento.php" method="post">
<table border="1">

<tr>
<td colspan="6"><label>Mantenimiento de Clientes</label></td>
</tr>

<tr><td colspan="6"><label>Registrar Cliente </label></td></tr>
<tr>
    <!--Agregamos campos de la tabla (atributos) en forma visual-->
	<td><label>ID Cliente</label></td><td><input type="number" value="" maxlength="15" name="numberid"></td>
	<td><label>Nombre Cliente</label></td><td><input type="text" value="" maxlength="15" name="txtnom" maxlength="2" size="20"></td>
</tr>
<tr>
	<td><label>Apellido Paterno</label></td><td><input type="text" value="" maxlength="50" name="txtapp"></td>
	<td><label>Apellido Materno</label></td><td><input type="text" value="" maxlength="50" size="20" name="txtapm"></td>
</tr>
<tr>
	<td><label>RFC</label></td><td><input type="text" value="" maxlength="50" name="txtcorreo"></td>
	<td><label>Dirección</label></td><td><input type="text" value="" maxlength="50" name="txtcontra" maxlength="2" size="20"></td>
</tr>

<tr><td colspan="6" align="center">
<input type="submit" value="Nuevo" name="limpiardatos" >
<input type="submit" value="Grabar" name="grabardatos" >
<input type="submit" value="Modificar" name="modificardatos" >
<input type="submit" value="Eliminar" name="eliminardatos">
</td>
</tr>

<tr><td colspan="6"><label>Listado de Encargado </label></td></tr>
<!--Como se llaman en la base de datos los atributos-->
<tr><td><label>IDCliente</label></td>
	<td><label>NomCliente</label></td>
	<td><label>Apc</label></td>
	<td><label>Amc</label></td>
	<td><label>RFC</label></td>
	<td><label>Dirección</label></td>
</tr>

<?php 
$sql="SELECT * FROM Cliente";
$result=mysqli_query($conn,$sql);
while($mostrar=mysqli_fetch_array($result))
{
?>
<!--Agregamos los campos como se llaman tal cual en la base de datos-->
<tr>
	<td> <?php echo $mostrar['IDCliente'] ?>
	<td> <?php echo $mostrar['NomCliente'] ?>
	<td> <?php echo $mostrar['Apc'] ?>
	<td> <?php echo $mostrar['Amc'] ?>
    <td> <?php echo $mostrar['RFC'] ?>
	<td> <?php echo $mostrar['Dirección'] ?>
</tr>
<?php
}
?>
</table>
</form>
</center>
</body>
</html>