<?php

$mysqli = new mysqli('localhost','root','','u209033975_hega');

if($mysqli->connect_error){

	die ('error en la conexion' . $mysqli->connect_error);
}





?>