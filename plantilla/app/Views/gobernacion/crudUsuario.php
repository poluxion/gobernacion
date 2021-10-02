<?php
require_once('conexion.php');

class crudUser{
    public function __construct(){}

    public function insertar($usuario){
        $db=Db::conectar();
        $insert=$db->prepare('INSERT INTO usuario values(NULL,:usuario,:nombre,:apellido,:cedula,:password,:telefono,:correo)');
        $insert->bindValue('usuario' ,$usuario->getUsuario());
        $insert->bindValue('nombre' ,$usuario->getNombre());
        $insert->bindValue('apellido' ,$usuario->getApellido());
        $insert->bindValue('cedula' ,$usuario->getCedula());
        $insert->bindValue('password' ,$usuario->getPassword());
        $insert->bindValue('telefono' ,$usuario->getTelefono());
        $insert->bindValue('correo' ,$usuario->getCorreo());
        $insert->execute();
    }

    public function mostrar(){
        $db=Db::conectar();
        $listaUsers=[];
        $select=$db->query('SELECT * FROM usuario');

        foreach($select->fetchAll() as $usuario){
            $myUser=new Usuario();
            $myUser->setID($usuario['ID']);
            $myUser->setUsuario($usuario['usuario']);
            $myUser->setNombre($usuario['nombre']);
            $myUser->setApellido($usuario['apellido']);
            $myUser->setCedula($usuario['cedula']);
            $myUser->setPassword($usuario['password']);
            $myUser->setTelefono($usuario['telefono']);
            $myUser->setCorreo($usuario['correo']);
            $listaUsers[]=$myUser;
        }
        return $listaUsers;
    }

    public function eliminar($ID){
        $db=Db::conectar();
        $eliminar=$db->prepare('DELETE FROM usuario WHERE ID=:ID');
        $eliminar->bindValue('ID',$ID);
        $eliminar->execute();
    }

    public function obtenerUser($ID)
    {
        $db=Db::conectar();
        $select=$db->prepare('SELECT * FROM usuario WHERE ID=:ID');
        $select->bindValue('ID',$ID);
        $select->execute();
        $usuario=$select->fetch();
        $myUser= new Usuario();
        $myUser->setID($usuario['ID']);
        $myUser->setUsuario($usuario['usuario']);
        $myUser->setNombre($usuario['nombre']);
        $myUser->setApellido($usuario['apellido']);
        $myUser->setCedula($usuario['cedula']);
        $myUser->setPassword($usuario['password']);
        $myUser->setTelefono($usuario['telefono']);
        $myUser->setCorreo($usuario['correo']);
        return $myUser;
    }

    public function actualizar($usuario){
        $db=Db::conectar();
        $actualizar=$db->prepare('UPDATE usuario SET usuario=:usuario,nombre=:nombre,apellido=:apellido,cedula=:cedula,password=:password,telefono=:telefono,correo=:correo WHERE ID=:ID');
        $actualizar->bindValue('ID', $usuario->getID());
        $actualizar->bindValue('usuario', $usuario->getUsuario());
        $actualizar->bindValue('nombre', $usuario->getNombre());
        $actualizar->bindValue('apellido', $usuario->getApellido());
        $actualizar->bindValue('cedula', $usuario->getCedula());
        $actualizar->bindValue('password', $usuario->getPassword());
        $actualizar->bindValue('telefono', $usuario->getTelefono());
        $actualizar->bindValue('correo', $usuario->getCorreo());
        $actualizar->execute();
    }
}

?>