<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
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
         <div class="row">
      <h1>REGISTRO DE EMPLEADOS</h1>
     </div>
     <div class="row">
      <form id="registro" name="registro"method="POST" action="guarda.php" autocomplete="off">
      <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre" placeholder="IntroduceTuNombre" autofocus required>
      </div>
      
      <div class="mb-3">
          <label for="Telefono" class="form-label">Telefono</label>
          <input type="text" class="form-control" id="telefono" name="telefono" placeholder="IntroduceTuTelefono" required>
      </div>
      <div class="mb-3">
          <label for="fechanacimiento" class="form-label">Fecha de nacimiento</label>
          <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Introduce la fecha de nacimiento" required>
      </div>
          <div class="mb-3">
          <label for="fechanacimiento">Estado civil</label>
          <select id="estado_civil" name="estado_civil" class="form-control" required>
          <option value="soltero">Soltero</option>
          <option value="casado">Casado</option>
          <option value="otro">Otro</option>
          </select>
      </div>
      <div>
        <button class="btn btn-primary" id="guarda" name="guarda"type="submit">Guardar</button>
        <a class="btn btn-warning" href="index.php" role="button">Lalir</a>

      </div>
      </div>
    
  
    </div>
  </body>
</html>
