<html>
<?php include '..//headAdm.php';?> 

<body>
	<?php include '..//menuAdm.php';?> 
<div id="main">
<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$idReceta=$_GET["idReceta"];

//incluir la libreria de DemoCollector
include_once("RecetaCollector.php");
//creo una instancia de DemoCollector
$RecetaCollectorObj = new RecetaCollector();
//Ejecuto el metodo para eliminar el objeto Demo indicando el id
$RecetaCollectorObj->deleteReceta($idReceta);

// muestro mensaje de que se ha eliminado el objeto Demo
echo "La receta con el id". htmlspecialchars($idReceta) ."  ha sido eliminado correctamente.";
?>
<div><a href="receta-admin.php">Volver al Inicio</a></div>
</div>
</body>
</html>
