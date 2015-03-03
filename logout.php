<?php
	session_start();

	  if(isset($_SESSION['email'])){
		session_destroy();
		echo"se ha destruido session exitosamente<br/>";
		echo "<a href='index.php'>Volver</a>";
	  }
	  else{
		echo"ERROR... <br/>";
		echo "<a href='index.php'>Volver</a>";
	      }
?>
