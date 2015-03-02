<?php  
session_start();
$usuario = $_SESSION["email"];
?>

<!DOCTYPE html>
<html lang="en">
 

<?php include 'head.php';?>

<body>

<?php include 'menu.php';?>


 <section id="Content" role="main">
          <div class="full-width section-emphasis-1 page-header">
          <div class="container">
              <header class="row">
                  <div class="col-md-12">
                      <h1 class="strong-header pull-left">
                          Mi Cuenta
                      </h1>
                      <!-- BREADCRUMBS -->
                      <ul class="breadcrumbs list-inline pull-right">
                          <li><a href="index.php">Inicio</a></li><!--
                         <li><a href="03-shop-products.html">xXxShopxXx</a></li> --><!--
                          --><li>Mi Cuenta</li>
                      </ul>
                      <!-- !BREADCRUMBS -->
                  </div>
              </header>
          </div>
      </div><!-- !full-width -->
      <div class="container">
          <!-- !FULL WIDTH -->
          <!-- !SECTION EMPHASIS 1 -->
<?php
if(!isset($_SESSION['userid']))
{
    if(isset($_POST['login']))
    {
        if(verificar_login($_POST['user'],$_POST['password'],$result) == 1)
        {
            $_SESSION['userid'] = $result->idusuario;
            header("location:index.php");
        }
        else
        {
            echo '<div class="error">Su usuario es incorrecto, intente nuevamente.</div>';
        }
    }
?>
          <div class="row">
              <div class="col-md-6 space-right-20">
                  <section class="login element-emphasis-strong">
                      <h2 class="strong-header large-header">
                          Iniciar Sesi&oacute;n
                      </h2>                     
                      <form role="form" action="validarlogin.php" method="post" class="" data-show-errors="true" data-hide-form="false">
                          
                              <label>Correo Electr&oacute;nico</label>
                              <input type="email" class="form-control" id="email" name="email" autofocus required>
                          
                          
                              <label>Contrase&ntilde;a</label>
                              <input type="password" class="form-control" id="password" name="contrasena" autofocus required ><br></br>
                          
	                          
                          	<input type="submit" name="entrar" class="btn btn-primary pull-left" value="Entrar">
                           	<!--<a href="perfil.php" class="btn btn-primary pull-left"> Entrar </a>-->
                            
                          	<input type="submit" name="enviar_clave" class="btn btn-link pull-right"value="Olvid&oacute; su contrase&ntilde;a?"> 
                          <div class="clearfix"></div>
                      </form>
                  </section>

<?php
} else {
    echo 'Su usuario ingreso correctamente.';
    echo '<a href="logout.php">Logout</a>';
}
?>
              </div>
              <div class="col-md-6 space-left-20">
                  <section class="element-emphasis-weak">
                      <h2 class="strong-header large-header">
                          Clientes nuevos
                      </h2>
                      <p>
                          Al crear una cuenta en nuestro portal, usted acceder&aacute; al asesoramiento personalizado que Come &amp; Disfruta les ofrece de acuerdo a su perfil y a sus necesidades.  Adem&aacute;s podr&aacute; llevar&aacute; un control de su alimentaci&oacute;n y m&aacute;s.                                                    
                      </p>
                      <br></br>
                      <br></br>
                      <a href="registrarse.php" class="btn btn-success">
                          Reg&iacute;strate
                      </a>
                  </section>
              </div>
          </div>
      </div>
  </section>



<br></br>
<?php include 'footer.php';?>


</body>
</html>