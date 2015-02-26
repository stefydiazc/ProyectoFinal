<html>
<head>
</head>
<?php
include_once("ServicioCollector.php");
$ServicioCollectorObj = new ServicioCollector();
?>
<body>
<div id="main">
<table>
<tr><td><a href="nuevoServicio.php">Nuevo</a></td></tr>
<tr>
<td><strong>Id</strong></td>
<td><strong>Nombre</strong></td>
<td><strong>Servicio</strong></td>
</tr>

<?php
foreach ($ServicioCollectorObj->readServicios() as $c){
 //print_r($c);
  echo "<tr>";
  echo "<td>".$c->getIdUsuario() ."</td>";
  echo "<td>".$c->getNombre()."</td>";
  echo "<td>".$c->getDescripcion()."</td>";


  echo "<td><a href='formularioUsuarioEditar.php?idServicio=".$c->getIdServicio()."'> Editar</a></td>";
 // if ($c->getIdUsuario() > 1)
  	echo "<td><a href='eliminar.php?idServicio=".$c->getIdServicio()."'> Eliminar</a></td>"; 
  echo "</tr>"; 
}
?>

<tr><td colspan='11'><a href='../administracion.php'>Regresar a Perfil de Administrador</a></td></tr>
</table>
</div>
</body>
</html>