<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
 
 <?php include 'head.php';?>
  
  
<body>
  
 <?php include 'menu.php';?>

    

 <div class="row">
 

<!-- Contact -->

    <div id="contact">
      <div class="container">
        
		<div class="col-md-6 col-md-offset-4 text-center">
            <h2>Registrat&eacute; aqu&iacute;</h2>
          </div>
          <br>
          <div class="col-md-6 col-md-offset-4">
		  <!-- contact form starts -->
            <form action="insertRegistro.php" id="contact-form" class="form-horizontal" method="post">
			   
						    <div class="form-group">
						      <label class="col-sm-2 control-label" >Correo Electr&oacute;nico </label>
						      <div class="col-sm-9">
						        <input type="text" placeholder="Escriba su correo electr&oacute;nico" class="form-control" name="email">
						      </div>
						    </div>
                           
                       
						    <div class="form-group">
						      <label class="col-sm-2 control-label" for="subject">Contrase&ntilde;a</label>
						      <div class="col-sm-9">
						        <input type="text" placeholder="Contrase&ntilde;a" class="form-control" name="contrasena">
						      </div>
					 	    </div>
						 
                          <br></br>
                           
						 
	              <div class="col-sm-offset-4 col-sm-8">
			            <!--<button type="submit" class="btn btn-success">Enviar</button>-->
                        <!--<a href="objetivos.php" type= "submit" class="btn btn-success"> Enviar </a>-->
                        <input type="submit" value="Enviar" class="btn btn-success" />
	    			      <a href="index.php" class="btn btn-primary"> Cancelar </a>
	        			</div>
		</form>		
						
				
				<!-- contact form ends -->		
          </div>
        
      </div>
    </div>
    <!-- /Contact -->    

     
 </div><!-- <div class="row"> --> 

 <?php include 'footer.php';?> 

 
	
  </body>

</html>