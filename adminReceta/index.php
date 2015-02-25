<html>
<head>
</head>
<?php
include_once("RecetaCollector.php");
$RecetaCollectorObj = new RecetaCollector();
?>
<body>
<div id="main">
<table>
<tr><td><a href="formularioRecetaInsert.php">Nuevo</a></td></tr>
<tr>
<td><strong>Id Receta</strong></td>
<td><strong>Id Plato</strong></td>
<td><strong>Nombre</strong></td>
<td><strong>Descripcion</strong></td>
<tr>	
<?php
foreach ($RecetaCollectorObj->readRecetas() as $ObjReceta){
  echo "<tr>";
  echo "<td>".$ObjReceta->getIdReceta() ."</td>";
  echo "<td>".$ObjReceta->getPlato()."</td>";
  echo "<td>".$ObjReceta->getNombre() ."</td>";
  echo "<td>".$ObjReceta->getDescripcion()."</td>";


  echo "<td><a href='formularioRecetaEditar.php?id=".$ObjReceta->getIdReceta()."'>editar</a></td>";
  echo "<td><a href='eliminar.php?id=".$ObjReceta->getIdReceta()."'>eliminar</a></td>"; 
  echo "</tr>"; 
}
?>
</table>
</div>
</body>
</html>
