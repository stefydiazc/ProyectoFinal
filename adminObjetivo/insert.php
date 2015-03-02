<html>
<?php include 'headObjetivo.php';?>

<body>
<?php include 'menuObjetivo.php';?>
<div id="main">
<?php
$nombre = $_POST ['nombre'];


//echo $peso."</br>";
//echo $objetivo."</br>";
//$valor="manuel";
echo "<h3>Objetivo Agregado </h3>";
//echo 'Objetivo :  ' . htmlspecialchars($nombre)." .";


include_once("ObjetivoCollector.php");

$ObjetivoCollectorObj = new ObjetivoCollector();
$ObjetivoCollectorObj->createObjetivo($nombre);
//echo "</br>";
//echo "</br>";
?>
<div><a href="objetivo-admin.php">Volver al Inicio</a></div>
</div>
</body>
</html>
