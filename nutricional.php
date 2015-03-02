<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
 
  <?php include 'head.php';?> 
  
<body>
  

  <?php include 'menu.php';?> 


<!---//////////////////////////////////////////////////////////////////////////////////-->
 <div class="row"><!-- <div class="row"> -->
 <div class="container-fluid">
 <div class="col-lg-3 col-lg-3">
                    <ul class="nav nav-pills nav-stacked text-left">
                        <li class="">
                            <a href="perfil.php">
                                <span class="service-icon fa fa-user"></span>
                                Informaci&oacute;n Personal
                            </a>
                        </li>
                        <li class="active">
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

<!---///////////////////////////////////////////////////////////////////////////////////-->


<div class="border-box  text-center">
<div class="col-lg-6">
    <h2 class="service-icon fa fa-book">  Ay&uacute;danos a conocerte    </h2>     		   
 	</div>
 </div> 	
            <br>
            <br>
            <div class="container-fluid"> 
            <div class="col-lg-6">
            <form action="contact" id="contact-form" class="form-horizontal">
  			<div class="form-group">
				<div class="col-lg-12 col-lg-14">
					<label class="col-lg-3 control-label" for="name">G&eacute;nero *:</label>
						<div class="col-lg-4">
                  <input type="radio" name="genero" value="m"> <span class="service-icon fa fa-male"></span>Masculino</br>
                  <input type="radio" name="genero" value="f"><span class="service-icon fa fa-female"></span>Femenino
						</div>
				 </div>
            </div>
		        <div class="form-group">
        <div class="col-lg-4 col-lg-12">
          <label class="col-lg-3 control-label">Actividad F&iacute;sica*:</label>
            <div class="col-lg-6">
            
                <input type="radio" name="actfisica" value="l"> Ligero
                <input type="radio" name="actfisica" value="m"> Moderado
                <input type="radio" name="actfisica" value="a"> Alta</br>

            </div>
         </div>
            </div>

      <div class="form-group">
        <div class="col-lg-4 col-lg-12">
          <label class="col-lg-3 control-label">Edad *:</label>
            <div class="col-lg-4">
              <input type="text"  placeholder="Edad" class="form-control" name="edad">
            </div>
         </div>
            </div>

  			<div class="form-group">
        <div class="col-lg-12 col-lg-14">
          <label class="col-lg-3 control-label" for="name">Estatura (Kg.):</label>
            <div class="col-lg-4">
              <input type="text"  placeholder="Kilos (Ej: 65.5)" class="form-control" name="estatura">
            </div>
         </div>
            </div>


        <div class="form-group">
				<div class="col-lg-12 col-lg-14">
					<label class="col-lg-3 control-label" for="name">Peso (cm.):</label>
						<div class="col-lg-4">
						  <input type="text" placeholder="Centimetros (Ej: 1.65)" class="form-control" name="peso" value="<?php ?>">
						</div>
				 </div>
            </div>

            <div class="form-group">
        <div class="col-lg-12 col-lg-14">
          <label class="col-lg-3 control-label" for="name">Objetivo *:</label>
            <div class="col-lg-4">
                  <input type="radio" name="objetivo" value="1"> Comer Sano</br>
                  <input type="radio" name="objetivo" value="2"> Bajar de Peso</br>
                  <input type="radio" name="objetivo" value="3"> Subir de Peso</br>
            </div>
         </div>
            </div>

			</form>
            
</div>
</div>    
<!---///////////////////////////////////////////////////////////////////////////////////-->        
<br></br>
 <!-- Botton Aceptar y Cancelar --> 
	<div class="container-fluid"> <!-- Botton Aceptar y Cancelar --> 
    <div class="form-group">  
    
            <div class="col-lg-offset-7 col-lg-4">
                <button type="submit" class="btn btn-success">Guardar</button>
                <button type="reset" class="btn btn-primary">Cancelar</button>
            </div>
     </div>   
       </div>  
   <!-- Botton Aceptar y Cancelar --> 
     
 </div><!-- <div class="row"> --> 
<!-- Datos Personales -->
 
<br></br>
 
  <?php include 'footer.php';?> 
  
  </body>

</html>