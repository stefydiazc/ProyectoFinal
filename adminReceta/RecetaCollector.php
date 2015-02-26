<?php

include_once('Receta.php');
include_once('Collector.php');

class RecetaCollector extends Collector
{
  
  function showReceta($id) {
    $row = self::$db->getRows("SELECT * FROM recetas where idrecetas= ? ", array("{$id}")); 
    $ObjReceta = new Receta($row[0]{'idrecetas'},$row[0]{'idplato'});
    return $ObjReceta;
  }

  function createReceta($idrecetas, $idplato, $nombre, $descripcion) {    
    $insertrow = self::$db->insertRow("INSERT INTO clubNutricion.recetas 
                                      (idrecetas, idplato, nombre, descripcion) VALUES (?, ?, ?, ?)",
                                       array(null, "{$nombre}","{$descripcion}"));
  }  

  function readRecetas() {
    $rows = self::$db->getRows("SELECT * FROM recetas ");        
    $arrayReceta= array();        
    foreach ($rows as $r){
      $aux = new Receta($r{'idrecetas'},$r{'idplato'},$r{'nombre'},$r{'descripcion'});
      array_push($arrayReceta, $aux);
    } 
  //  print_r($arrayReceta);

    return $arrayReceta;        
  }
  
  function updateReceta($idReceta,$idPlato,$nombre,$descripcion) {    
    echo "$idrecetas. $idplato, $nombre, $descripcion";
    $insertrow = self::$db->updateRow("UPDATE clubNutricion.recetas SET recetas.nombre = ?  WHERE recetas.descripcion = ? ", array( "{$nombre}", "{$descripcion}",$idReceta));
  }  

  function deleteReceta($idReceta) {    
    $deleterow = self::$db->deleteRow("DELETE FROM clubNutricion.recetas WHERE idrecetas= ?", array("{$idReceta}"));
  }  
}
?>

