<html>
<?php include '..//headAdm.php';?>
<?php
include_once("ObjetivoCollector.php");
$ObjetivoCollectorObj = new ObjetivoCollector();
?>
<body>
<?php include '..//menuAdm.php';?>
<div id="main">
<table>
<h1>Objetivo</h1>	
<tr><td><a href="nuevoObjetivo.php">Nuevo Objetivo</a></td></tr>
<tr>
<td><strong>Id</strong></td>
<td><strong>Nombre</strong></td>
</tr>

<?php
foreach ($ObjetivoCollectorObj->readObjetivos() as $c){
 //print_r($c);
  echo "<tr>";
  echo "<td>".$c->getIdObjetivo() ."</td>";
  echo "<td>".$c->getNombre()."</td>";
  
  echo "<td><a href='EditarObjetivo.php?idObjetivo=".$c->getIdObjetivo()."'> Editar</a></td>";

  echo "<td><a href='eliminar.php?idObjetivo=".$c->getIdObjetivo()."'> Eliminar</a></td>"; 
  echo "</tr>"; 
}
?>
<tr><td colspan='11'><br><a href='../administracion.php'>Regresar a Perfil de Administrador</a></br></td></tr>
</table>
</div>
</body>
</html>
