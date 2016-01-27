<?php
	//Iniciamos sesion.
	session_start();
	
	//Include archivo conexion a la BBDD.
	include("connection.proc.php");

	$pass_encriptada=md5($_REQUEST['pass']);

	//Preparamos la consulta que intenta encontrar el usuario Y la contraseña introducidos
	$sql = "SELECT * FROM tbl_users WHERE usu_mail='$_REQUEST[mail]' AND usu_password='$pass_encriptada'";
	//echo $sql;
	//ejecutamos la consulta
	$resultado = mysqli_query($con,$sql);

	//Si la consulta devuelve un registro, es que ha encontrado una coincidencia de usuario y contraseña, y por lo tanto, el usuario es correcto, hay que dejarlo pasar
	if(mysqli_num_rows($resultado)==1){
		//extraemos los datos de ese usuario para poder coger el nivel de acceso. no se hace en un bucle ya que, si no hay algún problema gordo, en la base de datos o hay un registro o no hay, no puede haber más de uno
		$datos_usuario=mysqli_fetch_array($resultado);
		//creamos la variable de sesión mail
		$_SESSION['mail']=$datos_usuario['usu_mail'];
		$_SESSION['name']=$datos_usuario['usu_name'];
		$_SESSION['level']=$datos_usuario['usu_level'];

		//redirigimos a la página principal
		header("location: ../main.php");
	} else {
		//como no se ha encontrado la pareja de usuario y contraseña, redirigimos a la página index.php con un mensaje de error
		$_SESSION['error']="Usuario y contraseña incorrectos";
		header("location: ../index.php");
	}




?>