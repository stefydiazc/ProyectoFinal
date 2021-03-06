<?php

include_once('Plan.php');
include_once('../config/Collector.php');

class PlanCollector extends Collector
{
  
  function showPlan($idPlan) {
    $row = self::$db->getRows("SELECT * FROM plan where idplan= ? ", array("{$idPlan}")); 
    $ObjPlan = new Plan($row[0]{'idPlan'},$row[0]{'nombre'},$row[0]{'descripcion'},$row[0]{'idServicio'},$row[0]{'precio'});
    return $ObjPlan;
  }

   function createPlan($nombre, $descripcion, $idServicio, $precio) { 
   echo "$nombre.$descripcion.$idServicio.$precio";
   $sql= "INSERT INTO clubNutricion.plan (idPlan, nombre, descripcion, idServicio, precio) VALUES". 
                                  "(null, '$nombre', '$descripcion', $idServicio, $precio)";   
    echo $sql;
    $insertrow = self::$db->insertRow($sql);
    echo $insertrow;
  }  


  function readPlanes() {
    $rows = self::$db->getRows("SELECT * FROM plan ");        
    $arrayPlan= array();        
    foreach ($rows as $c){
      //print_r($c);
      $aux = new Plan($c{'idPlan'},$c{'nombre'}, $c{'descripcion'}, $c{'idServicio'}, $c{'precio'});
      array_push($arrayPlan, $aux);
    }
      //print_r($arrayUsuario);
    
    return $arrayPlan;        
  }
  
  function updatePlan($idPlan, $nombre, $descripcion, $idServicio, $precio) {

   // echo "$idServicio. $nombre. $descripcion;
    $insertrow = self::$db->updateRow("UPDATE clubNutricion.plan SET plan.nombre = ?, plan.descripcion = ?, plan.idServicio = ?, plan.precio = ?
                                      WHERE plan.idPlan = ? ", array("{$nombre}", "{$descripcion}", "{$idServicio}", "{$precio}", $idPlan));
  }  

  function deletePlan($idPlan) {    
    $deleterow = self::$db->deleteRow("DELETE FROM clubNutricion.plan WHERE idPlan= ?", array("{$idPlan}"));
  }  




}
?>

