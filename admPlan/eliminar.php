<html>
<head>
</head>

<body>
<div id="main">
<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$idPlan=$_GET["idPlan"];

//incluir la libreria de DemoCollector
include_once("PlanCollector.php");
//creo una instancia de DemoCollector
$PlanCollectorObj = new PlanCollector();
//Ejecuto el metodo para eliminar el objeto Demo indicando el id
$PlanCollectorObj->deletePlan($idPlan);

// muestro mensaje de que se ha eliminado el objeto Demo
echo "El Plan con el id ". htmlspecialchars($idPlan) ."  ha sido eliminado correctamente.";
?>
<div><a href="plan-admin.php">Volver al Inicio</a></div>
</div>
</body>
</html>
