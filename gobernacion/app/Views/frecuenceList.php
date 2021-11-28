<div class="container" style="margin-top: 30px; margin-left: -10px;">

    <table class="table table-dark table-striped">
        <thead>

            <td>ID</td>
            <td>Frecuencia</td>
            <td>Editar</td>
            <td>Borrar</td>


        </thead>
        <tbody>
            <?php foreach ($datos as $frecuence) { ?>
                <tr>
                    <td><?php echo $frecuence['idFrecuencia'] ?></td>
                    <td><?php echo $frecuence['nombreFrecuencia'] ?></td>
                    <td><a href="<?php echo base_url() . '/obtenerFrecuencia/' . $frecuence['idFrecuencia']  ?>" class="btn btn-primary">Editar</a></td>
                    <td><a href="<?php echo base_url() . '/mainControllers/eliminarFrecuencia/' . $frecuence['idFrecuencia']  ?>" class="btn btn-danger">Eliminar</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<center>
    <a href="<?php echo base_url() . '/mainControllers/salir/' . $frecuence['idFrecuencia']  ?>" class="btn btn-secondary">Logout</a>
    <a href="<?php echo base_url() . '/crearFrecuencias'  ?>" class="btn btn-primary">Crear Frecuencia</a>
    <a href="<?php echo base_url() . '/'  ?>" class="btn btn-danger">Atrás</a>

</center>
</div>