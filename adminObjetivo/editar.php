<html>
<?php include 'headObjetivo.php';?>

<body>
<?php include 'menuObjetivo.php';?>	
<div id="main">
<?php

//print_r($_POST);

$idObjetivo=$_POST["idObjetivo"];
$nombre = $_POST ['nombre'];


echo "Edici&oacute;n en proceso ....  </br>";

include_once("ObjetivoCollector.php");
$ObjetivoCollectorObj = new ObjetivoCollector();
$ObjetivoCollectorObj->updateObjetivo($idObjetivo,$nombre);

echo "id :".$idObjetivo." actualizado a:".$nombre." </br>";
?>
<div><a href="objetivo-admin.php">Volver al Inicio</a></div>
</div>
</body>
</html>
