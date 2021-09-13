<?php
require_once('crudUsuario.php');   
require_once('usuario.php'); 

$crud = new crudUser();
$usuario= new Usuario();

if (isset($_POST['insertar'])) {
    $usuario->setUsuario($_POST['usuario']);
    $usuario->setNombre($_POST['nombre']);
    $usuario->setApellido($_POST['apellido']);
    $usuario->setCedula($_POST['cedula']);
    $usuario->setPassword($_POST['password']);
    $usuario->setTelefono($_POST['telefono']);
    $usuario->setCorreo($_POST['correo']);  

    $crud->insertar($usuario);
    header('Location: index.php');
}elseif (isset($_POST['actualizar'])) {
    $usuario->setID($_POST['ID']);
    $usuario->setUsuario($_POST['usuario']);
    $usuario->setNombre($_POST['nombre']);
    $usuario->setApellido($_POST['apellido']);
    $usuario->setCedula($_POST['cedula']);
    $usuario->setPassword($_POST['password']);
    $usuario->setTelefono($_POST['telefono']);
    $usuario->setCorreo($_POST['correo']); 
    $crud->actualizar($usuario);
    header('Location: index.php');
}elseif ($_GET['accion']=='e') {
    $crud->eliminar($_GET['id']);
    header('Location: index.php');
}elseif ($_GET['accion']=='a') {
    header('Location: actualizar.php');
}
?>