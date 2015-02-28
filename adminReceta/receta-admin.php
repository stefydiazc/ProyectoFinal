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
<tr><td><a href="nuevoReceta.php"> Nueva Receta </a></td></tr>
<tr>
<td><strong>Id Receta</strong></td>
<td><strong>Nombre</strong></td>
<td><strong>Descripcion</strong></td>
<td><strong>Informacion Nutricional</strong></td>
<td><strong>Foto</strong></td>

<?php
foreach ($RecetaCollectorObj->readRecetas() as $ObjReceta){
 print_r($ObjReceta);
  echo "<tr>";
  echo "<td>".$ObjReceta->getIdReceta() ."</td>";
  echo "<td>".$ObjReceta->getNombre()."</td>";
  echo "<td>".$ObjReceta->getDescripcion()."</td>";
  echo "<td>".$ObjReceta->getInformacionnutricional()."</td>";
  echo "<td>".$ObjReceta->getFoto()."</td>";
  

  echo "<td><a href='formularioRecetaEditar.php?idReceta=".$ObjReceta->getIdReceta()."'> Editar</a></td>";
 // if ($c->getIdUsuario() > 1)
  	echo "<td><a href='eliminar.php?idReceta=".$ObjReceta->getIdReceta()."'> Eliminar</a></td>"; 
  echo "</tr>"; 
}
?>

<p><tr><td colspan='11'><a href='../administracion.php'>Regresar a Perfil de Administrador</a></td></tr></p>
</table>
</div>
</body>
</html>