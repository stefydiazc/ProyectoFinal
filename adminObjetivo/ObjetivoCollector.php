<?php

include_once('Objetivo.php');
include_once('../config/Collector.php');

class ObjetivoCollector extends Collector
{
  
  function showObjetivo($idObjetivo) {
    $row = self::$db->getRows("SELECT * FROM objetivo where idobjetivo= ? ", array("{$idObjetivo}")); 
    $ObjObjetivo = new Objetivo($row[0]{'idobjetivo'},$row[0]{'nombre'});
    return $ObjObjetivo;
  }

  function createObjetivo($nombre) { 
   //echo "$nombre";
   $sql= "INSERT INTO clubNutricion.objetivo (idObjetivo, nombre) VALUES". 
                                  "(null, '$nombre')";   
    //echo $sql;
    $insertrow = self::$db->insertRow($sql);
    
  }  
   

  function readObjetivos() {
    $rows = self::$db->getRows("SELECT * FROM objetivo ");        
    $arrayObjetivo= array();        
    foreach ($rows as $c){
      //print_r($c);
      $aux = new Objetivo($c{'idobjetivo'},$c{'nombre'});
      array_push($arrayObjetivo, $aux);
    }
      //print_r($arrayUsuario);
    
    return $arrayObjetivo;        
  }
  
  function updateObjetivo($idObjetivo, $nombre) {

   // echo "$idServicio. $nombre. $descripcion;
    $insertrow = self::$db->updateRow("UPDATE clubNutricion.objetivo SET objetivo.nombre = ? 
                                      WHERE objetivo.idobjetivo = ? ", array("{$nombre}",$idObjetivo));
  }  

  function deleteObjetivo($idObjetivo) {    
    $deleterow = self::$db->deleteRow("DELETE FROM clubNutricion.objetivo WHERE idobjetivo= ?", array("{$idObjetivo}"));
  }  
}
?>

