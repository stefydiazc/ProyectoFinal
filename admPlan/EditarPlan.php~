<!DOCTYPE html>
<html>
<head>
<?php include 'headPlan.php';?>

<meta charset="utf-8" />
<title>Editar Plan</title>
</head>
<body>
<?php include 'menuPlan.php';?>

<?php
$idPlan=$_GET["idPlan"];
//echo "xxxxxxx".$idServicio;
//$id=11;
include_once("PlanCollector.php");
include_once("Plan.php");
$PlanCollectorObj = new PlanCollector();
$ObjPlan = $PlanCollectorObj->showPlan($idPlan);

print_r($ObjPlan);
?>
<h1>Editar Objeto Plan </h1>
<form action="editar.php" method="post" >
<p>
Id: <input type="text" name="idPlan" value="<?php echo $ObjPlan->getIdPlan(); ?>" readonly />
</p>
<p>
Nombre: <input type="text" name="nombre"  value="<?php echo $ObjPlan->getNombre(); ?>" autofocus required />
</p>
<p>
Descripcion: <input type="text" name="descripcion" value="<?php echo $ObjPlan->getDescripcion(); ?>" autofocus required /></br>
</p>
<p>
Id Servicio: <input type="text" name="idServicio" value="<?php echo $ObjPlan->getIdServicio(); ?>" autofocus required/>
</p>
<p>
Precio: <input type="text" name="precio" value="<?php echo $ObjPlan->getPrecio(); ?>" autofocus required />
</p>
<a href="plan-admin.php">Cancelar</a>
<input type="submit" value="Guardar" />

</form>
