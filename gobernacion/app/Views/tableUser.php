<div class="container" style="margin-top: 30px; margin-left: -10px;">

    <table class="table table-dark table-striped">
        <thead>
            <td>Usuario</td>
            <td>Password</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Correo</td>
            <td>Telefono</td>
            <td>Cedula</td>
            <td>Tipo</td>
            <td>Editar</td>
            <td>Eliminar</td>

        </thead>
        <tbody>
            <?php foreach ($datos as $usuario) { ?>
                <tr>
                    <td><?php echo $usuario->usuario ?></td>
                    <td><?php echo $usuario->password ?></td>
                    <td><?php echo $usuario->nombre ?></td>
                    <td><?php echo $usuario->apellido ?></td>
                    <td><?php echo $usuario->correo ?></td>
                    <td><?php echo $usuario->telefono ?></td>
                    <td><?php echo $usuario->cedula ?></td>
                    <td><?php echo $usuario->tipo ?></td>
                    <td><a href="<?php echo base_url() . '/obtenerUser/' . $usuario->ID  ?>" class="btn btn-primary">Editar</a></td>
                    <td><a href="<?php echo base_url() . '/mainControllers/eliminar/' . $usuario->ID  ?>" class="btn btn-danger">Eliminar</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>
    <center>
        <td><a href="<?php echo base_url() . '/mainControllers/salir/' . $usuario->ID  ?>" class="btn btn-secondary">Logout</a></td>
    </center>
</div>