<!DOCTYPE html>
<html>
<head>
	<?php include 'headEnfermedad.php';?>
<meta charset="utf-8" />
<title>Editar Objetivo</title>
</head>
<body>
<?php include 'menuEnfermedad.php';?>
<?php
$idEnfermedad=$_GET["idEnfermedad"];
//echo "xxxxxxx".$idServicio;
//$id=11;
include_once("EnfermedadCollector.php");
include_once("Enfermedad.php");
$EnfermedadCollectorObj = new EnfermedadCollector();
$ObjEnfermedad = $EnfermedadCollectorObj->showEnfermedad($idEnfermedad);

//print_r($ObjObjetivo);
?>
<h1>Editar Enfermedad </h1>
<form action="editar.php" method="post" >
<p>
Id: <input type="text" name="idEnfermedad" value="<?php echo $ObjEnfermedad->getIdEnfermedad(); ?>" readonly />
</p>
<p>
Nombre: <input type="text" name="nombre"  value="<?php echo $ObjEnfermedad->getNombre(); ?>" autofocus required />
</p>


<a href="enfermedad-admin.php">Cancelar</a>
<input type="submit" value="Guardar" />

</form>
