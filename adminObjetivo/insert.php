<html>
<head>
</head>

<body>
<div id="main">
<?php
$nombre = $_POST ['nombre'];
$descripcion = $_POST ['descripcion'];

//echo $peso."</br>";
//echo $objetivo."</br>";
//$valor="manuel";
echo "<h3>Servicio Agregado </h3>";
echo 'Servicio :  ' . htmlspecialchars($nombre)." .";


include_once("ServicioCollector.php");

$ServicioCollectorObj = new ServicioCollector();
$ServicioCollectorObj->createServicio($nombre, $descripcion);
echo "</br>";
echo "</br>";
?>
<div><a href="servicio-admin.php">Volver al Inicio</a></div>
</div>
</body>
</html>
