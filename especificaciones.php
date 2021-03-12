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
    
    
    </form>
    <ul class="nav pull-right">
    <li>Bienvenido <strong><?php echo $_SESSION['user'];?></strong></li>
	</ul>
     
    <a href="iot.php" class="btn btn-default">Menú</a>
    <a href="home.php" class="btn btn-default">Historial de Datos</a>
    <a href="graficatemperatura.php" class="btn btn-default">Grafica Temperatura</a>
    <a href="graficahumedad.php" class="btn btn-default">Grafica Humedad</a>
    <a href="backup.php" class="btn btn-default" target="_blank">Hacer Copia De Seguridad</a>
    <a href="desconectar.php" class="btn btn-default">Cerrar Sesión</a>
    	
            
   
    </div><!-- /.nav-collapse -->
  </div>
  </div><!-- /navbar-inner -->
</div>




<?php
require 'conexion.php';

$where = "";

if(!empty($_POST)){
		$valor = $_POST['campo'];
		if(!empty($valor)){
			$where = "WHERE id_nodo LIKE '$valor%' or alias_nodo LIKE '$valor%' ";//multiple busqueda
		}
	}
	

$sql = "SELECT * FROM nodo $where";
$resultado = $mysqli->query($sql);


?>


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
		
		
		
		
		
		
		
	</head>

<body>
	<div class="container">
		<div class="row">
			<h2 style="text-align:center">IOT UCEVA - DATOS </h2>
		</div>
		
		<div class="row">
			<a href="nuevo.php" class="btn btn-primary">funcion</a>
				
				<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
					<b>Nombre: </b><input type="text" id="campo" name="campo" />
					<input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info" />
				</form>
		</div>
	
		<br>
		<div class="row table-responsive">
			<table  class="table table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>NOMBRE</th>
						<th>SERIAL</th>
						<th>MAC</th>
						
					</tr>
				</thead>

			<tbody>
				<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
				
			<tr>
				
                <td><?php echo $row['id_nodo'];?> </td>
				<td><?php echo $row['alias_nodo']; ?> </td>
				<td><?php echo $row['xbeems']; ?> </td>
				<td><?php echo $row['xbeels']; ?> </td>
				
				
				<td></td>
			</tr>
			<?php } ?>
			</tbody>
		</table>
    </div>
</div>

<!-- Modal -->
		
		
		<script>
			$('#confirm-delete').on('show.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
				
				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
		</script>	
		
	</body>
</html>