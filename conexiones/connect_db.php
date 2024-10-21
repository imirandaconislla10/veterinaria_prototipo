<?php


$mysqli = new MySQLi("localhost", "root","", "veterisystem");
if ($mysqli -> connect_errno) {
	die( "Fallo la conexion a MySQL: (" . $mysqli -> mysqli_connect_errno() 
		. ") " . $mysqli -> mysqli_connect_error());
}

?>