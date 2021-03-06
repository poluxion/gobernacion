<?php $ID = $datos[0]['ID'];
$usuario = $datos[0]['usuario'];
$password = $datos[0]['password'];
$nombre = $datos[0]['nombre'];
$apellido = $datos[0]['apellido'];
$cedula = $datos[0]['cedula'];
$correo = $datos[0]['correo'];
$telefono = $datos[0]['telefono'];
?>

<html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/style.css">
  <title>Actualizar Usuarios</title>
</head>

<body>
  <div class="mx-auto" style="width: 600px;">
    <div class="container" style="margin-top: 50px;">
      <form class="row g-3" action="<?php echo base_url(); ?>/actualizar" method="post" style="background-color: #9fb8d9;">
        <input type="hidden" name="ID" id="ID" value="<?php echo $ID ?>">
        <div class="col-md-6">
          <label for="usuario" class="form-label">Usuario: </label>
          <input type="text" class="form-control" name="usuario" value='<?php echo $usuario ?>' required>
        </div>
        <div class="col-md-6">
          <label for="password" class="form-label">Password: </label>
          <input type="password" class="form-control" name="password" value='<?php echo $password ?>' required>
        </div>
        <div class="col-12">
          <label for="nombre" class="form-label">Nombre: </label>
          <input type="text" class="form-control" name="nombre" value='<?php echo $nombre ?>' required>
        </div>
        <div class="col-12">
          <label for="apellido" class="form-label">Apellido: </label>
          <input type="text" class="form-control" name="apellido" value='<?php echo $apellido ?>' required>
        </div>
        <div class="col-12">
          <label for="cedula" class="form-label">Cedula: </label>
          <input type="number" class="form-control" value='<?php echo $cedula ?>' name="cedula" required>
        </div>
        <div class="col-12">
          <label for="telefono" class="form-label">Telefono: </label>
          <input type="number" class="form-control" name="telefono" value='<?php echo $telefono ?>' required>
        </div>
        <div class="col-12">
          <label for="correo" class="form-label">Correo: </label>
          <input type="email" class="form-control" name="correo" value='<?php echo $correo ?>' required>
        </div>
        <input type='hidden' name='actualizar' value='actualizar'>
        </table>
        <center>
          <input class="btn btn-success" type='submit' value='Guardar'>
          <button type="button" class="btn btn-danger"><a class="letterBtn" href="<?php echo base_url(); ?>/index">Volver</a></button>
        </center>
      </form>
    </div>
</body>

</html>