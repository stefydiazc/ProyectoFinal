<?php
	session_start();
?>
<html>
<head>
</head>

<body>
<div id="main">
<?php
$id = $_SESSION['idusuario'];
$objetivo = $_POST ['objetivo'];


include_once("UsuarioCollector.php");
include_once("Usuario.php");

$ObjetivoCollectorObj = new UsuarioCollector();
$ObjetivoCollectorObj->updateObjetivo($id, $objetivo);
//echo "</br>";
//echo "Usuario Agregado </br>";
//echo "<META HTTP-EQUIV='refresh' content='0; url=../objetivos.php?idUsuario=$codigo'>";
?>
<!--<div><a href="objetivos.php">Continuar</a></div>-->
<script>
            window.location.href = 'http://localhost/ProyectoFinal/perfil.php';
</script>

</div>
</body>
</html>
