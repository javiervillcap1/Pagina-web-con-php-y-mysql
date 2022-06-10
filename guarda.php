<?php
require 'conexion.php';
$nombre = $mysqli->real_escape_string($_POST['nombre'] );
$telefono = $mysqli->real_escape_string($_POST['telefono'] );
$fecha_nacimiento = $mysqli->real_escape_string($_POST['fecha_nacimiento'] );
$estado_civil = $mysqli->real_escape_string($_POST['estado_civil'] );

$sql = "INSERT INTO empleado (nombre, telefono, fecha_nacimiento, estado_civil, activo) values ('$nombre','$telefono', '$fecha_nacimiento', '$estado_civil',1)";
$resultado = $mysqli-> query($sql); 
if($resultado>0)
{
	echo'REGISTRO AGREGADO';	
} 
else
{
	echo'ERROR AL CONECTAR';
}
echo "<br/>";
echo "<br/>";
echo "<br/><a href='index.php' class='btn btn-primary'>ir al formulario LISTADO </a>";
echo "<br/><a href='registrar.php' class='btn btn-primary'>ir al formulario NUEVO REGISTRO </a>";
?>