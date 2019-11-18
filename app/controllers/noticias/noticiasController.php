<?php
/* 
    
    AUTOR DE PROGRAMACIÓN PHP: 
    JHON ALVARADO ACHATA
    
*/

require ROOT.FOLDER_PATH."/app/models/noticias/noticiasModel.php";class noticias extends Controller{public function index($link=''){$namelink=str_replace('+',' ',basename(parse_url(URI,PHP_URL_PATH)));$this->model=new noticiasModel();if(is_numeric($link)){if($link=='19102'){$this->view('postmaster/postmaster');}elseif($link=='19103'){$this->view('postmaster/postmaster');}else{$namep='Noticias';$this->param1=$this->model->mostrar_noticiasPrioridad();$this->param2=$this->model->mostrar_noticias();$this->view('noticias/noticias',['namep'=>$namep,'NPrioridad'=>$this->param1,'GNoticias'=>$this->param2]);}}else{if($link==''){$namep='Noticias';$this->param1=$this->model->mostrar_noticiasPrioridad();$this->param2=$this->model->mostrar_noticias();$this->view('noticias/noticias',['namep'=>$namep,'NPrioridad'=>$this->param1,'GNoticias'=>$this->param2]);}else{@$tag=$_GET['tag'];if($tag==1){$this->param1=$this->model->mostrar_noticiasPrioridad();$this->param2=$this->model->mostrar_noticiasTag($namelink);$namep=$namelink;$this->view('noticias/noticias',['namep'=>$namep,'NPrioridad'=>$this->param1,'GNoticias'=>$this->param2]);}else{$namep='Noticias';$this->param1=$this->model->mostrar_noticiasPrioridad();$this->param2=$this->model->mostrar_noticias();$this->view('noticias/noticias',['namep'=>$namep,'NPrioridad'=>$this->param1,'GNoticias'=>$this->param2]);}}}}}