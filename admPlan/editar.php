<html>

<?php include 'headPlan.php';?>
<body>

<?php include 'menuPlan.php';?>
<div id="main">
<?php

//print_r($_POST);

$idPlan=$_POST["idPlan"];
$nombre = $_POST ['nombre'];
$descripcion = $_POST ['descripcion'];
$idServicio=$_POST["idServicio"];
$precio=$_POST["precio"];

echo "Edici&oacute;n en proceso ....  </br>";

include_once("PlanCollector.php");
$PlanCollectorObj = new PlanCollector();
$PlanCollectorObj->updatePlan($idPlan, $nombre, $descripcion, $idServicio, $precio);

echo "id :".$idPlan." actualizado a:".$nombre." </br>";
?>
<div><a href="plan-admin.php">Volver al Inicio</a></div>
</div>
</body>
</html>
