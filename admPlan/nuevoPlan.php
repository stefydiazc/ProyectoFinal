<!DOCTYPE html>
<html>
<head>
<?php include 'headPlan.php';?>

<meta charset="utf-8" />
<title>Nuevo Plan</title>
</head>
<body>
<?php include 'menuPlan.php';?>
<h1>Agregar nuevo plan</h1>
<form action="insert.php" method="post" >
<p>
Nombre: <input type="text" name="nombre" autofocus required /></br>
Descripcion: <input type="text" name="descripcion" autofocus required /></br>
Id Servicio: <input type="text" name="idServicio" autofocus required /></br>
Precio: <input type="text" name="precio" autofocus required /></br>
</p>
<a href="plan-admin.php">Cancelar</a>
<input type="submit" value="Guardar" />

</form>
