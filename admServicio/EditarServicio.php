<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Editar los Servicios</title>
</head>
<body>

<?php
$idServicio=$_GET["idServicio"];
//echo "xxxxxxx".$idUsuario;
//$id=11;
include_once("ServicioCollector.php");
include_once("Servicio.php");
$ServicioCollectorObj = new ServicioCollector();
$ObjServicio = $ServicioCollectorObj->showServicio($idServicio);

//print_r($ObjServicio);
?>
<h1>Editar Objeto Servicio </h1>
<form action="editar.php" method="post" >
<p>
Id: <input type="text" name="idServicio" value="<?php echo $ObjServicio->getIdServicio(); ?>" readonly />
</p>
<p>
Nombre: <input type="text" name="nombre"  value="<?php echo $ObjServicio->getNombre(); ?>" autofocus required />
</p>
<p>
Descripcion: <input type="text" name="descripcion" value="<?php echo $ObjServicio->getDescripcion(); ?>" autofocus required /></br>
</p>


<a href="servicio-admin.php">Cancelar</a>
<input type="submit" value="Guardar" />

</form>
