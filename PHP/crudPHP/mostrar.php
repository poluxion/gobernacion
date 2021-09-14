<?php
require_once('crudUsuario.php');
require_once('usuario.php');
$crud=new crudUser();
$usuario = new Usuario();

$listaUsers=$crud->mostrar();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
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
  <?php foreach ($listaUsers as $usuario) {?>
    <tr>
		<td><?php echo $usuario->getUsuario() ?></td>
		<td><?php echo $usuario->getNombre() ?></td>
		<td><?php echo $usuario->getApellido()?> </td>
        <td><?php echo $usuario->getCedula()?> </td>
        <td><?php echo $usuario->getPassword()?> </td>
        <td><?php echo $usuario->getTelefono()?> </td>
        <td><?php echo $usuario->getCorreo()?> </td>
		<td><a href="actualizar.php?id=<?php echo $usuario->getID()?>&accion=a">Actualizar</a></td>
		<td><a href="administrarUsuario.php?id=<?php echo $usuario->getID()?>&accion=e">Eliminar</a></td>
    </tr>
	<?php }?>
  </tbody>
</table>
<center>
<button type="button" class="btn btn-danger"><a class="letterBtn" href="index.php">Volver</a></button>
</center>
</div>
</body>
</html>