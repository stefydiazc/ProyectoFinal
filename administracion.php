<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="es">
 	<?php include "headAdm.php"; ?>

  <body>
  <?php include "menuAdm.php"; ?>
    <div id="CajaGrande">

      <!-- Introducción -->
      <div id="aboutMore" class="pagina">
        <div class="container ">
		      <div class="row">

            <div class="col-md-12  col-md-offset-1">  
				        <h2 class="text-center">Administraci&oacute;n</h2>	
				        <span class="line-title"></span>
            
		        </div><!-- Final Columna -->
		      </div><!-- Final Fila-->
		    </div>
      <div class="row">
        <div class="col-md-8  col-md-offset-2">    
          
          <div class="col-md-2 col-sm-3 col-xs-6">
            <p>Usuario</p>
            <a href="admUsuario/usuario-admin.php"><i class="fa fa-user fa-5x pull-left fa-border"></i></a>
          </div>
          <div class="col-md-2 col-sm-3 col-xs-6">
            <p>Objetivo</p>
            <a href="adminObjetivo/objetivo-admin.php"><i class="fa fa-check-square-o fa-5x pull-left fa-border"></i></a>
          </div>
          <div class="col-md-2 col-sm-3 col-xs-6">
            <p>Plan</p>
            <a href="admPlan/plan-admin.php"><i class="fa fa-book fa-5x pull-left fa-border"></i></a>  
          </div>
          <div class="col-md-2 col-sm-3 col-xs-6">
            <p>Servicio</p>
            <a href="admServicio/servicio-admin.php"><i class="fa fa-tasks fa-5x pull-left fa-border"></i></a>  
          </div>
          <div class="col-md-2 col-sm-3 col-xs-6">
            <p>Receta</p>
            <a href="adminReceta/receta-admin.php"><i class="fa fa-cutlery fa-5x pull-left fa-border"></i></a>
          </div>
          <div class="col-md-2 col-sm-3 col-xs-6">
            <p>Enfermedad</p>
            <a href="adminEnfermedad/enfermedad-admin.php"><i class="fa fa-heart fa-5x pull-left fa-border"></i></a>
          </div>
           
        </div><!-- Final Columna -->
      </div><!-- Final Fila -->
    </div>
   <br></br>
   <br></br>
   <br></br>
  </div>
    <?php include "footer.php"; ?>
</body>
</html>

