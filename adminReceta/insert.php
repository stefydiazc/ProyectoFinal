<html>
<head>
</head>

<body>
<div id="main">
<?php
$nombre=$_POST["nombre"];
$descripcion=$_POST["descripcion"];
$informacionnutricional=$_POST["informacionnutricional"];
$foto=$_POST["foto"];

//$valor="manuel";
echo 'Hola ' . htmlspecialchars($nombre) ." ".  htmlspecialchars($apellido) . '!';

include_once("RecetaCollector.php");

$RecetaCollectorObj = new RecetaCollector();
$RecetaCollectorObj->createReceta($nombre, $descripcion, $informacionnutricional, $foto);
echo "</br>";
echo "valor agregado </br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
