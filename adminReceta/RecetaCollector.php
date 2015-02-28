<?php

include_once('Receta.php');
include_once('../config/Collector.php');

class RecetaCollector extends Collector
{
  
  function showReceta($idReceta) {
    $row = self::$db->getRows("SELECT * FROM receta where idreceta= ? ", array("{$idReceta}")); 
    $ObjReceta = new Receta($row[0]{'idreceta'},$row[0]{'nombre'},$row[0]{'descripcion'},
                  $row[0]{'informacionnutricional'}, $row[0]{'foto'});
    return $ObjReceta;
  }

  function createReceta($nombre, $descripcion, $informacionnutricional, $foto) {    
    $insertrow = self::$db->insertRow("INSERT INTO clubNutricion.receta (idreceta, nombre, descripcion, informacionnutricional, foto)
                                      VALUES (?, ?, ?, ?, ?)", array(null, "{$nombre}", "{$descripcion}", "{$informacionnutricional}", "{$foto}"));
  }  

  function readRecetas() {
    $rows = self::$db->getRows("SELECT * FROM receta ");        
    $arrayReceta= array();        
    foreach ($rows as $c){
      //print_r($c);
      $aux = new Receta($c{'idreceta'},$c{'nombre'}, $c{'descripcion'}, $c{'informacionnutricional'}, $c{'foto'});
      array_push($arrayReceta, $aux);
    }
      //print_r($arrayUsuario);
    
    return $arrayReceta;        
  }
  
  function updateReceta($idReceta, $nombre, $descripcion, $informacionnutricional, $foto) {

    echo "$idReceta. $nombre. $descripcion. $informacionnutricional. $foto";
    $insertrow = self::$db->updateRow("UPDATE clubNutricion.receta SET receta.nombre = ?, receta.descripcion = ?, receta.informacionnutricional = ?, 
                      receta.foto = ? WHERE receta.idreceta = ? ", array("{$nombre}", "{$descripcion}",
                      "{$informacionnutricional}", "{$foto}",$idReceta));
  }  

  function deleteReceta($idReceta) {    
    $deleterow = self::$db->deleteRow("DELETE FROM clubNutricion.receta WHERE idreceta= ?", array("{$idReceta}"));
  }  




}
?>

