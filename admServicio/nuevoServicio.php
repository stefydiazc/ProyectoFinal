<!DOCTYPE html>
<html>
<head>
<?php include '..//headAdm.php';?>

<meta charset="utf-8" />
<title>Nuevo Servicio</title>
<?php include '..//menuAdm.php';?>
</head>
<body>
<form action="insert.php" method="post" >
<p>
Nombre: <input type="text" name="nombre" autofocus required /></br>
Descripcion: <input type="text" name="descripcion" autofocus required /></br>

</p>
<a href="servicio-admin.php">Cancelar</a>
<input type="submit" value="Guardar" />

</form>
