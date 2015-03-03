<?php
	session_start();
 	include "headAdm.php";
 	include "menuAdm.php";
	  if(isset($_SESSION['email'])){
		session_destroy();
		echo "<br></br>";
		echo"<center><h1>Gracias por Visitar nuestro Portal..!</h1></center><br/>";
		echo "<center><a href='index.php'>Volver</a></center>";
	  }
	  else{
		echo"ERROR... <br/>";
		echo "<a href='index.php'>Volver</a>";
	      }
?>
