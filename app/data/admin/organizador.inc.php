<?php
/* 
    
    AUTOR DE PROGRAMACIÓN PHP: 
    JOSUE ALDAIR MAMANI CARIAPAZA
	
*/


class organizador {
    
    private $nombre;
    private $apellido;
    private $dni;
    private $celular;
    private $email;

    private $codigo;
    private $clave;
    
    private $rol_organizador;
    
    
    
    function __construct($nombre, $apellido, $email,$dni, $celular,$rol_organizador, $codigo, $clave) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->dni = $dni;
        $this->celular = $celular;
        $this->email = $email;
        $this->codigo = $codigo;
        $this->clave = $clave;
        $this->rol_organizador=$rol_organizador;
    }

    
    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getDni() {
        return $this->dni;
    }

    function getCelular() {
        return $this->celular;
    }

    function getEmail() {
        return $this->email;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getClave() {
        return $this->clave;
    }

    function getTipo_usuario() {
        return $this->tipo_usuario;
    }

    function getRol_organizador() {
        return $this->rol_organizador;
    }


    function setNombre() {
        $this->nombre=$nombre;
    }

    function setApellido() {
        $this->apellido=$apellido;
    }

    function setDni() {
        $this->dni=$dni;
    }

    function setCelular() {
        $this->celular=$celular;
    }

    function setEmail() {
        $this->email=$email;
    }

    function setCodigo() {
        $this->codigo=$codigo;
    }

    function setClave() {
        $this->clave=$clave;
    }

    function setTipo_usuario() {
        $this->tipo_usuario=$tipo_usuario;
    }

    function setRol_organizador() {
        $this->rol_organizador=$rol_organizador;
    }

}


?>