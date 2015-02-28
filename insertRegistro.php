<html>
<head>
</head>

<body>
<div id="main">
<?php
$email = $_POST ['email'];
$contrasena = $_POST ['contrasena'];


echo $email."</br>";
echo $contrasena."</br>";
//$valor="manuel";
echo 'Hola ' . htmlspecialchars($email). " !";


include_once("UsuarioCollector.php");

$UsuarioCollectorObj = new UsuarioCollector();
$UsuarioCollectorObj->createUsuario($email, $contrasena);
//echo "</br>";
//echo "Usuario Agregado </br>";
?>
<div><a href="objetivos.php">Volver al Inicio</a></div>
</div>
</body>
</html>
