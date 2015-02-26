<html>
<head>
</head>

<body>
<div id="main">
<?php

//print_r($_POST);

$idServicio=$_POST["idServicio"];
$nombre = $_POST ['nombre'];
$descripcion = $_POST ['descripcion'];

echo "Edici&oacute;n en proceso ....  </br>";

include_once("ServicioCollector.php");
$ServicioCollectorObj = new ServicioCollector();
$ServicioCollectorObj->updateServicio($idServicio,$nombre, $descripcion);

echo "id :".$idServicio." actualizado a:".$nombre." </br>";
?>
<div><a href="servicio-admin.php">Volver al Inicio</a></div>
</div>
</body>
</html>
