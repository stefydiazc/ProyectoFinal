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


//echo $email."</br>";
//echo $contrasena."</br>";
//$valor="manuel";
//echo 'Hola ' . htmlspecialchars($email). " !";


include_once("RegistrateCollector.php");

$RegistrateCollectorObj = new RegistrateCollector();
$RegistrateCollectorObj->createRegistrate($email, $contrasena);

$ObjUsuario = $RegistrateCollectorObj->showUsuario($email);
$id = $ObjUsuario->getIdUsuario();

//echo "</br>";
//echo "Usuario Agregado </br>";
echo "<META HTTP-EQUIV='refresh' content='0; url=../buscar.php?email=$email'>";
?>
<!--<div><a href="objetivos.php">Continuar</a></div>-->


</div>
</body>
</html>
