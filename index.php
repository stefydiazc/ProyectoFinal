<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
 
  <?php include 'head.php';?> 


<body>

	  <?php include 'header.php';?> 
	  <?php include 'menu.php';?> 
   
    <!-- Conocenos -->
<div id="about" class="about_us">
	<div class="container-fluid">
		 <div class="row"> 
           <img src="img/conocenos.png" alt="Bienvenidos a Come y disfruta" class="img-responsive">
              
         </div>
    </div>
</div>
        
    <!-- /About -->

<!---//////////////////////////////////////////////////////////////////////////////////-->


<!---//////////////////////////////////////////////////////////////////////////////////-->
  <!-- Mensaje Diario -->
    <div id="services" class="services">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4 col-md-offset-4 text-center">
            <h1>Hazlo Ahora</h1>
            <hr>
          </div>
        </div>
        <section class="main">
      
        <ul class="ch-grid">
          <li>
            <div class="ch-item">       
              <div class="ch-info">
                <div class="ch-info-front ch-img-1"></div>
                <div class="ch-info-back">
                  <h3>HIDRATAT&Eacute;</h3>
                  <p>El agua es el &uacute;nico liquido indispensable, no lo sustituyas con otras bebidas. </p>
                </div>  
              </div>
            </div>
          </li>
          <li>
      
            <div class="ch-item">
              <div class="ch-info">
                <div class="ch-info-front ch-img-2"></div>
                <div class="ch-info-back">
                  <h3>CONSUME FRUTAS</h3>
                  <p>Son tambien un fast-food y saludables.  </p>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="ch-item">
              <div class="ch-info">
                <div class="ch-info-front ch-img-3"></div>
                <div class="ch-info-back">
                  <h3>CONSUME AVENA</h3>
                  <p>La avena es siempre una perfecta opci&oacute;n para el desayuno, acompañolo con frutas frescas.</p>
                </div>
              </div>
            </div>
          </li>
         <li>
            <div class="ch-item">
              <div class="ch-info">
                <div class="ch-info-front ch-img-4"></div>
                <div class="ch-info-back">
                  <h3>A CORRER SE HA DICHO</h3>
                  <p> Correr con alguien m&aacute;s mejora los resultados y los hace m&aacute;s consistentes..</p>
                </div>
              </div>
            </div>
          </li>
        </ul>


			<!-- contact form ends -->		
          </div>
        </div>
      </div>
    </div>
    <!-- /Contact -->

<!---///////////////////////////////////////////////////////////////////////////////////-->



<!---///////////////////////////////////////////////////////////////////////////////////-->



