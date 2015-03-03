<?php
session_start();
include_once("UsuarioCollector.php");
include_once("Usuario.php");

if (isset($_POST['email'])) {
	//Comprobacion del envio del nombre de usuario y password
	$email     = $_POST['email'];
	$contrasena = $_POST['contrasena'];

	
	if ($contrasena == NULL) {
		echo "No a introducido una contrase&ntilde;a";
		exit();
	}else{
		$conectar = new UsuarioCollector();
		$data = $conectar->showLogin($email,$contrasena);

		if($data == NULL) {
			echo "0";
		}else{
			$_SESSION['idusuario'] = $data->getIdUsuario(); 
			$_SESSION['email']     = $data->getEmail(); 
			$_SESSION["ultimoAcceso"]= date("Y-n-j H:i:s");
			echo $_SESSION['idusuario'];
				echo "Hola estoy aqui";
			?>
            <script>
            window.location.href = 'http://localhost/ProyectoFinal/perfil.php';
            </script>
			<?php
		} // End If
	} //End if
} // End if
?>