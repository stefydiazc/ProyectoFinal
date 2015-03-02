<?php

include_once('Enfermedad.php');
include_once('../config/Collector.php');

class EnfermedadCollector extends Collector
{
  
  function showEnfermedad($idEnfermedad) {
    $row = self::$db->getRows("SELECT * FROM enfermedad where idenfermedad= ? ", array("{$idEnfermedad}")); 
    $ObjEnfermedad = new Enfermedad($row[0]{'idenfermedad'},$row[0]{'nombre'});
    return $ObjEnfermedad;
  }

  function createEnfermedad($nombre) { 
   //echo "$nombre";
   $sql= "INSERT INTO clubNutricion.enfermedad (idEnfermedad, nombre) VALUES". 
                                  "(null, '$nombre')";   
    //echo $sql;
    $insertrow = self::$db->insertRow($sql);
    
  }  
   

  function readEnfermedades() {
    $rows = self::$db->getRows("SELECT * FROM enfermedad ");        
    $arrayEnfermedad= array();        
    foreach ($rows as $c){
      //print_r($c);
      $aux = new Enfermedad($c{'idenfermedad'},$c{'nombre'});
      array_push($arrayEnfermedad, $aux);
    }
      //print_r($arrayUsuario);
    
    return $arrayEnfermedad;        
  }
  
  function updateEnfermedad($idEnfermedad, $nombre) {

   // echo "$idServicio. $nombre. $descripcion;
    $insertrow = self::$db->updateRow("UPDATE clubNutricion.enfermedad SET enfermedad.nombre = ? 
                                      WHERE enfermedad.idenfermedad = ? ", array("{$nombre}",$idEnfermedad));
  }  

  function deleteEnfermedad($idEnfermedad) {    
    $deleterow = self::$db->deleteRow("DELETE FROM clubNutricion.enfermedad WHERE idenfermedad= ?", array("{$idEnfermedad}"));
  }  
}
?>