<div id="portfolio" class="portfolio">
    <div class="container-fluid">
    <div class="row push50">
          <div class="col-md-4 col-md-offset-4 text-center">
            <h1>Nuestras Recetas</h1>
      <p>
      <span class="filter label label-default" data-filter="all">Todos</span>
  <span class="filter label label-default" data-filter="bw">Entradas</span>
  <span class="filter label label-default" data-filter="nature">Platos Fuertes</span>
  <span class="filter label label-default" data-filter="portraits">Postres y Ensaladas</span>
  </p>
            <hr>
          </div>
        </div>
    
    <div class="row">
    
    <div class="gallery">
    
          <ul id="Grid" class="gcontainer">
            <li class="col-md-4 col-sm-4 col-xs-12 mix bw portraits" data-cat="graphics">
              <a data-toggle="modal" data-target="#portrait1" class="mix-cover">
                <img class="horizontal" src="img/ensaladabacalao.jpg" alt="Ensalada de patatas y bacalao">
                <span class="overlay"><span class="valign"></span><span class="title">Patatas y bacalao</span></span>
              </a>                
            </li>
            <li class="col-md-4 col-sm-4 col-xs-12 mix portraits" data-cat="graphics">
                <a data-toggle="modal" data-target="#portrait2" class="mix-cover">
                  <img class="horizontal" src="img/polloyesparragos.jpg" alt="placeholder">
                  <span class="overlay"><span class="valign"></span><span class="title">Pollo y Esparragos</span></span>
                </a>                
            </li>
        <li class="col-md-4 col-sm-4 col-xs-12 mix nature" data-cat="nature">
                <a data-toggle="modal" data-target="#nature1" class="mix-cover">
                  <img class="horizontal" src="img/pollouva.jpg" alt="placeholder">
                  <span class="overlay"><span class="valign"></span><span class="title">Pollo salsa de uvas</span></span>
                </a>
            </li>
            <li class="col-md-4 col-sm-4 col-xs-12 mix portraits" data-cat="portraits">
                <a data-toggle="modal" data-target="#portrait3" class="mix-cover">
                  <img class="horizontal" src="img/tarta.jpg" alt="Tarta de manzana">
                  <span class="overlay"><span class="valign"></span><span class="title">Tarta de manzana</span></span>
                </a>
            </li>
        <li class="col-md-4 col-sm-4 col-xs-12 mix portraits" data-cat="portraits">
                <a data-toggle="modal" data-target="#portrait5" class="mix-cover">
                  <img class="horizontal" src="img/garbanzos.jpg" alt="placeholder">
                   <span class="overlay"><span class="valign"></span><span class="title">Ensalada de garbanzos</span></span>
                </a>
            </li>
        <li class="col-md-4 col-sm-4 col-xs-12 mix nature" data-cat="nature">
                <a data-toggle="modal" data-target="#nature" class="mix-cover">
                  <img class="horizontal" src="img/naranja.jpg" alt="placeholder">
                  <span class="overlay"><span class="valign"></span><span class="title">Pollo a la naranja</span></span>
                </a>
            </li>
            <li class="col-md-4 col-sm-4 col-xs-12 mix portraits" data-cat="portrait">
                <a data-toggle="modal" data-target="#portrait4" class="mix-cover green">
                  <img class="vertical" src="img/fresas.jpg" alt="Copa de Fresas y Yogurt">
                  <span class="overlay"><span class="valign"></span><span class="title">Copa de Fresas y Yogurt</span></span>           
                </a>
            </li>
        <li class="col-md-4 col-sm-4 col-xs-12 mix bw nature all" data-cat="bw">
                <a data-toggle="modal" data-target="#forest" class="mix-cover green">
                  <img class="vertical" src="img/pina.jpg" alt="Brochetas de langostino">

                   <span class="overlay"><span class="valign"></span><span class="title">Brocheta de langostino</span></span>                    
                </a>
            </li>
        <li class="col-md-4 col-sm-4 col-xs-12 mix bw nature all" data-cat="bw">
                <a data-toggle="modal" data-target="#bw1" class="mix-cover green">
                  <img class="vertical" src="img/rollitos.jpg" alt="Rollitos">
                   <span class="overlay"><span class="valign"></span><span class="title">Rol de pan</span></span>                  
                </a>
            </li>
          </ul>   
   	  
