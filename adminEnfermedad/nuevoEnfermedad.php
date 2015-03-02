<!DOCTYPE html>
<html>
<head>
	<?php include 'headEnfermedad.php';?>
<meta charset="utf-8" />
<title>Nuevo Enfermedad</title>
</head>
<body>
	<?php include 'menuEnfermedad.php';?>
<h1>Agregar nueva enfermedad</h1>	
<form action="insert.php" method="post" >
<p>
Nombre: <input type="text" name="nombre" autofocus required /></br>
</p>
<a href="enfermedad-admin.php">Cancelar</a>
<input type="submit" value="Guardar" />

</form>
