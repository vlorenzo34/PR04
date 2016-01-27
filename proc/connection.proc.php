<?php 

$con = mysqli_connect('localhost', 'root', '', 'bd_mycontact');

if (!$con) {
	echo "No se ha podido establecer conexión con la base de datos".PHP_EOL;
	exit;
}

?>