<!-- Load Photo in Modal -->			  
   <div class="modal fade" id="portrait1" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 class="modal-title text-center"><strong>Ensalada de Patatas y Bacalao</strong></h3>
      </div>
      <div class="modal-body">
       <img class="thumbnail" alt="Ensalada de Patatas y Bacalao" src="img/ensaladabacalao.jpg"/>
       
       <strong>Informaci&oacute;n Nutricional:</strong>

       <pre>
       Calorías 112 (4,7%)		Azúcares 0,4g (0,4%)
       Grasa 7,1g (8,5%)		Grasa saturada 1,3g (5,4%)
       Sal 0,4g (5,6%)			Fibra 0,3g (1%)
       </pre>
      <strong>Ingredientes:</strong><br><br>
      <a href="suscribete.php" class="btn btn-primary">Leer mas..</a>
       
       
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

  <div class="modal fade" id="portrait2" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 class="modal-title text-center"><strong>Ensalada de Pollo y Esparragos</strong></h3>
      </div>
      <div class="modal-body">
       <img class="thumbnail" alt="Ensalada de Pollo y Esparragos" src="img/polloyesparragos.jpg"/>
     <strong>Informaci&oacute;n Nutricional:</strong>

       <pre>
       Calorías 112 (4,7%)		Azúcares 0,4g (0,4%)
       Grasa 7,1g (8,5%)		Grasa saturada 1,3g (5,4%)
       Sal 0,4g (5,6%)			Fibra 0,3g (1%)
       </pre>
      <strong>Ingredientes:</strong><br><br>
      <a href="suscribete.php" class="btn btn-primary">Leer mas..</a>
     
     
     
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="portrait3" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 class="modal-title text-center"><strong>Tarta de Manzana</strong></h3>
      </div>
      <div class="modal-body">
       <img class="thumbnail" alt="Tarta de Manzana" src="img/tarta.jpg"/>
       <strong>Informaci&oacute;n Nutricional:</strong>

       <pre>
       Calorías 112 (4,7%)		Azúcares 0,4g (0,4%)
       Grasa 7,1g (8,5%)		Grasa saturada 1,3g (5,4%)
       Sal 0,4g (5,6%)			Fibra 0,3g (1%)
       </pre>
      <strong>Ingredientes:</strong><br><br>
      <a href="suscribete.php" class="btn btn-primary">Leer mas..</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="portrait4" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 class="modal-title text-center"><strong>Copa de Fresas y Yogurt</strong></h3>
      </div>
      <div class="modal-body">
       <img class="thumbnail" alt="Copa de Fresas y Yogurt" src="img/fresas.jpg"/>
       
       <strong>Informaci&oacute;n Nutricional:</strong>

       <pre>
       Calorías 112 (4,7%)		Azúcares 0,4g (0,4%)
       Grasa 7,1g (8,5%)		Grasa saturada 1,3g (5,4%)
       Sal 0,4g (5,6%)			Fibra 0,3g (1%)
       </pre>
      <strong>Ingredientes:</strong><br><br>
      <a href="suscribete.php" class="btn btn-primary">Leer mas..</a>
       
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="portrait5" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title text-center"><strong>Ensalada mixta de garbanzos</strong></h3>
      </div>
      <div class="modal-body">
       <img class="thumbnail" alt="Ensalada mixta de garbanzos" src="img/garbanzos.jpg"/>
      <strong>Informaci&oacute;n Nutricional:</strong>

       <pre>
       Calorías 112 (4,7%)		Azúcares 0,4g (0,4%)
       Grasa 7,1g (8,5%)		Grasa saturada 1,3g (5,4%)
       Sal 0,4g (5,6%)			Fibra 0,3g (1%)
       </pre>
      <strong>Ingredientes:</strong><br><br>
      <a href="suscribete.php" class="btn btn-primary">Leer mas..</a>
      
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="nature" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 class="modal-title text-center"><strong>Filete de pollo a la naranja</strong></h3>
      </div>
      <div class="modal-body">
       <img class="thumbnail" alt="Filete de pollo a la naranja" src="img/naranja.jpg"/>
      
      <strong>Informaci&oacute;n Nutricional:</strong>

       <pre>
       Calorías 112 (4,7%)		Azúcares 0,4g (0,4%)
       Grasa 7,1g (8,5%)		Grasa saturada 1,3g (5,4%)
       Sal 0,4g (5,6%)			Fibra 0,3g (1%)
       </pre>
      <strong>Ingredientes:</strong><br><br>
      <a href="suscribete.php" class="btn btn-primary">Leer mas..</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="nature1" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 class="modal-title text-center"><strong>Pollo en salsa de uvas</strong></h3>
      </div>
      <div class="modal-body">
       <img class="thumbnail" alt="Pollo en salsa de uvas" src="img/pollouva.jpg"/>
       <strong>Informaci&oacute;n Nutricional:</strong>

       <pre>
       Calorías 112 (4,7%)		Azúcares 0,4g (0,4%)
       Grasa 7,1g (8,5%)		Grasa saturada 1,3g (5,4%)
       Sal 0,4g (5,6%)			Fibra 0,3g (1%)
       </pre>
      <strong>Ingredientes:</strong><br><br>
      <a href="suscribete.php" class="btn btn-primary">Leer mas..</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="forest" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 class="modal-title text-center"><strong>Brochetas de langostino y pi&ntilde;a</strong></h3>
      </div>
      <div class="modal-body">
       <img class="thumbnail" alt="Brochetas de langostino y piña" src="img/pina.jpg"/>
       <strong>Informaci&oacute;n Nutricional:</strong>

       <pre>
       Calorías 112 (4,7%)		Azúcares 0,4g (0,4%)
       Grasa 7,1g (8,5%)		Grasa saturada 1,3g (5,4%)
       Sal 0,4g (5,6%)			Fibra 0,3g (1%)
       </pre>
      <strong>Ingredientes:</strong><br><br>
      <a href="suscribete.php" class="btn btn-primary">Leer mas..</a>
       
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="bw1" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 class="modal-title text-center"><strong>Rollitos de pan con vegetales</strong></h3>
      </div>
      <div class="modal-body">
       <img class="thumbnail" alt="Rollitos de pan con vegetales" src="img/rollitos.jpg"/>
       
       <strong>Informaci&oacute;n Nutricional:</strong>

       <pre>
       Calorías 112 (4,7%)		Azúcares 0,4g (0,4%)
       Grasa 7,1g (8,5%)		Grasa saturada 1,3g (5,4%)
       Sal 0,4g (5,6%)			Fibra 0,3g (1%)
       </pre>
      <strong>Ingredientes:</strong><br><br>
      <a href="suscribete.php" class="btn btn-primary">Leer mas..</a>
      
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- /Load Photo in Modal -->	
		</div>	
      </div>
		</div>
      </div>
    <!-- /Portfolio -->


