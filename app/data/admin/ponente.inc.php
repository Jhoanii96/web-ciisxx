<?php
/* 
    
    AUTOR DE PROGRAMACIÓN PHP: 
    JHON ALVARADO ACHATA
	
*/


class ponente {
    
    
    private $nombre;
    private $apellido;
    private $dni;
    private $celular;
    private $email;
    
    private $pais;
    private $ciudad;
    private $foto;
    private $empresa;
    private $titulo;
    private $bandera;
    private $descripcion;
    private $link;
    
    function __construct($nombre, $apellido, $dni, $celular, $email, $pais, $ciudad, $foto, $empresa, $titulo, $bandera, $descripcion, $link) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->dni = $dni;
        $this->celular = $celular;
        $this->email = $email;
        $this->pais = $pais;
        $this->ciudad = $ciudad;
        $this->foto = $foto;
        $this->empresa = $empresa;
        $this->titulo = $titulo;
        $this->bandera = $bandera;
        $this->descripcion = $descripcion;
        $this->link = $link;
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

    function getPais() {
        return $this->pais;
    }

    function getCiudad() {
        return $this->ciudad;
    }

    function getFoto() {
        return $this->foto;
    }

    function getEmpresa() {
        return $this->empresa;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getBandera() {
        return $this->bandera;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getLink() {
        return $this->link;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    function setDni($dni) {
        $this->dni = $dni;
    }

    function setCelular($celular) {
        $this->celular = $celular;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPais($pais) {
        $this->pais = $pais;
    }

    function setCiudad($ciudad) {
        $this->ciudad = $ciudad;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }

    function setEmpresa($empresa) {
        $this->empresa = $empresa;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setBandera($bandera) {
        $this->bandera = $bandera;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setLink($link) {
        $this->link = $link;
    }


}



