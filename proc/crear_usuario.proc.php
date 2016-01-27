<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crear Usuario</title>
</head>
<body>
	<?php 
	require_once('connection.proc.php');

	$user_mail = $_REQUEST['mail_usuario'];
	$user_pass = md5($_REQUEST['pass_usuario']);
	$user_name = $_REQUEST['nombre_usuario'];
	$user_surname = $_REQUEST['apellidos_usuario'];
	$user_tel1 = $_REQUEST['telef1_usuario'];
	$user_tel2 = $_REQUEST['telef2_usuario'];
	$user_cp = $_REQUEST['cp_usuario'];
	$user_city = $_REQUEST['ciudad_usuario'];
	$user_level = 'user';

	$sql = "INSERT INTO `tbl_users` (`usu_mail`, `usu_password`, `usu_name`, `usu_surname`, `usu_phone`, `usu_phone2`, `usu_zipcode`, `usu_city`, `usu_level`) VALUES ('$user_mail','$user_pass','$user_name','$user_surname', '$user_tel1', '$user_tel2', '$user_cp', '$user_city', '$user_level')";

	$datos = mysqli_query($con,$sql);

	if (mysqli_affected_rows($con) == 1){
				echo "<p>Se ha registrado correctamente</p>";
				echo "<a href='../index.php'>Volver</a>";
			} elseif(mysqli_affected_rows($con)==0){
				echo "No se ha podido añadir el usuario";
			} else {
				echo "Error inesperado";
	}
	?>
</body>
</html>