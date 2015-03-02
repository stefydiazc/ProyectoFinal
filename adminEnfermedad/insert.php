<html>
<?php include 'headEnfermedad.php';?>

<body>
<?php include 'menuEnfermedad.php';?>
<div id="main">
<?php
$nombre = $_POST ['nombre'];


//echo $peso."</br>";
//echo $objetivo."</br>";
//$valor="manuel";
echo "<h3>Enfermedad Agregada. </h3>";
//echo 'Objetivo :  ' . htmlspecialchars($nombre)." .";


include_once("EnfermedadCollector.php");

$EnfermedadCollectorObj = new EnfermedadCollector();
$EnfermedadCollectorObj->createEnfermedad($nombre);
//echo "</br>";
//echo "</br>";
?>
<div><a href="enfermedad-admin.php">Volver al Inicio</a></div>
</div>
</body>
</html>
