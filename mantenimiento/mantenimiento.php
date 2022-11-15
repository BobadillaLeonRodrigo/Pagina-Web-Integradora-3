<?php
include("conexion.php");
/*Agregamos los campos como aparecen en la base de datos*/
$IDCliente = $_POST["numberid"];
$NomCliente = $_POST["txtnom"];
$Apc = $_POST["txtapp"];
$Amc = $_POST["txtapm"];
$RFC = $_POST["txtcorreo"];
$Dirección = $_POST["txtcontra"];

	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['limpiardatos']))
	{
		header("Location: principal.php");
	}
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['grabardatos']))
	
	{
        /*Agregamos los campos como aparecen en la base de datos*/
	$sqlgrabar = "INSERT INTO Cliente (IDCliente,NomCliente,Apc,Amc,RFC,Dirección) values ('$IDCliente','$NomCliente','$Apc','$Amc','$RFC','$Dirección')";

if(mysqli_query($conn,$sqlgrabar))
{
	header("Location: principal.php");
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
		
		
	}
	
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['modificardatos']))
	
	{
        /*Agregamos los campos como aparecen en la base de datos*/ 
			$sqlmodificar = "UPDATE Cliente SET IDCliente='$IDCliente',NomCliente='$NomCliente',Apc='$Apc',Amc='$Amc',RFC='$RFC',Dirección='$Dirección' WHERE IDCliente=$IDCliente";

if(mysqli_query($conn,$sqlmodificar))
{
	header("Location: principal.php");
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
	}
	
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['eliminardatos']))
	
	{
        /*Agregamos los campos como aparecen en la base de datos*/ 
			$sqleliminar = "DELETE FROM Cliente WHERE IDCliente=$IDCliente";

if(mysqli_query($conn,$sqleliminar))
{
	header("Location: principal.php");
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
	}
?>