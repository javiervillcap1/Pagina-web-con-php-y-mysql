<?php
require 'conexion.php';
$id = $mysqli->real_escape_string($_GET['id']);
$sql = "select id, nombre, telefono, fecha_nacimiento, estado_civil from empleado where id = $id limit 1";
$resultado = $mysqli->query($sql);
$fila = $resultado->fetch_assoc();
?>


<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="js/jquery-3.4.1.min.js"></script>
		<script src="js/jquery.dataTables.min.js"></script>
		<script src="js/bootstrap.min.js"></script>

    <title>I LOVE BOOS</title>
    <script>
    	$(document).ready(function () {
      $('#tabla').DataTable();
      });
    </script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
  	 <div class="container">
  	 		 <div class="row">
		<h1>MODIFICAR REGISTROS</h1>
	 </div>
  	 	
	 <div class="row">
		<form id="registro" name="registro"method="POST" action="editar_guarda.php" autocomplete="off">
		<div class="mb-3">
			  <label for="nombre" class="form-label">Nombre</label>
			  <input type="text" class="form-control" value="<?php echo $fila['nombre']?>" id="nombre" name="nombre" placeholder="IntroduceTuNombre" autofocus required>
			  <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
		</div>
		
		<div class="mb-3">
			  <label for="Telefono" class="form-label">Telefono</label>
			  <input type="text" class="form-control" value="<?php echo $fila['telefono']?>" id="telefono" name="telefono" placeholder="IntroduceTuTelefono" required>
		</div>

		<div class="mb-3">
			  <label for="fechanacimiento" class="form-label">Fecha de nacimiento</label>
			  <input type="date" class="form-control" value="<?php echo $fila['fecha_nacimiento']?>" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Introduce la fecha de nacimiento" required>
		</div>
			  <div class="mb-3">
			  <label for="fechanacimiento">Estado civil</label>
			  <select id="estado_civil" name="estado_civil" class="form-control" required>
			  <option value="soltero" <?php if ('soltero' ==$fila['estado_civil']) { echo 'selected'; } ?>>Soltero</option>
			  <option value="casado" <?php if ('casado' ==$fila['estado_civil']) { echo 'selected'; } ?>>Casado</option>
			  <option value="otro" <?php if ('otro' ==$fila['estado_civil']) { echo 'selected'; } ?>>Otro</option>
			  </select>
		</div>
		<div>
			<button class="btn btn-primary" id="editar_guarda	" name="editar_guarda"type="submit">Guardar</button>
			<a class="btn btn-warning" href="index.php" role="button">Lalir</a>
		</div>
		</div>
	</div>
	
  </body>
</html>
