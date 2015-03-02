<!DOCTYPE html>
<html>
<head>
	<?php include 'headObjetivo.php';?>
<meta charset="utf-8" />
<title>Nuevo Objetivo</title>
</head>
<body>
	<?php include 'menuObjetivo.php';?>
<h1>Agregar nuevo objetivo</h1>	
<form action="insert.php" method="post" >
<p>
Nombre: <input type="text" name="nombre" autofocus required /></br>
</p>
<a href="objetivo-admin.php">Cancelar</a>
<input type="submit" value="Guardar" />

</form>
