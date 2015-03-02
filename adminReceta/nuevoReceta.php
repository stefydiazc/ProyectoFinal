<!DOCTYPE html>
<html>
<?php include 'headReceta.php';?>
<meta charset="utf-8" />
<title>formulario Receta</title>
<?php include 'headReceta.php';?> 

<body>
<?php include 'menuReceta.php';?> 

<form action="insert.php" method="post" >
<p>
<h1>Agregar Nueva Receta </h1>	
Nombre: <input type="text" name="nombre" autofocus required /></br>
Apellido: <input type="text" name="apellido" autofocus required /></br>
Email: <input type="text" name="email" autofocus required /></br>
Contrase&nacute;a: <input type="text" name="contrasena" autofocus required /></br>



</p>
<a href="receta-admin.php">Cancelar</a>
<input type="submit" value="Guardar" />

</form>
