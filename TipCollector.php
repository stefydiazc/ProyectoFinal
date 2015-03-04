<?php

include_once('Tip.php');
include_once('config/Collector.php');

class TipCollector extends Collector
{
   
  function readTips() {
    $rows = self::$db->getRows("SELECT * FROM tip ");        
    $arrayTip= array();        
    foreach ($rows as $c){
      //print_r($c);
      $aux = new Tip ($c{'idtip'},$c{'nombre'}, $c{'descripcion'});
      array_push($arrayTip, $aux);
    }
      //print_r($arrayUsuario);
    
    return $arrayTip;        
  }


  function createTip($nombre, $descripcion) { 
   //echo "$nombre";
   $sql= "INSERT INTO clubNutricion.tip (idTip, nombre, descripcion) VALUES". 
                                  "(null, '$nombre', 'descripcion')";   
    //echo $sql;
    $insertrow = self::$db->insertRow($sql);
    
  }  
   


   function deleteTip($idTip) {    
    $deleterow = self::$db->deleteRow("DELETE FROM clubNutricion.tip WHERE idtip= ?", array("{$idTip}"));
  } 

}
?>