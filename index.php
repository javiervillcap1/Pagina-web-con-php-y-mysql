<?php
require 'conexion.php';
//$id = $mysqli->real_scape_string($_GET['id']);
$sql = "select id, nombre, telefono, fecha_nacimiento, estado_civil from empleado where activo = 1";
$resultado = $mysqli->query($sql);
//$fila = $resultado->fetch_assoc();
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
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/datatables.min.css"/>
    <script type="text/javascript" src="js/datatables.min.js"></script>
  </head>
  <body>


  	 <div class="container">

     <a class="btn btn-primary"href="registrar.php?id=<?php echo $fila['id']; ?>" >NUEVO</a>
  	 		 <div class="row">
		<h1>LISTADO DE EMPLEADOS</h1>
	 </div>
  	 	<div class="row">
  	 		<table id="tabla" class="table table-striped table-border" style="width:80%">
        <thead>
            <tr>
                <th>nombre</th>
                <th>telefono</th>
                <th>fecha</th>
                <th>estadocivil</th>
								<th>update</th>
								<th>delete</th>
            </tr>
        </thead>
        <tbody>
        	  <?php while($fila = $resultado->fetch_assoc()) { ?>
        	  	<tr>
        	  		<td><?php echo $fila['nombre']; ?> </td>
        	  		<td><?php echo $fila['telefono']; ?> </td>
        	  		<td><?php echo $fila['fecha_nacimiento']; ?> </td>
        	  		<td><?php echo $fila['estado_civil']; ?> </td>
        	  		
        	  		<td><a class="btn btn-warning"
        	  		href="editar.php?id=<?php echo $fila['id']; ?>" >EDITAR</a>
        	  		</td>

								<td><a class="btn btn-danger"
        	  		href="elimina_guarda.php?id=<?php echo $fila['id']; ?>" >ELIMINAR</a>
        	  		</td>
        	  	</tr>
        	  <?php } ?>
        </tbody>
        </table>
  	 	</div>

	</div>
	
  </body>
</html>
