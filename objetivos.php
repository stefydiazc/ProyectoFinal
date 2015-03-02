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
            <h2>¿C&uacute;al es tu objetivo?</h2> 
            <h3>Come y Disfruta te ayudar&aacute; a lograrlo</h3>        		   
 	</div>
 </div> 	
            <br></br>
            <div class="container-fluid"> 
            <form action="insertObjetivo.php" class="form-horizontal">
  			<div class="form-group">
				<div class="col-lg-6 ">
					<label class="col-lg-12 control-label"><h3><strong>Mi objetivo (*):</strong></h3></label>
						<div class="col-lg-12 col-lg-offset-9">
                 

                <input type="radio" name="objetivo" value="1" 
                <?php 
                  if ($ObjUsuario->getObjetivo() == '1') {
                    echo "checked";
                  }
                  ?>
                  > Comer Sano
               <br></br>

                <input type="radio" name="objetivo" value="2"
                  <?php 
                  if ($ObjUsuario->getObjetivo() == '2') {
                    echo "checked";
                  }
                  ?>
                  > Bajar peso
               <br></br>

                <input type="radio" name="objetivo" value="3"
                  <?php 
                  if ($ObjUsuario->getObjetivo() == '3') {
                    echo "checked";
                  }
                  ?>
                > Subir peso
                <br></br>
						  
              <!-- <button type="submit" class="btn btn-success">Guardar</button>
                <button type="reset" class="btn btn-primary">Cancelar</button>-->
                <a href="registrarse.php" class="btn btn-success"> Guardar </a>
                <a href="index.php" class="btn btn-primary "> Cancelar </a>
						</div>
				 </div>
            </div>
			</form> 
</div>
</div>    
       
 
<br></br>
<br></br>

 <?php include 'footer.php';?>
  
  </body>

</html>
