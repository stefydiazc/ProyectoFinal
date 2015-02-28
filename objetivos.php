<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

 <?php include 'head.php';?>
  

<body>

 <?php include 'menu.php';?>
  


 <div class="row"><!-- <div class="row"> -->

    <br></br>


<div class="border-box  text-center">
<div class="col-lg-12">
           	<h1>BIENVENIDOS </h1>  
            <h2>¿C&uacute;ales son tus objetivos?</h2> 
            <h3>Come y Disfruta te ayudar&aacute; a lograrlo</h3>        		   
 	</div>
 </div> 	
            <br></br>
            <div class="container-fluid"> 
            <form action="contact" id="contact-form" class="form-horizontal">
  			<div class="form-group">
				<div class="col-lg-6 ">
					<label class="col-lg-12 control-label" for="name"> Mis objetivos*:</label>
						<div class="col-lg-12 col-lg-offset-9">
                         <label class="radio-inline">
 <label class="checkbox-inline">
  <input type="checkbox"  id="inlineCheckbox1"  value="option1"> Comer Sano
</label> <br></br>
<label class="checkbox-inline">
  <input type="checkbox"  id="inlineCheckbox2"  value="option1"> Bajar peso
</label> <br></br>
<label class="checkbox-inline">
  <input type="checkbox"  id="inlineCheckbox3"  value="option1"> Subir peso
</label>
						  
						</div>
				 </div>
            </div>
			</form> 
</div>
</div>    
       

	<div class="container-fluid">
    <div class="form-group">  
    
            <div class="col-lg-offset-7 col-lg-4">
               <!-- <button type="submit" class="btn btn-success">Guardar</button>
                <button type="reset" class="btn btn-primary">Cancelar</button>-->
                <a href="registrarse.php" class="btn btn-success"> Guardar </a>
                <a href="index.php" class="btn btn-primary "> Cancelar </a>
            </div>
     </div>   
       </div>  
 
     
 </div>

 
<br></br>
<br></br>

 <?php include 'footer.php';?>
  
  </body>

</html>
