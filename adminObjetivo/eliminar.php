<html>
	<?php include 'headObjetivo.php';?>
<body>
	<?php include 'menuObjetivo.php';?>
<div id="main">
<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$idObjetivo=$_GET["idObjetivo"];

//incluir la libreria de DemoCollector
include_once("ObjetivoCollector.php");
//creo una instancia de DemoCollector
$ObjetivoCollectorObj = new ObjetivoCollector();
//Ejecuto el metodo para eliminar el objeto Demo indicando el id
$ObjetivoCollectorObj->deleteObjetivo($idObjetivo);

// muestro mensaje de que se ha eliminado el objeto Demo
echo "El Objetivo con el id ". htmlspecialchars($idObjetivo) ."  ha sido eliminado correctamente.";
?>
<div><a href="objetivo-admin.php">Volver al Inicio</a></div>
</div>
</body>
</html>
