<html>
<?php include '..//headAdm.php';?> 


<body>
<?php include '..//menuAdm.php';?> 

<div id="main">
<?php
$nombre = $_POST ['nombre'];
$descripcion = $_POST ['descripcion'];
$informacionnutricional = $_POST ['email'];
$foto = $_POST ['foto'];

//echo $peso."</br>";
//echo $objetivo."</br>";
//$valor="manuel";
//echo 'Hola ' . htmlspecialchars($nombre)."  ". htmlspecialchars($apellido) . ' !';


include_once("RecetaCollector.php");

$RecetaCollectorObj = new RecetaCollector();
$RecetaCollectorObj->createReceta($nombre, $descripcion, $informacionnutricional, $foto);
echo "</br>";
echo "Receta Agregado </br>";
?>
<div><a href="receta-admin.php">Volver al Inicio</a></div>
</div>
</body>
</html>
