<?php 
session_start();
require_once('proc/connection.proc.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css">
	<title>Modificar Perfil</title>
</head>
<body>
	<?php
		$sql = "SELECT * FROM tbl_users WHERE usu_mail = '$_SESSION[mail]'";
		$datos = mysqli_query($con, $sql);
		$tbl_array = mysqli_fetch_array($datos)
	?>

<div id="wrapper_modificar_perfil">
	<div id="form_modificar">
		<form id="form_crear_usuario" action="proc/modificar_perfil.proc.php" method="POST">
			<p>Mail:</p>
			<input style="width: 120px; height: 20px" type="text" disabled name="mail_usuario" value="<?php echo $tbl_array['usu_mail'] ?>" size="15" maxlength="50">
			<p>Nuevo Password:</p>
			<input style="width: 120px; height: 17px" type="text" disabled name="pass_usuario" value="<?php echo $tbl_array['usu_password'] ?>" size="15" maxlength="25">
			<p>Nombre</p>
			<p><input style="width: 120px; height: 17px" type="text" name="nombre_usuario" value="<?php echo $tbl_array['usu_name'] ?>" size="15" maxlength="25"></p>
			<p>Apellidos:</p>
			<p><input style="width: 120px; height: 17px" type="text" name="apellidos_usuario" value="<?php echo $tbl_array['usu_surname'] ?>"s size="15" maxlength="25"></p>
			<p>Telefono 1:</p>
			<p><input style="width: 120px; height: 17px" type="text" name="telef1_usuario" value="<?php echo $tbl_array['usu_phone'] ?>" size="15" maxlength="25"></p>
			<p>Telefono 2:</p>
			<p><input style="width: 120px; height: 17px" type="text" name="telef2_usuario" value="<?php echo $tbl_array['usu_phone2'] ?>" size="15" maxlength="25"></p>
			<p>Código Postal:</p>
			<p><input style="width: 120px; height: 17px" type="text" name="cp_usuario" value="<?php echo $tbl_array['usu_zipcode'] ?>" size="15" maxlength="25"></p>
			<p>Ciudad:</p>
			<p><input style="width: 120px; height: 17px" type="text" name="ciudad_usuario" value="<?php echo $tbl_array['usu_city'] ?>" size="15" maxlength="25"></p>
			<p><input style="width: 122px; height: 25px" type="submit" value="Modificar"></p>
		</form>
		<div id="link_volver">
			<p><a href="main.php">Volver</a></p>
		</div>
	</div>
</div>
</body>
</html>