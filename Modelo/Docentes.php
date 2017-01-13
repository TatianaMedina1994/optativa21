<?php


class Docentes {
     private $idDocente;
    private $nombre;
    private $cedula;
    private $direccion;
    private $telefono;
    private $email;
     private $password;
    private $id_TipoUsuario;
    
    function __construct($idDocente, $nombre, $cedula, $direccion, $telefono, $email, $password, $id_TipoUsuario) {
        $this->idDocente = $idDocente;
        $this->nombre = $nombre;
        $this->cedula = $cedula;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->email = $email;
        $this->password = $password;
        $this->id_TipoUsuario = $id_TipoUsuario;
    }
    
    function getIdDocente() {
        return $this->idDocente;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getCedula() {
        return $this->cedula;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function getId_TipoUsuario() {
        return $this->id_TipoUsuario;
    }

    function setIdDocente($idDocente) {
        $this->idDocente = $idDocente;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setCedula($cedula) {
        $this->cedula = $cedula;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setId_TipoUsuario($id_TipoUsuario) {
        $this->id_TipoUsuario = $id_TipoUsuario;
    }

    
}
