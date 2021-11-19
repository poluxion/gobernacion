<?php var_dump($_SESSION) ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/style.css">
  <title>Lista de Usuarios</title>
</head>

<body>
  <div class="container" style="margin-top: 30px;">
    <table class="table table-dark table-striped">
      <thead>
        <td>usuario</td>
        <td>nombre</td>
        <td>apellido</td>
        <td>cedula</td>
        <td>password</td>
        <td>Telefono</td>
        <td>Correo</td>
        <td>Actualizar</td>
        <td>Eliminar</td>
      </thead>
      <tbody>
        <?php foreach ($datos as $usuario) { ?>

          <tr>
            <td><?php echo $usuario->usuario ?></td>
            <td><?php echo $usuario->nombre ?></td>
            <td><?php echo $usuario->apellido ?> </td>
            <td><?php echo $usuario->cedula ?> </td>
            <td><?php echo $usuario->password ?></td>
            <td><?php echo $usuario->telefono ?></td>
            <td><?php echo $usuario->correo ?></td>
            <td><a href="<?php echo base_url() . '/obtenerNombre/' . $usuario->ID ?>">Actualizar</a></td>
            <td><a href="<?php echo base_url(); ?>/administrarUsuario?id=<?php echo $usuario->ID ?>&accion=e">Eliminar</a></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
    <center>
      <button type="button" class="btn btn-danger"><a class="letterBtn" href="<?php echo base_url(); ?>/viewsController/salir">LOGOUT</a></button>
    </center>
  </div>
</body>

</html>