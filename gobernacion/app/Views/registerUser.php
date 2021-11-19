  <center>
  <h2>FORMULARIO DE REGISTRO</h2>
  </center>
<div class="mx-auto" style="width: 600px;">
<div class="container" style="margin-top: 50px;">
<form class="row g-3" action="<?php echo base_url(); ?>/mainControllers/registUser" method="post" style="background-color: #9fb8d9;">
  <div class="col-md-6">
    <label for="usuario" class="form-label">Usuario: </label>
    <input type="text" class="form-control" name="usuario" required>
  </div>
  <div class="col-md-6">
    <label for="password" class="form-label">Password: </label>
    <input type="password" class="form-control" name="password" required>
  </div>
  <div class="col-12">
    <label for="nombre" class="form-label">Nombre: </label>
    <input type="text" class="form-control" name="nombre" required>
  </div>
  <div class="col-12">
    <label for="apellido" class="form-label">Apellido: </label>
    <input type="text" class="form-control" name="apellido" required>
  </div>
  <div class="col-12">
    <label for="correo" class="form-label">Correo: </label>
    <input type="email" class="form-control" name="correo" required>
  </div>
  <div class="col-12">
    <label for="telefono" class="form-label">Telefono: </label>
    <input type="number" class="form-control" name="telefono" required>
  </div>
  <div class="col-12">
    <label for="cedula" class="form-label">Cedula: </label>
    <input type="number" class="form-control" name="cedula" style="margin-bottom: 28px;" required>
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