<!-- Contact -->
    <div id="contact">
      <div class="container">
        <div class="row">
		<div class="col-md-6 col-md-offset-4 text-center">
            <h2>Cont&aacute;ctanos</h2>
          </div>
          <div class="col-md-6 col-md-offset-4">
		  <!-- contact form starts -->
            <form action="contactos.php" id="contact-form" class="form-horizontal" method="POST">
			<fieldset>
						    <div class="form-group">
						      <label class="col-sm-2 control-label" for="name">Nombre</label>
						      <div class="col-sm-9">
						        <input type="text"  placeholder="Escriba su nombre" class="form-control" name="name_field" id="name">
						      </div>
						    </div>
                            
						    <div class="form-group">
						      <label class="col-sm-2 control-label" for="email">Correo Electr&oacute;nico </label>
						      <div class="col-sm-9">
						        <input type="text" placeholder="Escriba su correo electr&oacute;nico" class="form-control" name="email_field" id="email">
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="col-sm-2 control-label" for="subject">Asunto</label>
						      <div class="col-sm-9">
						        <input type="text" placeholder="Escriba su asunto" class="form-control" name="subject_field" id="subject">
						      </div>
					 	    </div>
						    <div class="form-group">
						      <label class="col-sm-2 control-label" for="message">Mensaje</label>
						      <div class="col-sm-9">
						        <textarea placeholder="Por favor escriba su mensaje " class="form-control" name="message_field" id="message" rows="3"></textarea>
						      </div>
						    </div>
	              <div class="col-sm-offset-4 col-sm-8">
			            <button type="submit" class="btn btn-success">Enviar</button>
	    			      <button type="reset" class="btn btn-primary">Cancelar</button>
	        			</div>
						</fieldset>
	</form>
				
				<!-- contact form ends -->		
          </div>
        </div>
      </div>
    </div>
    <!-- /Contact -->

  
  <?php include 'footer.php';?>

<!---///////////////////////////////////////////////////////////////////////////////////-->
  
 <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
  <script src="js/jquery.js"></script>
	<script src="js/jquery-scrolltofixed-min.js"></script>
	<script src="js/jquery.vegas.js"></script>
	<script src="js/jquery.mixitup.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/bootstrap.js"></script>
	
<!-- Slideshow Background  -->
	<script>
$.vegas('slideshow', {
  delay:5000,
  backgrounds:[
     { src:'./img/vegetales.jpg', fade:4000 },
	 { src:'./img/ensalada.jpg', fade:4000 },
    { src:'./img/frutas1.jpg', fade:4000 },
	 { src:'./img/ensalada2.jpg', fade:4000 },
   //{ src:'./img/portrait2.jpg', fade:2000 },
   // { src:'./img/portrait3.jpg', fade:2000 },
	// { src:'./img/portrait4.jpg', fade:2000 },
	//   { src:'./img/forest.jpg', fade:2000 }
	   
  ]
})('overlay', {
src:'./img/overlay.png'
});

	</script>
<!-- /Slideshow Background -->

<!-- Mixitup : Grid -->
    <script>
		$(function(){
    $('#Grid').mixitup();
      });
    </script>
<!-- /Mixitup : Grid -->	

    <!-- Custom JavaScript for Smooth Scrolling - Put in a custom JavaScript file to clean this up -->
    <script>
      $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
            || location.hostname == this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });
      });
    </script>
<!-- Navbar -->
<script type="text/javascript">
$(document).ready(function() {
        $('#nav').scrollToFixed();
  });
    </script>
<!-- /Navbar-->

	
 </body>

  
</html>
