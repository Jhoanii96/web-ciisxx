<?php  
/* 
    
     AUTOR DE PROGRAMACIÓN PHP: 
     JHON ALVARADO ACHATA
	
*/

require __DIR__ . "/folder_load.php";

$dataTalks = new dataAdmin();

if(isset($_POST["activity"]))  
{  
     
     $var = $_POST["activity"];

     if($var == 1) {
          $nombre = 'Postmaster';
     } elseif ($var == 2) {
          $nombre = 'Congreso internacional';
     } elseif ($var == 3) {
          $nombre = '';
     }

     $datos_charlas = $dataTalks->mostrarTablaCharlas($nombre);
     
     while($rowCharlas=$datos_charlas->fetch_assoc()){
          echo '
          <tr>
          <td>'.$rowCharlas['idCha'].'</td>	
          <td title="'.$rowCharlas['titulo'].'">'.$rowCharlas['titulo'].'</td>
          <td>'.$rowCharlas['nombres'].'</td>
          <td>'.$rowCharlas['nombreTem'].'</td>
          <td>'.$rowCharlas['tipoAct'].'</td>
          <td>'.$rowCharlas['fechas'].'</td>
          <td>'.$rowCharlas['duracion'].'</td>
               <td class="button" align=\'center\'>
                    <a href="/2019/admin/talks/edit/' . $rowCharlas['idCha'] . '">
                         <input class="button-style" type=button value="Editar">
                    </a>
               </td>
               <td class="button" align=\'center\'>
                    <form><input class="button-style" type=submit value="Borrar"></form>
               </td>
          </tr>
          ';
     }
}  


?>  