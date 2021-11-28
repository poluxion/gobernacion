<?php
$idFrecuencia = $datos[0]['idFrecuencia'];
$nombreFrecuencia = $datos[0]['nombreFrecuencia'];
$dias = $datos[0]['dias'];
?>

<center>
    <h2>ACTUALIZAR</h2>
</center>
<div class="mx-auto" style="width: 600px;">
    <div class="container" style="margin-top: 50px;">
        <form class="row g-3" action="<?php echo base_url(); ?>/mainControllers/editFrecuence" method="post" style="background-color: #9fb8d9;">
            <input type="hidden" name="idFrecuencia" id="idFrecuencia" value="<?php echo $idFrecuencia ?>">
            <div class="col-12">
                <label for="nombreFrecuencia" class="form-label">Nombre de la frecuencia: </label>
                <input type="text" class="form-control" name="nombreFrecuencia" value='<?php echo $nombreFrecuencia ?>'>
            </div>
            <div class="col-12">
                <label for="dias" class="form-label">Días: </label>
                <input type="number" class="form-control" name="dias" value='<?php echo $dias ?>'>
            </div>
            <center>
                <div class="col-12">
                    <input type="submit" class="btn btn-success" value='Guardar'>
                    <a href="<?php echo base_url(); ?>/reportList" class="btn btn-danger">Volver</a>
                </div>
            </center>
        </form>
    </div>
</div>