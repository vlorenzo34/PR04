<!-- <?php
	//Iniciamos sesion.
	//session_start();
//require_once('connexion.php');
?> -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/style.css">
		<title>Ejemplo Login</title>
	</head>
	<body>
		<div id="wrapper_login">
			<header>
				<div id="intro_login">
					MyContacts
				</div>
			</header><br/><br/>
			<div id="form_login">
				<form action="login.php" method="POST">
					<p>Email:</p>
					<p><input id="name" style="width: 120px; height: 20px" name="mail" placeholder="ejemplo@gmail.com" type="text"></p>
					<p>Contraseña:</p>
					<p><input id="password" style="width: 70px; height: 20px" name="pass" placeholder="**********" type="password"></p>
					<p><input style="width: 70px; height: 20px" name="submit" type="submit" value=" Login "></p>
				</form>
				<p>No tienes cuenta? <a href="crear_usuario.php">Registrate</a></p>
				<span>
					<?php
						echo "<br/>";
						if(isset($_REQUEST['error'])){
							echo $_REQUEST['error'];
						}
					?>
				</span>
			</div>
		</div>
	</body>
</html>