<?php
	session_start();
?>
<html>
<head>
</head>

<body>
<div id="main">
<?php
$idUsuario=$_GET["idUsuario"];

$nombre = $_POST ['nombre'];


include_once("ObjetivoCollector.php");

$ObjetivoCollectorObj = new ObjetivoCollector();
$ObjetivoCollectorObj->($email);
//echo "</br>";
//echo "Usuario Agregado </br>";
echo "<META HTTP-EQUIV='refresh' content='0; url=../objetivos.php'>";
?>
<!--<div><a href="objetivos.php">Continuar</a></div>-->


</div>
</body>
</html>
