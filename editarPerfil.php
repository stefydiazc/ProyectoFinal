<html>
	<?php include 'menu.php';?>
<body>
<div id="main">
<?php

print_r($_POST);


$idUsuario=$_POST["idUsuario"];
$nombre = $_POST ['nombre'];
$apellido = $_POST ['apellido'];
$email = $_POST ['email'];
$contrasena = $_POST ['contrasena'];
$genero = $_POST ['genero'];
$actfisica = $_POST ['actfisica'];
$edad = $_POST ['edad'];
$estatura = $_POST ['estatura'];
$peso = $_POST ['peso'];
$objetivo = $_POST ['objetivo'];

echo "Edici&oacute;n en proceso ....  </br>";

include_once("UsuarioCollector.php");
$UsuarioCollectorObj = new UsuarioCollector();
$UsuarioCollectorObj->updateUsuario($idUsuario,$nombre, $apellido, $email, $contrasena, $genero, $actfisica, $edad, $estatura, $peso, $objetivo);
echo "<script>alert('Datos actualizados exitosamente. Si su nombre de usuario ha sido editado, se mostrará en la siguiente sesión.');</script>";



?>
<div><a href="usuario-admin.php">Volver al Inicio</a></div>
</div>
<br></br>
<br></br>

<?php include 'footer.php';?>
</body>

</html>