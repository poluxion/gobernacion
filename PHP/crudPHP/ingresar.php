<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Ingreso de Usuarios</title>
</head>
<body>
    <form action="administrarUsuario.php" method="post">
    <table class="table table-dark">
    <div class="mb-3">
    <label for="usuario" class="form-label">Usuario: </label>
    <input type="text" class="form-control" name="usuario" required>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Nombre: </label>
    <input type="text" class="form-control" name="nombre" required>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Apellido: </label>
    <input type="text" class="form-control" name="apellido" required>
  </div>
  <div class="mb-3">
    <label for="cedula" class="form-label">Cedula: </label>
    <input type="number" class="form-control" name="cedula" required>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password: </label>
    <input type="password" class="form-control" name="password" required>
  </div>
  <div class="mb-3">
    <label for="telefono" class="form-label">Telefono: </label>
    <input type="number" class="form-control" name="telefono" required>
  </div>
  <div class="mb-3">
    <label for="correo" class="form-label">Correo: </label>
    <input type="email" class="form-control" name="correo" required>
  </div>
  <input type="hidden" name='insertar' value='insertar'>
  </table>
  <center>
  <button type="button" class="btn btn-success"><input type="submit" class="btn btn.success" value='Guardar'></button> 
  <button type="button" class="btn btn-danger"><a href="index.php" class="btn btn-danger">Volver</a></button> 
  </center>

    </form>
</body>
</html>