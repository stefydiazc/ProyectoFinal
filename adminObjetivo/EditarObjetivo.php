<!DOCTYPE html>
<html>
<head>
	<?php include 'headObjetivo.php';?>
<meta charset="utf-8" />
<title>Editar Objetivo</title>
</head>
<body>
<?php include 'menuObjetivo.php';?>
<?php
$idObjetivo=$_GET["idObjetivo"];
//echo "xxxxxxx".$idServicio;
//$id=11;
include_once("ObjetivoCollector.php");
include_once("Objetivo.php");
$ObjetivoCollectorObj = new ObjetivoCollector();
$ObjObjetivo = $ObjetivoCollectorObj->showObjetivo($idObjetivo);

//print_r($ObjObjetivo);
?>
<h1>Editar Objetivo </h1>
<form action="editar.php" method="post" >
<p>
Id: <input type="text" name="idObjetivo" value="<?php echo $ObjObjetivo->getIdObjetivo(); ?>" readonly />
</p>
<p>
Nombre: <input type="text" name="nombre"  value="<?php echo $ObjObjetivo->getNombre(); ?>" autofocus required />
</p>


<a href="objetivo-admin.php">Cancelar</a>
<input type="submit" value="Guardar" />

</form>
