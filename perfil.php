<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
 
  <?php include 'head.php';?> 
  
<body>
  

  <?php include 'menu.php';?> 

<?php
$idUsuario=$_GET["id"];
//echo "xxxxxxx".$idUsuario;
//$id=11;
//include_once("admUsuario/UsuarioCollector.php");
//include_once("admUsuario/Usuario.php");
//$UsuarioCollectorObj = new UsuarioCollector();
//$ObjUsuario = $UsuarioCollectorObj->showUsuario($idUsuario);

//print_r($ObjUsuario);
?>

 <div class="row">
 <div class="container-fluid">
 <div class="col-lg-3 col-lg-3">
                    <ul class="nav nav-pills nav-stacked text-left">
                        <li class="active">
                            <a href="perfil.php">
                                <span class="service-icon fa fa-user"></span>
                                Informaci&oacute;n Personal
                            </a>
                        </li>
                        <li class="">
                            <a href="nutricional.php">
                                <span class="service-icon fa fa-book"></span>
                                Informaci&oacute;n Nutricional
                            </a>
                        </li>
                        
                        <li class="">
                            <a href="logout.php">
                                <span class="service-icon fa fa-power-off"></span>
                                Cerrar Sesi&oacute;n 
                            </a>
                       
                         </li>
                    </ul>
                </div>
     </div><!-- <div class="container-fluid"> -->
    <br>



<div class="border-box  text-center">
<div class="col-lg-6">
            
     			<h2 class="service-icon fa fa-user" > Informaci&oacute;n Personal   </h2>       		   
 	</div>
 </div> 	
            <br>
            <br>
            <div class="container-fluid"> 
            <div class="col-lg-6">
    <form action="usuario-admin.php" id="" class="form-horizontal" method="post" value=""/>
        <div class="form-group">
        <div class="col-lg-12 col-lg-14">
          <label class="col-lg-3 control-label" for="name">Nombres (*):</label>
            <div class="col-lg-9">
              <input type="text"  placeholder="Nombres" class="form-control" value="<?php //echo $ObjUsuario->getNombre(); ?>" name="nombre">
            </div>
         </div>
            </div>
        <div class="form-group">
        <div class="col-lg-12 col-lg-14">
          <label class="col-lg-3 control-label" for="name">Apellidos (*):</label>
            <div class="col-lg-9">
              <input type="text"  placeholder="Apellidos" class="form-control" value="<?php //echo $ObjUsuario->getApellido(); ?>" name="apellido">
            </div>
         </div>
            </div>
        <div class="form-group">
        <div class="col-lg-4 col-lg-12">
          <label class="col-lg-3 control-label" for="name">Email (*):</label>
            <div class="col-lg-9">
              <input type="text"  placeholder="Email" class="form-control" value="<?php //echo $ObjUsuario->getEmail(); ?>" name="email" readonly>
            </div>
         </div>
            </div>
        <div class="form-group">
        <div class="col-lg-4 col-lg-12">
          <label class="col-lg-3 control-label" for="name">Contrase&ntilde;a  (*):</label>
            <div class="col-lg-9">
              <input type="text"  placeholder="Contrase&ntilde;a " class="form-control" value="<?php //echo $ObjUsuario->getContrasena(); ?>"name="contrasena">
            </div>
         </div>
            </div>

        <div class="form-group">  
            <div class="col-lg-offset-7 col-lg-4">
                <!--<button type="submit" class="btn btn-success">Guardar</button>
                -->
                <input class="btn btn-success" type="submit" value="Guardar">
                <button type="reset" class="btn btn-primary">Cancelar</button>
            </div>
        </div>
  </form> 
</div>  
</div>  
   <!-- Botton Aceptar y Cancelar --> 
     
 </div><!-- <div class="row"> --> 

 
<br></br>
 
  <?php include 'footer.php';?> 
	
  </body>

</html>
