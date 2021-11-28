<center>
  <h2>REGISTRO DE DIAS NO HABILES</h2>
  </center>
<div class="mx-auto" style="width: 600px;">
<div class="container" style="margin-top: 50px;">
<form class="row g-3" action="<?php echo base_url(); ?>/mainControllers/crearHolyday" method="post" style="background-color: #9fb8d9;">

  <div class="col-12">
    <label for="fechaNoHabil" class="form-label">Día no hábil: </label>
    <input type="date" class="form-control" name="fechaNoHabil" required autocomplete="off">
  </div>    
  <center>
  <div class="col-12">
  <input type="submit" class="btn btn-success" value='Guardar'>
  <a href="<?php echo base_url(); ?>/noHabilesList" class="btn btn-danger">Volver</a>
  </div> 
  </center>
</form> 
</div>
</div>
