<html>
<head>
</head>

<body>
<div id="main">
<?php
$nombre=$_POST["nombre"];
$idUsuario=$_POST["idusuario"];

echo "Edici&oacute;n en proceso ....  </br>";

include_once("UsuarioCollector.php");
$UsuarioCollectorObj = new UsuarioCollector();
$UsuarioCollectorObj->updateUsuario($idUsuario,$nombre);

echo "id :".$idUsuario." actualizado a:".$nombre." </br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
