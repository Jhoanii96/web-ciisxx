<?php
/* 
    
    AUTOR DE PROGRAMACIÓN PHP: 
    JHON ALVARADO ACHATA
    
*/

class noticiasModel extends Model{public function __construct(){parent::__construct();}public function mostrar_noticiasPrioridad(){$query="select a.numero, a.stitulo, a.efecha, a.nfecha from v_articulo a\n        where a.prioridad = 1\n        order by a.efecha asc;";$res=$this->db->query($query);return $res;}public function mostrar_noticias(){$query="select a.numero, a.titulo, a.efecha, a.imagen, a.enlace, a.nfecha from v_articulo a\n        order by a.numero desc;";$res=$this->db->query($query);return $res;}public function mostrar_tarticulotag($numero_articulo){$query="select t.nombre_tag as tagname from tag_articulo t\n        inner join articulo a\n        on a.id_articulo = t.id_articulo\n        where a.num_articulo = '".$numero_articulo."';";$res=$this->db->query($query);return $res;}public function mostrar_noticiasTag($nombreTag){$query="select a.numero, a.titulo, a.efecha, a.imagen, a.enlace, a.nfecha, a.nomtag from v_articulo_tag a\n        where a.nomtag = '".$nombreTag."'\n        order by a.numero desc;";$res=$this->db->query($query);return $res;}} ?>