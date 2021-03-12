<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
  header("Location:index.php");
}elseif ($_SESSION['rol']==2) {
  header("Location:indexusuario.php");
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>IOT UCEVA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
      

    
  </head>

<div class="container">
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
            
  
    </ul>
    
    
    
    <ul class="nav pull-right">
    <li>Bienvenido <strong><?php echo $_SESSION['user'];?></strong></li>
	</ul>
     
    
      
    <a href="iot.php" class="btn btn-default">Menú</a>
    <a href="home.php" class="btn btn-default">Historial de Datos</a>
   
    <a href="graficahumedad.php" class="btn btn-default">Grafica Humedad</a>
    <a href="backup.php" class="btn btn-default" target="_blank">Hacer Copia De Seguridad</a>
    <a href="desconectar.php" class="btn btn-default">Cerrar Sesión</a>
    
    </div><!-- /.nav-collapse -->
  </div>
  </div><!-- /navbar-inner -->
</div>




<html lang="es">
	<head>
		
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="js/jquery-3.1.1.min.js"></script>
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/bootstrap-theme.css" >		
		<script src="js/bootstrap.min.js"></script>		
		<link rel="stylesheet" href="css/jquery.dataTables.min.css" >
		<script src="js/jquery.dataTables.min.js"></script>
		
	
		
		<script>
			$(document).ready(function(){
				$('#mitabla').DataTable({
				"order": [[1, "asc"]],
				"language":{
				"lengthMenu": "Mostrar _MENU_ registros por pagina",
				"info": "Mostrando pagina _PAGE_ de _PAGES_",
				"infoEmpty": "No hay registros disponibles",
				"infoFiltered": "(filtrada de _MAX_ registros)",
				"loadingRecords": "Cargando...",
				"processing":     "Procesando...",
				"search": "Buscar:",
				"zeroRecords":    "No se encontraron registros coincidentes",
				"paginate": {
					"next":       "Siguiente",
					"previous":   "Anterior"
				},					
					},
					"bProcessing": true,
					"bServerSide": true,
					"sAjaxSource": "nodoprocess.php"
				});	
				});	
		</script> 
        
        
<!--        temperatura-->
        <script type="text/javascript">
            window.onload = function () {
                var dataLength = 0;
                var data = [];
                $.getJSON("data.php", function (result) {
                    dataLength = result.length;
                    for (var i = 0; i < dataLength; i++) {
                        data.push({
                            x: parseInt(result[i].idnodo),
                            y: parseInt(result[i].temperatura)
                        });
                    }
                    ;
                    chart.render();
                });
                var chart = new CanvasJS.Chart("chart", {
                    title: {
                        text: "Temperatura Vs Numero de datos"
                    },
                    axisX: {
                        title: "Valor # de datos",
                    },
                    axisY: {
                        title: "Valores temperatura",
                    },
                    data: [{type: "line", dataPoints: data}],
                });
            }
        </script>
        <script type="text/javascript" src="assets/script/canvasjs.min.js"></script>
        <script type="text/javascript" src="assets/script/jquery-2.2.3.min.js"></script>
        
<!--        temperatura -->
		
		
		
		
		
		
		
	</head>

<body>
	

<div id="chart">
        </div>
        <br />
        <div id="chart1">
        </div>
		
	</body>
</html>