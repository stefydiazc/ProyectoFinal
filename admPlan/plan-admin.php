<html>
<?php include 'headPlan.php';?>

<?php
include_once("PlanCollector.php");
$PlanCollectorObj = new PlanCollector();
?>
<body>
<?php include 'menuPlan.php';?>

<div id="main">
<table>
<h1>Plan</h1>
<tr><td><a href="nuevoPlan.php">Nuevo</a></td></tr>
<tr>
<td><strong>Id</strong></td>
<td><strong>Nombre</strong></td>
<td><strong>Descripci&oacute;n</strong></td>
<td><strong>Servicio</strong></td>
<td><strong>Precio</strong></td>
</tr>

<?php
foreach ($PlanCollectorObj->readPlanes() as $c){
 //print_r($c);
  echo "<tr>";
  echo "<td>".$c->getIdPlan() ."</td>";
  echo "<td>".$c->getNombre()."</td>";
  echo "<td>".$c->getDescripcion()."</td>";
  echo "<td>".$c->getIdServicio() ."</td>";
  echo "<td>".$c->getPrecio() ."</td>";

  echo "<td><a href='EditarPlan.php?idPlan=".$c->getIdPlan()."'> Editar</a></td>";

  	echo "<td><a href='eliminar.php?idPlan=".$c->getIdPlan()."'> Eliminar</a></td>"; 
  echo "</tr>"; 
}
?>
<tr><td colspan='11'><br><a href='../administracion.php'>Regresar a Perfil de Administrador</a></br></td></tr>
</table>
</div>
</body>
</html>