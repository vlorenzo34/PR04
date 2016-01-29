<?php 

/*$con = mysqli_connect('mysql.hostinger.es', 'u643215434_admin', '1234567890!', 'u643215434_tacts');

if (!$con) {
	echo "No se ha podido establecer conexión con la base de datos".PHP_EOL;
	exit;
}*/



$con = mysqli_connect('localhost', 'root', '', 'bd_mycontact');

if (!$con) {
	echo "No se ha podido establecer conexión con la base de datos".PHP_EOL;
	exit;
}

?>