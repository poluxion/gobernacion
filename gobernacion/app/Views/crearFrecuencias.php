<center>
  <h2>REGISTRO DE FRECUENCIAS</h2>
  </center>
<div class="mx-auto" style="width: 600px;">
<div class="container" style="margin-top: 50px;">
<form class="row g-3" action="<?php echo base_url(); ?>/mainControllers/crearFrecuence" method="post" style="background-color: #9fb8d9;">

  <div class="col-12">
    <label for="nombreFrecuencia" class="form-label">Nombre de frecuencia: </label>
    <input type="text" class="form-control" name="nombreFrecuencia" required autocomplete="off">
  </div>

  <div class="col-12">
    <label for="dias" class="form-label">Días: </label>
    <input type="number" class="form-control" name="dias" style="margin-bottom: 28px;" required autocomplete="off">
  </div>

  <center>
  <div class="col-12">
  <input type="submit" class="btn btn-success" value='Guardar'>
  <a href="<?php echo base_url(); ?>/frecuenceList" class="btn btn-danger">Volver</a>
  </div> 
  </center>

</form> 
</div>
</div>
