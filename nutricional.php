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
                            <a href="gustos.php">
                                <span class="service-icon fa  fa-apple"></span>
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
    <br></br>
<!---///////////////////////////////////////////////////////////////////////////////////-->


<div class="border-box  text-center">
<div class="col-lg-6">
            
     			<h2 >Ayudan&oacute;s a conocerte    </h2>     		   
 	</div>
 </div> 	
            <br>
            <br>
            <div class="container-fluid"> 
            <div class="col-lg-6">
            <form action="contact" id="contact-form" class="form-horizontal">
  			<div class="form-group">
				<div class="col-lg-12 col-lg-14">
					<label class="col-lg-3 control-label" for="name">Sexo *:</label>
						<div class="col-lg-4">
                        <label class="checkbox-inline">
  <input type="checkbox" id="inlineCheckbox1" value="option1"> <span class="service-icon fa fa-male"></span>
</label>
<label class="checkbox-inline">
  <input type="checkbox"  id="inlineCheckbox1"  value="option2">  <span class="service-icon fa fa-female"></span></label>
						</div>
				 </div>
            </div>
			</form>
            <form action="contact" id="contact-form" class="form-horizontal">
  			<div class="form-group">
				<div class="col-lg-12 col-lg-14">
					<label class="col-lg-3 control-label" for="name">Peso *:</label>
						<div class="col-lg-4">
						  <input type="text"  placeholder="Peso" class="form-control" name="name" id="name">
						</div>
				 </div>
            </div>
			</form>
           <form action="contact" id="contact-form" class="form-horizontal">
  			<div class="form-group">
				<div class="col-lg-12 col-lg-14">
					<label class="col-lg-3 control-label" for="name">Estatura *:</label>
						<div class="col-lg-4">
						  <input type="text"  placeholder="Estatura" class="form-control" name="lastname" id="lastname">
						</div>
				 </div>
            </div>
			</form>
            <form action="contact" id="contact-form" class="form-horizontal">
  			<div class="form-group">
				<div class="col-lg-4 col-lg-12">
					<label class="col-lg-3 control-label" for="name">Edad *:</label>
						<div class="col-lg-4">
						  <input type="text"  placeholder="Ubicaci&oacute;n" class="form-control" name="name" id="name">
						</div>
				 </div>
            </div>
			</form>
            <form action="contact" id="contact-form" class="form-horizontal">
  			<div class="form-group">
				<div class="col-lg-4 col-lg-12">
					<label class="col-lg-3 control-label" for="name">Actividad F&iacute;sica *:</label>
						<div class="col-lg-6">
                         <label class="checkbox-inline">
  <input type="checkbox"  id="inlineCheckbox1"  value="option1"> Ligera
</label>
<label class="checkbox-inline">
  <input type="checkbox"  id="inlineCheckbox2"  value="option1"> Moderada
</label>
<label class="checkbox-inline">
  <input type="checkbox"  id="inlineCheckbox3"  value="option1"> Alta
</label>
						</div>
				 </div>
            </div>
			</form>
            <form action="contact" id="contact-form" class="form-horizontal">
  			<div class="form-group">
				<div class="col-lg-12 col-lg-14">
					<label class="col-lg-3 control-label" for="name"> Enfermedades *:</label>
						<div class="col-lg-4">
						 
    <input type="checkbox" id="myCheck"> Diabetes I <br> 
    <input type="checkbox" id="myCheck"> Diabetes II <br> 
	<input type="checkbox" id="myCheck"> Obesidad <br> 
    <input type="checkbox" id="myCheck"> Hipertensi&oacute;n <br> 
    <input type="checkbox" id="myCheck"> Problemas Card&iacute;acos <br>
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