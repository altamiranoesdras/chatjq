<?php
//var_dump($_POST); exit();

extract($_POST);
$conexion=@mysqli_connect("localhost","root","","chat");

if(!$conexion)
	die("Error de conexion".mysqli_connect_error() );


$query="INSERT INTO conversacion(idconversacion, usuario, mensaje) VALUES(0, '$user', '$message')";

$result=mysqli_query($conexion,$query);

if($result)
	echo "mensaje registrado";
else
	die("Error al registrar".mysqli_connect_error() );	
?>