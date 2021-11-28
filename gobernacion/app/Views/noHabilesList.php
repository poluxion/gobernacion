<div class="container" style="margin-top: 30px; margin-left: -10px;">

    <table class="table table-dark table-striped">
        <thead>

            <td>ID</td>
            <td>Día no hábil</td>
            <td>Editar</td>
            <td>Borrar</td>


        </thead>
        <tbody>
            <?php foreach ($datos as $holyday) { ?>
                <tr>
                    <td><?php echo $holyday['idDiaNoHabil'] ?></td>
                    <td><?php echo $holyday['fechaNoHabil'] ?></td>
                    <td><a href="<?php echo base_url() . '/obtenerDiaNoHabil/' . $holyday['idDiaNoHabil']  ?>" class="btn btn-primary">Editar</a></td>
                    <td><a href="<?php echo base_url() . '/mainControllers/eliminarDiaNoHabil/' . $holyday['idDiaNoHabil']  ?>" class="btn btn-danger">Eliminar</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<center>
    <a href="<?php echo base_url() . '/mainControllers/salir/' . $holyday['idDiaNoHabil']  ?>" class="btn btn-secondary">Logout</a>
    <a href="<?php echo base_url() . '/crearDiaNoHabil'  ?>" class="btn btn-primary">Crear día no hábil</a>
    <a href="<?php echo base_url() . '/'  ?>" class="btn btn-danger">Atrás</a>

</center>
</div>