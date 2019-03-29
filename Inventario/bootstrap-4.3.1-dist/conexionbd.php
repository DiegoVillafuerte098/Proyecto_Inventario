<?php	
	//conectamos Con el servidor
	$host ="localhost";
	$user ="root";
	$pass ="";
	$db="bd_formularios";

	//funcion llamada conexion con (dominio,usuarios,contrasenia,base_de_datos)
	$con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al conectar con el servidor");
?>