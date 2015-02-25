<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Formulario Usuario</title>
</head>
<body>

<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];
//$id=1000;
include_once("RecetaCollector.php");
include_once("Receta.php");
$RecetaCollectorObj = new RecetaCollector();
$ObjReceta = $RecetaCollectorObj->showReceta($id);
?>
<h2> Editar Receta </h2>
<form action="editar.php" method="post" >
<p>
Id Receta: <input type="text" name="idReceta" value="<?php echo $ObjReceta->getIdReceta(); ?>" readonly />
</p>

<p>
Id Plato: <input type="text" name="idPlato"  value="<?php echo $ObjReceta->getIdPlato(); ?>" autofocus required />
</p>

<p>
Nombre: <input type="text" name="nombre"  value="<?php echo $ObjReceta->getNombre(); ?>" autofocus required />
</p>

<p>
Descripcion: <input type="text" name="descripcion"  value="<?php echo $ObjReceta->getDescripcion(); ?>" autofocus required />
</p>


<a href="index.php">Cancelar</a>
<input type="submit" value="Guardar" />

</form>
