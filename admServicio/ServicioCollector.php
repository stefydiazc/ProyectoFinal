<?php

include_once('Servicio.php');
include_once('Collector.php');

class ServicioCollector extends Collector
{
  
  function showServicio($idServicio) {
    $row = self::$db->getRows("SELECT * FROM servicio where idServicio= ? ", array("{$idServicio}")); 
    $ObjServicio = new Usuario($row[0]{'idServicio'},$row[0]{'nombre'},$row[0]{'descripcion'});
    return $ObjServicio;
  }

  function createServicio($nombre, $descripcion) {    
    $insertrow = self::$db->insertRow("INSERT INTO clubNutricion.servicio (idServicio, nombre, descripcion)
                                      VALUES (?, ?, ?, ?)", array(null, "{$nombre}", "{$descripcion}"));
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
    
    return $arrayUsuario;        
  }
  
  function updateServicio($idServicio, $nombre, $apellido) {

   // echo "$idServicio. $nombre. $descripcion;
    $insertrow = self::$db->updateRow("UPDATE clubNutricion.servicio SET servicio.nombre = ?, servicio.descripcion = ? 
                                      WHERE servicio.idservicio = ? ", array("{$nombre}", "{$descripcion}",$idServicio));
  }  

  function deleteServicio($idServicio) {    
    $deleterow = self::$db->deleteRow("DELETE FROM clubNutricion.servicio WHERE idservicio= ?", array("{$idServicio}"));
  }  




}
?>

