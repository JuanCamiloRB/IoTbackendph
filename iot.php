<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
  header("Location:index.php");
}elseif ($_SESSION['rol']==2) {
  header("Location:indexusuario.php");
}
?>

<html lang="es">
  <head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

<title>IOT UCEVA</title>
    
<body data-offset="40" background="images/.jpg" style="background-attachment: fixed">

<header class="header">
<div class="row">

  <?php
  include("include/cabecera.php");
  ?>
</div>
</header>

  <!-- Navbar
    ================================================== -->

<div class="navbar">
  <div class="navbar-inner">
  <div class="container">
    <div class="nav-collapse">
    <ul class="nav">
      <li class=""><a href="#">ADMINISTRADOR DEL SITIO</a></li>
       
  
    </ul>
    <form action="#" class="navbar-search form-inline" style="margin-top:6px">
    
    </form>
    <ul class="nav pull-right">
    <li><a href="">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a></li>
        <li><a href="desconectar.php"> Cerrar Cesión </a></li>       
    </ul>
    </div><!-- /.nav-collapse -->
  </div>
  </div><!-- /navbar-inner -->
</div>

<br>
<br>
<center>

    
<a href="home.php" class="btn btn-default">Visualización de datos</a>
<a href="backup.php" class="btn btn-default">Copia de seguridad</a>

    
    
</center>
    
<br />
    <br />
      <br />
    <center>
    <font style="font-size:25px">Aplicativo para la recolección de datos del cultivo de maíz ubicado en la granja agrológica de la Uceva. </font>
    </center>


	
</body>
</html>