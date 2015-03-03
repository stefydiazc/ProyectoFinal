    <div id="nav">
    <!-- Navigation -->
    <nav class="navbar navbar-new" role="navigation">
   <div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mobilemenu">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  <a href="index.php" class="navbar-brand">Come y Disfruta</a>
  </div>
  <div class="collapse navbar-collapse" id="mobilemenu">
 <?php
       //if($_SESSION['actualmente_ingresado'] == 1){
 ?>

    <ul class="nav navbar-nav navbar-right text-center">
      <li><a href="index.php#top"><i class="service-icon fa fa-home"></i>&nbsp;Inicio</a></li>
        <li><a href="index.php#about"><i class="service-icon fa fa-info"></i>&nbsp;Con&oacute;cenos</a></li>
        <li><a href="index.php#services"><i class="service-icon fa fa-laptop"></i>&nbsp;Tips</a></li>
        <li><a href="index.php#portfolio"><i class="service-icon fa fa-laptop"></i>&nbsp;Nuestras Recetas</a></li>
        <!--<li><a href="" onclick="location.href='logout.php'"><i class="fa fa-user"></i><?php// echo " ".$_SESSION["email"]; ?></a></li>-->
        <li><a href="login.php"><i class="service-icon fa fa-male"></i>&nbsp;Login <?php echo $_SESSION["email"]; ?></a></li>
        <li><a href="index.php#contact"><i class="service-icon fa fa-envelope"></i>&nbsp;Cont&aacute;ctanos</a></li>
    </ul>
  <?php //} else {?> 
    <!--<ul class="nav navbar-nav navbar-right text-center">
      <li><a href="index.php#top"><i class="service-icon fa fa-home"></i>&nbsp;Inicio</a></li>
        <li><a href="index.php#about"><i class="service-icon fa fa-info"></i>&nbsp;Con&oacute;cenos</a></li>
        <li><a href="index.php#services"><i class="service-icon fa fa-laptop"></i>&nbsp;Tips</a></li>
        <li><a href="index.php#portfolio"><i class="service-icon fa fa-laptop"></i>&nbsp;Nuestras Recetas</a></li>
        <li><a href="login.php"><i class="service-icon fa fa-male"></i>&nbsp;Login</a></li>
        <li><a href="index.php#contact"><i class="service-icon fa fa-envelope"></i>&nbsp;Cont&aacute;ctanos</a></li>
    </ul>-->

  </div><!-- /.navbar-collapse -->
  </div>
</nav>
    <!-- /Navigation -->
</div>  
</div>  
