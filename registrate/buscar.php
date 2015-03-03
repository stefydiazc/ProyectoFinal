<?php
$email=$_GET["email"];
//echo "xxxxxxx".$idUsuario;
//$id=11;
include_once("RegistrateCollector.php");
include_once("Registrate.php");
$RegistrateCollectorObj = new RegistrateCollector();
$ObjUsuario = $RegistrateCollectorObj->showUsuario($email);

$id = $ObjUsuario->getId();

echo "<META HTTP-EQUIV='refresh' content='0; url=../objetivos.php?id=$id'>";

//print_r($ObjUsuario);
?>