<!DOCTYPE html>
<html lang="en">
 
  <?php include 'head.php';?> 
  
<body>
  

  <?php include 'menu.php';?> 

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
                        <li class="">
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
                        <li class="active">
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
            
     			<h2>¿A qu&eacute; eres alerg&iacute;co?  </h2>   		   
 	</div>
 </div> 	
            <br>
            <br>
            <div class="container-fluid"> 
            <div class="col-lg-6">
            
            <form action="contact" id="contact-form" class="form-horizontal">
  			<div class="form-group">
				<div class="col-lg-12 col-lg-14">
					<label class="col-lg-3 control-label" for="name">Alergias m&aacute;s populares:</label>
						<div class="col-lg-6">
                                                   
    <input type="checkbox" id="myCheck"> Trigo <br> 
    <input type="checkbox" id="myCheck1"> Lactosa o productos l&aacute;cteos <br> 
    <input type="checkbox" id="myCheck2"> Huevos <br> 
	<input type="checkbox" id="myCheck3"> Cacahuetes <br> 
    <input type="checkbox" id="myCheck4"> Frutos secos <br> 
    <input type="checkbox" id="myCheck5"> Soja <br>
    <input type="checkbox" id="myCheck6"> Pescado <br> 
    <input type="checkbox" id="myCheck7"> Mariscos <br>                    
						</div>
				 </div>
            </div>
			</form>
            
            <form action="contact" id="contact-form" class="form-horizontal">
  			<div class="form-group">
				<div class="col-lg-12 col-lg-14">
					<label class="col-lg-3 control-label" for="nombre1">Alergias a Frutas/Vegetales:</label>
						<div class="col-lg-6">
                                                   
    <input type="checkbox" id="myCheck8"> Banano<br> 
    <input type="checkbox" id="myCheck9"> Mel&oacute;n<br> 
    <input type="checkbox" id="myCheck10"> Fresas <br> 
	<input type="checkbox" id="myCheck11"> Pi&ntilde;a<br> 
    <input type="checkbox" id="myCheck12"> Manzana<br> 
    <input type="checkbox" id="myCheck13"> Kiwi<br>
    <input type="checkbox" id="myCheck14"> Bayas<br> 
    <input type="checkbox" id="myCheck15"> Pera<br> 
    <input type="checkbox" id="myCheck16"> Ciruela<br>
    <input type="checkbox" id="myCheck17"> Apio <br> 
	<input type="checkbox" id="myCheck18"> Zanahoria<br> 
    <input type="checkbox" id="myCheck19"> Cebolla<br> 
    <input type="checkbox" id="myCheck20"> Ajo<br>
    <input type="checkbox" id="myCheck21"> Algas<br> 
    <input type="checkbox" id="myCheck22"> Aguacate<br> 
    <input type="checkbox" id="myCheck23"> Puerro<br>                    
						</div>
				 </div>
            </div>
			</form>
            
            <form action="contact" id="contact-form" class="form-horizontal">
  			<div class="form-group">
				<div class="col-lg-12 col-lg-14">
					<label class="col-lg-3 control-label" for="name">Alergias a especies:</label>
						<div class="col-lg-6">
                                                   
    <input type="checkbox" id="myCheck24"> Or&eacute;gano<br> 
    <input type="checkbox" id="myCheck25"> Canela<br> 
                      
						</div>
				 </div>
            </div>
			</form>
            
             <form action="contact" id="contact-form" class="form-horizontal">
  			<div class="form-group">
				<div class="col-lg-12 col-lg-14">
					<label class="col-lg-3 control-label" for="name">Alergias a semillas y otras frutas secas:</label>
						<div class="col-lg-6">
                                                   
    <input type="checkbox" id="myCheck26"> S&eacute;samo<br> 
    <input type="checkbox" id="myCheck27"> Coco<br> 
    <input type="checkbox" id="myCheck28"> Pistachos<br> 
    <input type="checkbox" id="myCheck29"> Pecanas<br> 
    <input type="checkbox" id="myCheck30"> Semillas de girasol<br> 
                      
						</div>
				 </div>
            </div>
			</form>
            
            <form action="contact" id="contact-form" class="form-horizontal">
  			<div class="form-group">
				<div class="col-lg-12 col-lg-14">
					<label class="col-lg-3 control-label" for="nombre">Otras alergias:</label>
						<div class="col-lg-6">
                                                   
    <input type="checkbox" id="myCheck31"> Cacao<br> 
    <input type="checkbox" id="myCheck32"> Aves de corral<br> 
    <input type="checkbox" id="myCheck33"> Cerdo<br> 
    <input type="checkbox" id="myCheck34"> Avena<br> 
    <input type="checkbox" id="myCheck35"> Caf&eacute;<br> 
                      
						</div>
				 </div>
            </div>
			</form>
            
            
</div><!-- border-box  text-center -->
</div><!-- "col-lg-6 -->    
      
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
