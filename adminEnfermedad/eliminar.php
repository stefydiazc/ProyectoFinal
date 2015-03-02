<html>
	<?php include 'headEnfermedad.php';?>
<body>
	<?php include 'menuEnfermedad.php';?>
<div id="main">
<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$idEnfermedad=$_GET["idEnfermedad"];

//incluir la libreria de DemoCollector
include_once("EnfermedadCollector.php");
//creo una instancia de DemoCollector
$EnfermedadCollectorObj = new EnfermedadCollector();
//Ejecuto el metodo para eliminar el objeto Demo indicando el id
$EnfermedadCollectorObj->deleteEnfermedad($idEnfermedad);

// muestro mensaje de que se ha eliminado el objeto Demo
echo "La enfermedad con el id ". htmlspecialchars($idEnfermedad) ."  ha sido eliminado correctamente.";
?>
<div><a href="enfermedad-admin.php">Volver al Inicio</a></div>
</div>
</body>
</html>
