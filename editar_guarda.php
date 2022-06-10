<?php
require 'conexion.php';
$id = $mysqli->real_escape_string($_POST['id'] );
$nombre = $mysqli->real_escape_string($_POST['nombre'] );
$telefono = $mysqli->real_escape_string($_POST['telefono'] );
$fecha_nacimiento = $mysqli->real_escape_string($_POST['fecha_nacimiento'] );
$estado_civil = $mysqli->real_escape_string($_POST['estado_civil'] );

$sql = "UPDATE empleado set nombre = '$nombre', telefono = '$telefono', fecha_nacimiento = '$fecha_nacimiento', estado_civil = '$estado_civil' where id = $id";
     $resultado = $mysqli-> query($sql); 
if($resultado>0)
{
	echo'SE HA MODIFICADO CON EXITO';	
} 
else
{
	echo'ERROR AL MODIFICAR';
}
echo "<br/>";
echo "<br/>";
echo "<br/><a href='index.php' class='btn btn-primary'>ir al formulario LISTADO </a>";
echo "<br/><a href='registrar.php' class='btn btn-primary'>ir al formulario NUEVO REGISTRO </a>";
?>