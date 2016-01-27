<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crear usuario</title>
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/script.js"></script>
</head>
<body>
<div id="wrapper_crear_usuario">
	<div id="form_crear">
		<form id="form_crear_usuario" action="proc/crear_usuario.proc.php" method="POST" onsubmit="return validaFormulario();">
			<p>Mail:</p>
			<input id="val_mail" style="width: 120px; height: 20px" type="text" name="mail_usuario" size="15" maxlength="50">
			<span id="error_1" class="error"></span>
			<span id="error_11" class="error"></span>
			<p>Password:</p>
			<input id="val_pass" style="width: 120px; height: 17px" type="password" name="pass_usuario" size="15" maxlength="25">
			<span id="error_2" class="error"></span>
			<p>Nombre</p>
			<p><input id="val_nombre" style="width: 120px; height: 17px" type="text" name="nombre_usuario" size="15" maxlength="25"></p>
			<span id="error_3" class="error"></span>
			<p>Apellidos:</p>
			<p><input id="val_apellidos" style="width: 120px; height: 17px" type="text" name="apellidos_usuario" size="15" maxlength="25"></p>
			<span id="error_4" class="error"></span>
			<p>Telefono 1:</p>
			<p><input id="val_telef" style="width: 120px; height: 17px" type="text" name="telef1_usuario" size="15" maxlength="25"></p>
			<span id="error_5" class="error"></span>
			<span id="error_55" class="error"></span>
			<p>Telefono 2:</p>
			<p><input id="val_telef" style="width: 120px; height: 17px" type="text" name="telef2_usuario" size="15" maxlength="25"></p>
			<p>Código Postal:</p>
			<p><input id="val_cp" style="width: 120px; height: 17px" type="text" name="cp_usuario" size="15" maxlength="25"></p>
			<span id="error_6" class="error"></span>
			<span id="error_66" class="error"></span>
			<p>Ciudad:</p>
			<p><input id="val_ciudad" style="width: 120px; height: 17px" type="text" name="ciudad_usuario" size="15" maxlength="25"></p>
			<span id="error_7" class="error"></span>
			<p><input style="width: 122px; height: 25px" type="submit" value="Registrare!"></p>
		</form>
		<div id="link_volver">
			<p><a href="index.php">Volver</a></p>
		</div>
	</div>
</div>
</body>
</html>