<?php

include_once('Registrate.php');
include_once('../config/Collector.php');

class RegistrateCollector extends Collector
{
  
function updateUsuario($idUsuario, $objetivo) {

    echo "$idUsuario. $objetivo";
    $insertrow = self::$db->updateRow("UPDATE clubNutricion.usuario SET usuario.objetivo = ? WHERE usuario.idusuario = ? ", array("{$objetivo}",$idUsuario));
  }

}
?>

