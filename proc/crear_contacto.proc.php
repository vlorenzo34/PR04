<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crear contacto</title>
</head>
<body>
	<?php 
	require_once('connection.proc.php');

	$cont_name = $_REQUEST['nombre_contacto'];
	$cont_surname = $_REQUEST['apellidos_contacto'];
	$cont_tel1 = $_REQUEST['telef1_contacto'];
	$cont_tel2 = $_REQUEST['telef2_contacto'];
	$cont_mail = $_REQUEST['mail_contacto'];
	$cont_lat_1 = $_REQUEST['x_primera'];
	$cont_lon_1 = $_REQUEST['y_primera'];
	$cont_lat_2 = $_REQUEST['x_segunda'];
	$cont_lon_2 = $_REQUEST['y_segunda'];
	$cont_text = $_REQUEST['comentarios'];

	$sql = "INSERT INTO `tbl_contacts` (`con_name`, `con_surname`, `con_phone`, `con_phone2`, `con_mail`, `con_lat_home`, `con_len_home`, `con_lat_other`, `con_len_other`, `con_text`) VALUES ('$cont_name','$cont_surname','$cont_tel1','$cont_tel2', '$cont_mail', '$cont_lat_1', '$cont_lon_1', '$cont_lat_2', '$cont_lon_2', '$cont_text')";

	$datos = mysqli_query($con,$sql);

	if (mysqli_affected_rows($con) == 1){
				echo "<p>Se ha registrado correctamente</p>";
				echo "<a href='../main.php'>Volver</a>";
			} elseif(mysqli_affected_rows($con)==0){
				echo "No se ha podido añadir el usuario";
			} else {
				echo "Error inesperado";
	}
	 ?>
</body>
</html>