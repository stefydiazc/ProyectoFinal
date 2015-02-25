<?php

include_once('Receta.php');
include_once('Collector.php');

class RecetaCollector extends Collector
{
  
/*  function showReceta($id) {
    $row = self::$db->getRows("SELECT * FROM recetas where idrecetas= ? ", array("{$id}")); 
    $ObjReceta = new Receta($row[0]{'idrecetas'},$row[0]{'idplato'},$row[0]{'nombre'}),$row[0]{'descripcion'};
    return $ObjReceta;
  }
*/
  function createReceta($idReceta, $idPlato, $nombre, $descripcion) {    
    $insertrow = self::$db->insertRow("INSERT INTO clubNutricion.recetas 
                                      (idrecetas, idplato, nombre, descripcion) VALUES (?, ?, ?, ?)",
                                       array(null, "{$idrecetas}","{$idplato}","{$nombre}","{$descripcion}"));
  }  

  function readRecetas() {
    $rows = self::$db->getRows("SELECT * FROM recetas ");        
    $arrayReceta= array();        
    foreach ($rows as $r){
      $aux = new Receta($r{'idrecetas'},$r{'idplato'},$r{'nombre'}$r{'descripcion'});
      array_push($arrayReceta, $aux);
  
    return $arrayReceta;        
  }
/*  
  function updateReceta($idReceta,$descripcion,$nombre,$descripcion) {    
    $insertrow = self::$db->updateRow("UPDATE clubNutricion.recetas SET recetas.nombre = ?  WHERE recetas.idusuario = ? ", array( "{$nombre}",$id));
  }  

  function deleteReceta($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM clubNutricion.recetas WHERE idrecetas= ?", array("{$id}"));
  }  
*/


}
?>

