<?php 
    $ID = $datos[0]['ID'];
    $usuario = $datos[0]['usuario'];
    $password = $datos[0]['password'];
    $nombreCompleto = $datos[0]['nombreCompleto'];
    $correo = $datos[0]['correo'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro de usuarios</title>
</head>
<body>
  <center>
  <h2>ACTUALIZAR</h2>
  </center>
<div class="mx-auto" style="width: 600px;">
<div class="container" style="margin-top: 50px;">
<form class="row g-3" action="<?php echo base_url(); ?>/blogControllers/editUser" method="post" style="background-color: #9fb8d9;">
  <div class="col-md-6">
  <input type="hidden" name="ID" id="ID" value="<?php echo $ID ?>">
    <label for="usuario" class="form-label">Usuario: </label>
    <input type="text" class="form-control" name="usuario" value='<?php echo $usuario ?>'>
  </div>
  <div class="col-md-6">
    <label for="password" class="form-label">Password: </label>
    <input type="password" class="form-control" name="password" value='<?php echo $password?>'>
  </div>
  <div class="col-12">
    <label for="nombreCom" class="form-label">Nombre completo: </label>
    <input type="text" class="form-control" name="nombreCompleto" value='<?php echo $nombreCompleto?>'>
  </div>
  <div class="col-12">
    <label for="correo" class="form-label">Correo: </label>
    <input type="email" class="form-control" name="correo" style="margin-bottom: 28px;" value='<?php echo $correo?>'>
  </div>
  <div class="col-12">
    <input type="hidden" class="form-control" name="tipo" value="Usuario">
  </div>
  

  <center>
  <div class="col-12">
  <input type="submit" class="btn btn-success" value='Guardar'>
  <a href="<?php echo base_url(); ?>/" class="btn btn-danger">Volver</a>
  </div> 
  </center>
</form> 
</div>
</div>
</body>
</html>