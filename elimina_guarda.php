<?php
require 'conexion.php';
$id = $mysqli->real_escape_string($_GET['id'] );

$sql = "UPDATE EMPLEADO SET activo = 0 WHERE id = $id";
     $resultado = $mysqli-> query($sql); 
if($resultado>0)
{
	echo'SE HA ELIMINADO CON EXITO';	
} 
else
{
	echo'ERROR AL ELIMINAR';
}
echo "<br/>";
echo "<br/>";
echo "<br/><a href='index.php' class='btn btn-primary'>ir al formulario LISTADO </a>";
echo "<br/><a href='registrar.php' class='btn btn-primary'>ir al formulario NUEVO REGISTRO </a>";
?>