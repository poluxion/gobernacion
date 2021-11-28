<?php
$idDiaNoHabil = $datos[0]['idDiaNoHabil'];
$fechaNoHabil = $datos[0]['fechaNoHabil'];
?>

<center>
    <h2>ACTUALIZAR</h2>
</center>
<div class="mx-auto" style="width: 600px;">
    <div class="container" style="margin-top: 50px;">
        <form class="row g-3" action="<?php echo base_url(); ?>/mainControllers/editDiaNoHabil" method="post" style="background-color: #9fb8d9;">
            <input type="hidden" name="idDiaNoHabil" id="idDiaNoHabil" value="<?php echo $idDiaNoHabil ?>">
            <div class="col-12">
                <label for="fechaNoHabil" class="form-label">Fecha no hábil: </label>
                <input type="date" class="form-control" name="fechaNoHabil" value='<?php echo $fechaNoHabil ?>'>
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