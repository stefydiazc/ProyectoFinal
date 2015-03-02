<html>
<?php include 'headEnfermedad.php';?>

<body>
<?php include 'menuEnfermedad.php';?>	
<div id="main">
<?php

//print_r($_POST);

$idEnfermedad=$_POST["idEnfermedad"];
$nombre = $_POST ['nombre'];


echo "Edici&oacute;n en proceso ....  </br>";

include_once("EnfermedadCollector.php");
$EnfermedadCollectorObj = new EnfermedadCollector();
$EnfermedadCollectorObj->updateEnfermedad($idEnfermedad,$nombre);

echo "id :".$idEnfermedad." actualizado a:".$nombre." </br>";
?>
<div><a href="enfermedad-admin.php">Volver al Inicio</a></div>
</div>
</body>
</html>
