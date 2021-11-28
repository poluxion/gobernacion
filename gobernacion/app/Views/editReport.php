<?php
$idReportes = $datos[0]['idReportes'];
$nombreReportes = $datos[0]['nombreReportes'];
$frecuencia = $datos[0]['frecuencia'];
?>

<center>
    <h2>ACTUALIZAR</h2>
</center>
<div class="mx-auto" style="width: 600px;">
    <div class="container" style="margin-top: 50px;">
        <form class="row g-3" action="<?php echo base_url(); ?>/mainControllers/editReport" method="post" style="background-color: #9fb8d9;">
            <input type="hidden" name="idReportes" id="idReportes" value="<?php echo $idReportes ?>">
            <div class="col-12">
                <label for="nombreReportes" class="form-label">Nombre del reporte: </label>
                <input type="text" class="form-control" name="nombreReportes" value='<?php echo $nombreReportes ?>'>
            </div>

            <select class="form-select" name="frecuencia" aria-label="Default select example">
                <option selected>Selecciona una opción</option>
                <?php foreach ($dat as $frecuencia) { ?>
                    <option name="frecuencia" value="<?php echo $frecuencia->idFrecuencia ?>"><?php echo $frecuencia->nombreFrecuencia ?></option>
                <?php } ?>
            </select>


            <center>
                <div class="col-12">
                    <input type="submit" class="btn btn-success" value='Guardar'>
                    <a href="<?php echo base_url(); ?>/reportList" class="btn btn-danger">Volver</a>
                </div>
            </center>
        </form>
    </div>
</div>