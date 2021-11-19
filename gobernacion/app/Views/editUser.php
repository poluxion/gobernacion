<?php 
    $ID = $datos[0]['ID'];
    $usuario = $datos[0]['usuario'];
    $password = $datos[0]['password'];
    $nombre = $datos[0]['nombre'];
    $apellido = $datos[0]['apellido'];
    $correo = $datos[0]['correo'];
    $telefono = $datos[0]['telefono'];
    $cedula = $datos[0]['cedula'];
?>
  <center>
  <h2>ACTUALIZAR</h2>
  </center>
<div class="mx-auto" style="width: 600px;">
<div class="container" style="margin-top: 50px;">
<form class="row g-3" action="<?php echo base_url(); ?>/mainControllers/editUser" method="post" style="background-color: #9fb8d9;">
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
    <label for="nombre" class="form-label">Nombre: </label>
    <input type="text" class="form-control" name="nombre" value='<?php echo $nombre?>'>
  </div>
  <div class="col-12">
    <label for="apellido" class="form-label">Apellido: </label>
    <input type="text" class="form-control" name="apellido" value='<?php echo $apellido?>'>
  </div>
  <div class="col-12">
    <label for="correo" class="form-label">Correo: </label>
    <input type="email" class="form-control" name="correo" value='<?php echo $correo?>'>
  </div>
  <div class="col-12">
    <label for="telefono" class="form-label">Telefono: </label>
    <input type="number" class="form-control" name="telefono" value='<?php echo $telefono?>'>
  </div>
  <div class="col-12">
    <label for="cedula" class="form-label">Cedula: </label>
    <input type="number" class="form-control" name="cedula" style="margin-bottom: 28px;" value='<?php echo $cedula?>'>
  </div>
  <div class="col-12">
    <input type="hidden" class="form-control" name="tipo" value="Usuario">
  </div>
  

  <center>
  <div class="col-12">
  <input type="submit" class="btn btn-success" value='Guardar'>
  <a href="<?php echo base_url(); ?>/tableUser" class="btn btn-danger">Volver</a>
  </div> 
  </center>
</form> 
</div>
</div>