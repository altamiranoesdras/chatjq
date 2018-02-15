<?php
$conexion=@mysqli_connect("localhost","root","","chat");

if(!$conexion)
	die("Error de conexion".mysqli_connect_error() );

$query="select usuario,mensaje from conversacion order by idconversacion asc";

$result=mysqli_query($conexion,$query);

while ($data=mysqli_fetch_assoc($result)) {
	echo "<p><b>".$data['usuario']."</b> dice: ".$data['mensaje']."</p>";
}
?>