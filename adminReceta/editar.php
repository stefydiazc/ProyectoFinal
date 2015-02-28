<html>
<head>
</head>

<body>
<div id="main">
<?php

print_r($_POST);

$idReceta = $_POST ["idReceta"];
$nombre = $_POST ['nombre'];
$descripcion = $_POST ['descripcion'];
$informacionnutricional = $_POST ['informacionnutricional'];
$foto = $_POST ['foto'];

echo "Edici&oacute;n en proceso ....  </br>";

include_once("RecetaCollector.php");
$RecetaCollectorObj = new RecetaCollector();
$RecetaCollectorObj->updateReceta($idReceta, $nombre, $descripcion, $informacionnutricional, $foto);

echo "id :".$idReceta." actualizado a:".$nombre." </br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
