<html>
<head>
</head>
<?php
include_once("UsuarioCollector.php");
$UsuarioCollectorObj = new UsuarioCollector();
?>
<body>
<div id="main">
<table>
<tr><td><a href="formularioUsuarioInsert.php">Nuevo</a></td></tr>
<?php
foreach ($UsuarioCollectorObj->readUsuarios() as $ObjUsuario){
  echo "<tr>";
  echo "<td>".$ObjUsuario->getIdUsuario() ."</td>";
  echo "<td>".$ObjUsuario->getNombre()."</td>";
  echo "<td><a href='formularioUsuarioEditar.php?id=".$ObjUsuario->getIdUsuario()."'>editar</a></td>";
  echo "<td><a href='eliminar.php?id=".$ObjUsuario->getIdUsuario()."'>eliminar</a></td>"; 
  echo "</tr>"; 
}
?>
</table>
</div>
</body>
</html>
