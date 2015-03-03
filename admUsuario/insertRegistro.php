<?php
	session_start();
?>
<html>
<head>
</head>

<body>
<div id="main">
<?php
$email = $_POST ['email'];
$contrasena = $_POST ['contrasena'];

include_once("UsuarioCollector.php");
include_once("Usuario.php");


$UsuarioCollectorObj = new UsuarioCollector();
$UsuarioCollectorObj->createRegistrate($email, $contrasena);


//echo "<META HTTP-EQUIV='refresh' content='0; url=../buscar.php?email=$email'>";

?>
<!--<div><a href="objetivos.php">Continuar</a></div>-->
<script>
            window.location.href = 'http://localhost/ProyectoFinal/gracias.php';
</script>

</div>
</body>
</html>
