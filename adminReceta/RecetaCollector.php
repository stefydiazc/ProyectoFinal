<?php

include_once('Receta.php');
include_once('Collector.php');

class RecetaCollector extends Collector
{
  
  function showReceta($id) {
    $row = self::$db->getRows("SELECT * FROM receta where idreceta= ? ", array("{$id}")); 
    $ObjReceta = new Receta($row[0]{'idreceta'},$row[0]{'nombre'}, $row[0]{'descripcion'}, $row[0]{'informacionnutricional'}, $row[0]{'foto'});
    return $ObjReceta;
  }

  function createReceta($idreceta, $nombre, $descripcion, $informacionnutricional, $foto) {    
    $insertrow = self::$db->insertRow("INSERT INTO clubNutricion.receta 
                                      (idreceta, nombre, descripcion, informacionnutricional, foto) VALUES (?, ?, ?, ?, ?)",
                                       array(null, "{$nombre}","{$descripcion}","{$informacionnutricional}","{foto}"));
  }  

  function readRecetas() {
    $rows = self::$db->getRows("SELECT * FROM receta ");        
    $arrayReceta= array();        
    foreach ($rows as $r){
      $aux = new Receta($r{'idreceta'},$r{'nombre'},$r{'descripcion'},$r{'informacionnutricional'},$r{'foto'});
      array_push($arrayReceta, $aux);
    } 
  //  print_r($arrayReceta);

    return $arrayReceta;        
  }
  
  function updateReceta($idReceta,$nombre,$descripcion,$informacionnutricional,$foto) {    
    $insertrow = self::$db->updateRow("UPDATE clubNutricion.receta SET receta.nombre = ?  WHERE receta.descripcion = ? ",
                                       array( "{$nombre}","{descripcion}",$idReceta));
  }  

  function deleteReceta($idReceta) {    
    $deleterow = self::$db->deleteRow("DELETE FROM clubNutricion.receta WHERE idreceta= ?", array("{$idReceta}"));
  }  
}
?>

