<?php
/* 
    
    AUTOR DE PROGRAMACIÓN PHP: 
    JHON ALVARADO ACHATA
	
*/


class articulo {
    
    private $numart;
    private $title;
    private $stitle;
    private $desc;
    private $image;
    private $date;
    private $d;  // duration o vencimiento
    private $devent;
    private $fechaFija;
    private $url;
    private $priority;
    
    
    function __construct($numart, $title, $stitle, $desc, $image, $date, $d, $devent, $fechaFija, $url, $priority) {
        $this->numart = $numart;
        $this->title = $title;
        $this->stitle = $stitle;
        $this->desc = $desc;
        $this->image = $image;
        $this->date = $date;
        $this->d = $d;
        $this->devent = $devent;
        $this->fechaFija = $fechaFija;
        $this->url = $url;
        $this->priority = $priority;
    }

    
    function getNumart() {
        return $this->numart;
    }

    function getTitle() {
        return $this->title;
    }

    function getStitle() {
        return $this->stitle;
    }

    function getDesc() {
        return $this->desc;
    }

    function getImage() {
        return $this->image;
    }

    function getDate() {
        return $this->date;
    }

    function getD() {
        return $this->d;
    }

    function getDevent() {
        return $this->devent;
    }

    function getFechaFija() {
        return $this->fechaFija;
    }

    function getUrl() {
        return $this->url;
    }

    function getPriority() {
        return $this->priority;
    }

    function setNumart($numart) {
        $this->numart = $numart;
    }

    function setTitle($title) {
        $this->title = $title;
    }

    function setStitle($stitle) {
        $this->stitle = $stitle;
    }

    function setDesc($desc) {
        $this->desc = $desc;
    }

    function setImage($image) {
        $this->image = $image;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setD($d) {
        $this->d = $d;
    }

    function setDevent($devent) {
        $this->devent = $devent;
    }

    function setFechaFija($fechaFija) {
        $this->fechaFija = $fechaFija;
    }

    function setUrl($url) {
        $this->url = $url;
    }

    function setPriority($priority) {
        $this->priority = $priority;
    }


}


?>