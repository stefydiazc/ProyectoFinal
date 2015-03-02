<html>
<?php include 'headPlan.php';?>


<body>
<?php include 'menuPlan.php';?>

<div id="main">
<?php
$nombre = $_POST ['nombre'];
$descripcion = $_POST ['descripcion'];
$idServicio = $_POST ['idServicio'];
$precio = $_POST ['precio'];

//echo $peso."</br>";
//echo $objetivo."</br>";
//$valor="manuel";
echo 'Hola ' . htmlspecialchars($nombre);


include_once("PlanCollector.php");

$PlanCollectorObj = new PlanCollector();
$PlanCollectorObj->createPlan($nombre, $descripcion, $idServicio, $precio);

echo "</br>";
echo "Plan Agregado </br>";
?>
<div><a href="plan-admin.php">Volver al Inicio</a></div>
</div>
</body>
</html>