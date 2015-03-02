<html>
<?php include 'headServicio.php';?>
<?php
include_once("ServicioCollector.php");
$ServicioCollectorObj = new ServicioCollector();
?>
<body>
<?php include 'menuServicio.php';?>
<div id="main">
<table>
<h1>Servicios</h1>
<tr><td><a href="nuevoServicio.php">Nuevo Servicio</a></td></tr>
<tr>
<td><strong>Id</strong></td>
<td><strong>Nombre</strong></td>
<td><strong>Servicio</strong></td>
</tr>

<?php
foreach ($ServicioCollectorObj->readServicios() as $c){
 //print_r($c);
  echo "<tr>";
  echo "<td>".$c->getIdServicio() ."</td>";
  echo "<td>".$c->getNombre()."</td>";
  echo "<td>".$c->getDescripcion()."</td>";


  echo "<td><a href='EditarServicio.php?idServicio=".$c->getIdServicio()."'> Editar</a></td>";

  	echo "<td><a href='eliminar.php?idServicio=".$c->getIdServicio()."'> Eliminar</a></td>"; 
  echo "</tr>"; 
}
?>
<tr><td colspan='11'><br><a href='../administracion.php'>Regresar a Perfil de Administrador</a></br></td></tr>
</table>
</div>
</body>
</html>