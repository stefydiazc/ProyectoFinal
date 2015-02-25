<html>
<head>
</head>

<body>
<div id="main">
<?php
$idReceta=$_POST["idReceta"];
$idPlato=$_POST["idPlato"];
$nombre=$_POST["nombre"];
$descripcion=$_POST["descripcion"];

echo "Edici&oacute;n en proceso ....  </br>";

include_once("RecetaCollector.php");
$RecetaCollectorObj = new RecetaCollector();
$RecetaCollectorObj->updateReceta($idReceta,$nombre);

echo "id :".$idReceta." actualizado a:".$nombre." </br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
