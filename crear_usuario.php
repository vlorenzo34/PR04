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
		<form id="form_crear_usuario" action="crear_usuario_proc.php" method="POST" onsubmit="return validaFormulario();">
			<p>Mail:</p>
			<p><input id="val_mail" style="width: 120px; height: 20px" type="text" name="mail_usuario" size="15" maxlength="50"></p>
			<span id="error_11" class="error"></span>
			<span id="error_111" class="error"></span>
			<p>Password:</p>
			<p><input style="width: 120px; height: 17px" type="text" name="pass_usuario" size="15" maxlength="25"></p>
			<p>Nombre:</p>
			<p><input style="width: 120px; height: 17px" type="text" name="nombre_usuario" size="15" maxlength="25"></p>
			<p>Apellidos:</p>
			<p><input style="width: 120px; height: 17px" type="text" name="apellidos_usuario" size="15" maxlength="25"></p>
			<p>Telefono 1:</p>
			<p><input style="width: 120px; height: 17px" type="text" name="telef1_usuario" size="15" maxlength="25"></p>
			<p>Telefono 2:</p>
			<p><input style="width: 120px; height: 17px" type="text" name="telef2_usuario" size="15" maxlength="25"></p>
			<p>Código Postal:</p>
			<p><input style="width: 120px; height: 17px" type="text" name="cp_usuario" size="15" maxlength="25"></p>
			<p>Ciudad:</p>
			<p><input style="width: 120px; height: 17px" type="text" name="cp_usuario" size="15" maxlength="25"></p>
			<p><input style="width: 122px; height: 25px" type="submit" value="Registrare!"></p>
		</form>
		<div id="link_volver">
			<p><a href="index.php">Volver</a></p>
		</div>
	</div>
</div>
</body>
</html>