<!DOCTYPE html>
<html>
<head>
    
<?php include("include/cabecera.php"); ?>
	
    <meta charset="utf-8">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
	
</head>

    <title>UCEVA LOGIN</title>
    
<body data-offset="40" background="images/iot.jpg" style="background-size: cover">
<br />


	<center><div class="tit"> <h2 style="color: #fff; ">Inicio de sesión</h2></div></center>

	<div class="Ingreso">

	<table border="0" align="center" valign="middle">
		<tr>
			<td rowspan="2">
				<form action="validar.php" method="post">

					<table border="0">

						<tr>
						<td><label style="font-size: 14pt; color: white"><b>Usuario: </b></label></td>
						<td width=80> 
						<select class="form-control" id="mail" name="mail">
							<option value="camilo">Camilo</option>
							<option value="raul">Raul</option>
							<option value="hernando">Hernando</option>
							
						</select>
						

						</td>
						</tr>
                    

		<tr><td>
			<label style="font-size: 14pt; color: white"><b>Contraseña: </b></label>
		</td>
			<td witdh=80><input style="border-radius:15px;" type="password" name="pass"></td>
		</tr>
		<tr>
            <td>
			
	
			<td width=80 align=center><input class="btn btn-primary" type="submit" value="Aceptar"></td>
		</tr>
                        </table>
                </form>
            </td>
        </tr>
        </table>
        
		
</div>


		
		
		

	
</body>
</html>