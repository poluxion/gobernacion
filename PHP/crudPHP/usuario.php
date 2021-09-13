<?php
class Usuario{
    private $ID;
    private $usuario;
    private $nombre;
    private $apellido;
    private $cedula;
    private $password;
    private $telefono;
    private $correo;

    function __construct(){}

    public function getUsuario(){
        return $this->usuario;
    }

    public function setUsuario($usuario){
        $this->usuario = $usuario;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function setApellido($apellido){
        $this->apellido = $apellido;
    }

    public function getCedula(){
        return $this->cedula;
    }

    public function setCedula($cedula){
        $this->cedula=$cedula;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setPassword($password){
        $this->password=$password;
    }

    public function getTelefono(){
        return $this->telefono;
    }

    public function setTelefono($telefono){
        $this->telefono=$telefono;
    }

    public function getCorreo(){
        return $this->correo;
    }

    public function setCorreo($correo){
        $this->correo = $correo;
    }

    public function getID(){
        return $this->ID;
    }

    public function setID($ID){
        $this->ID = $ID;
    }

}
?>