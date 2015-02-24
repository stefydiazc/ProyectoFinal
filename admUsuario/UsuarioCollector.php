<?php

include_once('Usuario.php');
include_once('Collector.php');

class UsuarioCollector extends Collector
{
  
  function showUsuario($id) {
    $row = self::$db->getRows("SELECT * FROM usuario where idusuario= ? ", array("{$id}")); 
    $ObjUsuario = new Usuario($row[0]{'idusuario'},$row[0]{'nombre'},$row[0]{'apellido'},
                  $row[0]{'email'}, $row[0]{'contrasena'}, $row[0]{'genero'}, $row[0]{'actfisica'},
                  $row[0]{'edad'}, $row[0]{'estatura'}, $row[0]{'peso'}, $row[0]{'objetivo'});
    return $ObjUsuario;
  }

  function createUsuario($nombre, $apellido, $email, $contrasena, $genero, $actfisica, $edad, $estatura, $peso, $objetivo) {    
    $insertrow = self::$db->insertRow("INSERT INTO clubNutricion.usuario (
                                      idusuario, nombre, apellido, email, contrasena, genero, actfisica, edad, estatura, peso, objetivo)
                                      VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", array(null, "{$nombre}", "{$apellido}",
                                      "{$email}", "{$contrasena}", "{$genero}", "{$actfisica}", "{$edad}", "{$estatura}", "{$peso}", "{$objetivo}"));
  }  

  function readUsuarios() {
    $rows = self::$db->getRows("SELECT * FROM usuario ");        
    $arrayUsuario= array();        
    foreach ($rows as $c){
      $aux = new Usuario($c{'idusuario'},$c{'nombre'}, $c{'apellido'}, $c{'email'}, $c{'contrasena'}, $c{'genero'}, $c{'actfisica'}, $c{'edad'}, $c{'estatura'}, $c{'peso'}, $c{'objetivo'});
      array_push($arrayUsuario, $aux);
    }
    return $arrayUsuario;        
  }
  
  function updateUsuario($id,$nombre) {    
    $insertrow = self::$db->updateRow("UPDATE Prueba.usuario SET usuario.nombre = ?  WHERE usuario.idusuario = ? ", array( "{$nombre}",$id));
  }  

  function deleteUsuario($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM Prueba.usuario WHERE idusuario= ?", array("{$id}"));
  }  




}
?>

