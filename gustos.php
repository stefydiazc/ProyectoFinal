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
                        <li class="active">
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
    <br>
<!---///////////////////////////////////////////////////////////////////////////////////-->


<div class="border-box  text-center">
<div class="col-lg-6">
            
     			<h2>¿Qu&eacute; comidas te gustan?</h2>          		   
 	</div>
 </div> 	
            <br>
            <br>
            <div class="container-fluid"> 
            <div class="col-lg-6">
            
            <form action="contact" id="contact-form" class="form-horizontal">
  			<div class="form-group">
				<div class="col-lg-12 col-lg-14">
					<label class="col-lg-3 control-label" for="name">Alimentos:</label>
						<div class="col-lg-6">
                                                   
    <input type="checkbox" id="myCheck">  Sopas <br> 
    <input type="checkbox" id="myCheck1"> Ensaladas <br> 
    <input type="checkbox" id="myCheck2"> Sanduches <br> 
	<input type="checkbox" id="myCheck3"> Carnes <br> 
    <input type="checkbox" id="myCheck4"> Pescado <br> 
    <input type="checkbox" id="myCheck5"> Pollo <br>
    <input type="checkbox" id="myCheck6"> Smoothies <br> 
    <input type="checkbox" id="myCheck7"> Cereales <br> 
    <input type="checkbox" id="myCheck8"> Pancakes <br> 
    <input type="checkbox" id="myCheck9"> Pan <br> 
    <input type="checkbox" id="myCheck10"> Queso <br> 
	<input type="checkbox" id="myCheck11"> T&eacute; <br> 
    <input type="checkbox" id="myCheck12"> Dulces <br> 
    <input type="checkbox" id="myCheck13"> Quinoa <br>
    <input type="checkbox" id="myCheck14"> Cafe <br> 
    <input type="checkbox" id="myCheck15"> Frutas <br>
    <input type="checkbox" id="myCheck16"> Pastas <br> 
    <input type="checkbox" id="myCheck17"> Pizzas <br> 
    <input type="checkbox" id="myCheck18"> Legumbres <br> 
	<input type="checkbox" id="myCheck19"> Helado <br> 
    <input type="checkbox" id="myCheck20"> Sushi <br> 
    <input type="checkbox" id="myCheck21"> Tortas <br>
    <input type="checkbox" id="myCheck22"> Chancho <br> 
    <input type="checkbox" id="myCheck23"> Mariscos <br>
    <input type="checkbox" id="myCheck24"> Vegetales <br> 
    <input type="checkbox" id="myCheck25"> Huevos <br> 
    <input type="checkbox" id="myCheck26"> Frutas <br> 
	<input type="checkbox" id="myCheck27"> Granos secos <br> 
    <input type="checkbox" id="myCheck28"> Yogurt <br> 
    <input type="checkbox" id="myCheck29"> Galletas <br>
    <input type="checkbox" id="myCheck30"> Jugos <br> 
    <input type="checkbox" id="myCheck31"> Leche <br>                   
						</div>
				 </div>
            </div>
			</form>
      
            
</div>
</div>    
<!---///////////////////////////////////////////////////////////////////////////////////-->        
<br>
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