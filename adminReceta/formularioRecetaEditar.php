<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Editar receta</title>
</head>
<body>

<?php
$idReceta=$_GET["idReceta"];
//echo "xxxxxxx".$idUsuario;
//$id=11;
include_once("RecetaCollector.php");
include_once("Receta.php");
$RecetaCollectorObj = new RecetaCollector();
$ObjReceta = $RecetaCollectorObj->showReceta($idReceta);

print_r($ObjReceta);
?>
<h2>Editar Objeto Receta </h2>
<form action="editar.php" method="post" >
<p>
Id: <input type="text" name="idReceta" value="<?php echo $ObjReceta->getIdReceta(); ?>" readonly />
</p>
<p>
Nombre: <input type="text" name="nombre"  value="<?php echo $ObjReceta->getNombre(); ?>" autofocus required />
</p>
<p>
Descripcion: <input type="text" name="descripcion" value="<?php echo $ObjReceta->getDescripcion(); ?>" autofocus required /></br>
</p>
<p>
Informacion nutricional: <input type="text" name="informacionnutricional" value="<?php echo $ObjReceta->getInformacionnutricional(); ?>" autofocus required /></br>
</p>
<p>
Foto: <input type="text" name="foto" value="<?php echo $ObjReceta->getFoto(); ?>" autofocus required /></br>
</p>


<a href="receta-admin.php">Cancelar</a>
<input type="submit" value="Guardar" />

</form>
