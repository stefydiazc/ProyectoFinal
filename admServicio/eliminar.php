<html>
<head>
</head>

<body>
<div id="main">
<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$idServicio=$_GET["idServicio"];

//incluir la libreria de DemoCollector
include_once("ServicioCollector.php");
//creo una instancia de DemoCollector
$ServicioCollectorObj = new ServicioCollector();
//Ejecuto el metodo para eliminar el objeto Demo indicando el id
$ServicioCollectorObj->deleteServicio($idServicio);

// muestro mensaje de que se ha eliminado el objeto Demo
echo "El Servicio con el id ". htmlspecialchars($idServicio) ."  ha sido eliminado correctamente.";
?>
<div><a href="servicio-admin.php">Volver al Inicio</a></div>
</div>
</body>
</html>
