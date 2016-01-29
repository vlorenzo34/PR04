<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modificacion de Perfil</title>
</head>
<body>
	<?php

	require_once('connection.proc.php');

	$user_mail = $_REQUEST['mail_usuario'];
	$user_name = $_REQUEST['nombre_usuario'];
	$user_surname = $_REQUEST['apellidos_usuario'];
	$user_tel1 = $_REQUEST['telef1_usuario'];
	$user_tel2 = $_REQUEST['telef2_usuario'];
	$user_cp = $_REQUEST['cp_usuario'];
	$user_city = $_REQUEST['ciudad_usuario'];

	$sql = "UPDATE tbl_users SET usu_name='$user_name', usu_surname='$user_surname', usu_phone='$user_tel1', usu_phone2='$user_tel2', usu_zipcode='$user_cp', usu_city='$user_city' WHERE usu_mail='$user_mail'";

	mysqli_query($con,$sql);

	if(mysqli_affected_rows($con)==1){
				header("Location: ../main.php");
			} elseif(mysqli_affected_rows($con)==0){
				echo "No se ha podido añadir el usuario";
			} else {
				echo "Error inesperado";
	}
	?>
</body>
</html>