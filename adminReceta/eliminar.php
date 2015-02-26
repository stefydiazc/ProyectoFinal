<html>
<head>
</head>

<body>
<div id="main">
<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["idReceta"];

//incluir la libreria de DemoCollector
include_once("RecetaCollector.php");
//creo una instancia de DemoCollector
$RecetaCollectorObj = new RecetaCollector();
//Ejecuto el metodo para eliminar el objeto Demo indicando el id
$RecetaCollectorObj->deleteReceta($id);

// muestro mensaje de que se ha eliminado el objeto Demo
echo "La receta con el id". htmlspecialchars($id) ."  ha sido eliminada correctamente.";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
