<?php

include_once('Servicio.php');
include_once('../config/Collector.php');

class ServicioCollector extends Collector
{
  
  function showServicio($idServicio) {
    $row = self::$db->getRows("SELECT * FROM servicio where idservicio= ? ", array("{$idServicio}")); 
    $ObjServicio = new Servicio($row[0]{'idServicio'},$row[0]{'nombre'},$row[0]{'descripcion'});
    return $ObjServicio;
  }

  function createServicio($nombre, $descripcion) { 
   echo "$nombre.$descripcion";
   $sql= "INSERT INTO clubNutricion.servicio (idServicio, nombre, descripcion) VALUES". 
                                  "(null, '$nombre', '$descripcion')";   
    echo $sql;
    $insertrow = self::$db->insertRow($sql);
    
  }  
   

  function readServicios() {
    $rows = self::$db->getRows("SELECT * FROM servicio ");        
    $arrayServicio= array();        
    foreach ($rows as $c){
      //print_r($c);
      $aux = new Servicio($c{'idServicio'},$c{'nombre'}, $c{'descripcion'});
      array_push($arrayServicio, $aux);
    }
      //print_r($arrayUsuario);
    
    return $arrayServicio;        
  }
  
  function updateServicio($idServicio, $nombre, $descripcion) {

   // echo "$idServicio. $nombre. $descripcion;
    $insertrow = self::$db->updateRow("UPDATE clubNutricion.servicio SET servicio.nombre = ?, servicio.descripcion = ? 
                                      WHERE servicio.idservicio = ? ", array("{$nombre}", "{$descripcion}",$idServicio));
  }  

  function deleteServicio($idServicio) {    
    $deleterow = self::$db->deleteRow("DELETE FROM clubNutricion.servicio WHERE idservicio= ?", array("{$idServicio}"));
  }  




}
?>

