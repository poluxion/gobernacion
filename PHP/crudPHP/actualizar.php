<?php
require_once('crudUsuario.php');
require_once('usuario.php');
$crud= new crudUser();
$usuario= new Usuario();

$usuario=$crud->obtenerUser($_GET['id']);
?>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<title>Actualizar Usuarios</title>
</head>
<body>
    <div class="formUpd">
<form action='administrarUsuario.php' method='post' >
<table class="table">
    <tr>
        <input type='hidden' name='ID' value='<?php echo $usuario->getID()?>'>
        <td>Usuario:</td>
        <td> <input type='text' name='usuario' value='<?php echo $usuario->getUsuario()?>'></td>
    </tr>
    <tr>
        <td>Nombre:</td>
        <td><input type='text' name='nombre' value='<?php echo $usuario->getNombre()?>' ></td>
    </tr>
    <tr>
        <td>Apellido:</td>
        <td><input type='text' name='apellido' value='<?php echo $usuario->getApellido() ?>'></td>
    </tr>
    <tr>
        <td>Cedula:</td>
        <td> <input type='number' name='cedula' value='<?php echo $usuario->getCedula()?>'></td>
    </tr>
    <tr>
        <td>Password:</td>
        <td> <input type='password' name='password' value='<?php echo $usuario->getPassword()?>'></td>
    </tr>
    <tr>
        <td>Telefono:</td>
        <td> <input type='number' name='telefono' value='<?php echo $usuario->getTelefono()?>'></td>
    </tr>
    <tr>
        <td>Correo:</td>
        <td> <input type='email' name='correo' value='<?php echo $usuario->getCorreo()?>'></td>
    </tr>
    <input type='hidden' name='actualizar' value='actualizar'>
</table>
<center>
<input class="btn btn-success" type='submit' value='Guardar'>
<button type="button" class="btn btn-danger"><a class="letterBtn" href="index.php">Volver</a></button>
</center>
</form>
</div>
</body>
</html>
