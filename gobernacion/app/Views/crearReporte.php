<center>
  <h2>REGISTRO DE REPORTES</h2>
  </center>
<div class="mx-auto" style="width: 600px;">
<div class="container" style="margin-top: 50px;">
<form class="row g-3" action="<?php echo base_url(); ?>/mainControllers/crearReport" method="post" style="background-color: #9fb8d9;">
<!--  
  <div class="col-12">
    <label for="idReporte" class="form-label">id del reporte: </label>
    <input type="number" class="form-control" name="idReporte" required>
  </div>
  -->
  <div class="col-12">
    <label for="nombreReportes" class="form-label">Nombre del reporte: </label>
    <input type="text" class="form-control" name="nombreReportes" required autocomplete="off">
  </div>    

<select class="form-select" name="frecuencia" aria-label="Default select example">
  <option selected>Selecciona una opción</option>
  <?php foreach ($datos as $frecuencia) { ?>
  <option name="frecuencia" value="<?php echo $frecuencia->idFrecuencia ?>"><?php echo $frecuencia->nombreFrecuencia ?></option>
  <?php } ?>
</select>
  <center>
  <div class="col-12">
  <input type="submit" class="btn btn-success" value='Guardar'>
  <a href="<?php echo base_url(); ?>/reportList" class="btn btn-danger">Atrás</a>
  </div> 
  </center>
</form> 
</div>
</div>
