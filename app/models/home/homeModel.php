<?php
/* 
    
    AUTOR DE PROGRAMACIÓN PHP: 
    JHON ALVARADO ACHATA
	
*/

class homeModel extends Model{public function __construct(){parent::__construct();}public function mostrar_noticiasRecientes(){$query="select a.numero, a.titulo, a.imagen, a.enlace from v_articulo a\n        where a.ffecha >= now()\n        order by a.ifecha desc;";$res=$this->db->query($query);return $res;}public function mostrar_noticiasAntiguas(){$query="select * from v_articulo a\n        where a.ffecha < now()\n        order by a.numero desc;";$res=$this->db->query($query);return $res;}public function mostrar_tarticulotag($numero_articulo){$query="select t.nombre_tag as tagname from tag_articulo t\n        inner join articulo a\n        on a.id_articulo = t.id_articulo\n        where a.num_articulo = '".$numero_articulo."';";$res=$this->db->query($query);return $res;}}