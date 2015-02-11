<!DOCTYPE html>
<html lang="en">
 
  <?php include 'head.php';?> 
  
<body>
  

  <?php include 'menu.php';?> 



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
                            <a href="gustos.php">
                                <span class="service-icon fa fa-apple"></span>
                                Gustos
                            </a>
                        </li>
                        <li class="">
                            <a href="alergias.php">
                                <span class="service-icon fa fa-check-square-o"></span>
                                Alergias
                            </a>
                       
                         </li>
                    </ul>
                </div>
     </div><!-- <div class="container-fluid"> -->
    <br>



<div class="border-box  text-center">
<div class="col-lg-6">
            <span class="service-icon fa fa-user"></span>
     			Informaci&oacute;n Personal          		   
 	</div>
 </div> 	
            <br>
            <br>
            <div class="container-fluid"> 
            <div class="col-lg-6">
    <form action="perfil.php" id="contact-form" class="form-horizontal" method="post">
        <div class="form-group">
        <div class="col-lg-12 col-lg-14">
          <label class="col-lg-3 control-label" for="name">Nombres (*):</label>
            <div class="col-lg-9">
              <input type="text"  placeholder="Nombre" class="form-control" name="nombre-field" id="nombre">
            </div>
         </div>
            </div>
        <div class="form-group">
        <div class="col-lg-12 col-lg-14">
          <label class="col-lg-3 control-label" for="name">Apellidos (*):</label>
            <div class="col-lg-9">
              <input type="text"  placeholder="Apellidos" class="form-control" name="apellido-field" id="lastname">
            </div>
         </div>
            </div>
        <div class="form-group">
        <div class="col-lg-4 col-lg-12">
          <label class="col-lg-3 control-label" for="name">Direcci&oacute;n (*):</label>
            <div class="col-lg-9">
              <input type="text"  placeholder="Direcci&oacute;n Domiciliaria" class="form-control" name="direccion-field" id="ubicacion">
            </div>
         </div>
            </div>
        <div class="form-group">
        <div class="col-lg-4 col-lg-12">
          <label class="col-lg-3 control-label" for="name">Tel&eacute;fono  (*):</label>
            <div class="col-lg-9">
              <input type="text"  placeholder="Tel&eacute;fono Convencional " class="form-control" name="telefono-field" id="telefono">
            </div>
         </div>
            </div>
        <div class="form-group">
        <div class="col-lg-12 col-lg-14">
          <label class="col-lg-3 control-label" for="name"> Celular (*):</label>
            <div class="col-lg-9">
              <input type="text"  placeholder=" Celular " class="form-control" name="celular-field" id="celular">
            </div>
         </div>
            </div>
        <div class="form-group">
        <div class="col-lg-12 col-lg-14">
          <label class="col-lg-3 control-label" for="name"> Educaci&oacute;n (*):</label>
            <div class="col-lg-9">
              <select class="form-control input-lg" name="educacion-field">...</select>
            </div>
         </div>
            </div>
  
</div>
</div>    
<!--///////////////////////////////////////////////////////////////////////////////////-->        
<br>
 <!-- Botton Aceptar y Cancelar --> 
  <div class="container-fluid"> <!-- Botton Aceptar y Cancelar --> 
    <div class="form-group">  
    
            <div class="col-lg-offset-7 col-lg-4">
                <!--<button type="submit" class="btn btn-success">Guardar</button>
                <button type="reset" class="btn btn-primary">Cancelar</button>-->
                <input class="btn btn-success" type="button" value="Continuar" onClick="enviar()">
            </div>
     </div>   
       </div>  
        </form> 
   <!-- Botton Aceptar y Cancelar --> 
     
 </div><!-- <div class="row"> --> 

 
<br></br>
 
  <?php include 'footer.php';?> 
	
  </body>

</html>