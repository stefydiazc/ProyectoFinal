<?php

include_once('Registrate.php');
include_once('../config/Collector.php');

class RegistrateCollector extends Collector
{
  
  function createRegistrate($email, $contrasena) { 
  // echo "$email.$contrasena";
   $sql= "INSERT INTO clubNutricion.usuario (idUsuario, email, contrasena) VALUES". 
                                  "(null, '$email', '$contrasena')";   
    //echo $sql;
    $insertrow = self::$db->insertRow($sql);
    
  }  

	function buscarid($email) {
    $row = self::$db->getRows("SELECT * FROM usuario where email= ? ", array("{$email}")); 
    $ObjUsuario = new Usuario($row[0]{'idusuario'});
    return $ObjUsuario;
  }

}
?>
