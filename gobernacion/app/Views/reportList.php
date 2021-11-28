<div class="container" style="margin-top: 30px; margin-left: -10px;">

    <table class="table table-dark table-striped">
        <thead>
            <td>ID</td>
            <td>Nombre del reporte</td>
            <td>Frecuencia</td>
            <td>Editar</td>
            <td>Eliminar</td>


        </thead>
        <tbody>
            <?php foreach ($datos as $reporte) { ?>
                <tr>
                    <td><?php echo $reporte['idReportes'] ?></td>
                    <td><?php echo $reporte['nombreReportes'] ?></td>
                    <td><?php echo $reporte['frecuencia'] ?></td>
                     <td><a href="<?php echo base_url() . '/obtenerReporte/' . $reporte['idReportes']  ?>" class="btn btn-primary">Editar</a></td>
                    <td><a href="<?php echo base_url() . '/mainControllers/eliminarReporte/' . $reporte['idReportes']  ?>" class="btn btn-danger">Eliminar</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<center>
    <a href="<?php echo base_url() . '/mainControllers/salir/' . $reporte['idReportes']  ?>" class="btn btn-secondary">Logout</a>
    <a href="<?php echo base_url() . '/crearReporte'  ?>" class="btn btn-primary">Crear Reporte</a>
    <a href="<?php echo base_url() . '/'  ?>" class="btn btn-danger">Atrás</a>

</center>
</div>