<?php
/* 
    
    AUTOR DE PROGRAMACIÓN PHP: 
    JOSUE ALDAIR MAMANI CARIAPAZA
	
*/

class impresion extends Controller{public function index($pagIns='',$nomIns=''){$this->view('impresion/impresion',["pagIns"=>$pagIns,"nomIns"=>$nomIns]);}} ?>