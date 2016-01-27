<?php
	//iniciamos sesión - SIEMPRE TIENE QUE ESTAR EN LA PRIMERA LÍNEA
	session_start();
?>
<!DOCTYPE html>
<html lang="es">
	<head>
	    <meta charset="utf-8" />
	    <title></title>
	    <link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<?php
		//AQUIIIIIIIIIIIIIIIIIIIIIIIIIII INVERTIIIIIIIIIIR EL ISSET CUANDO TENGAMOS SESSIONES WORKING!
		if(!isset($_SESSION['mail'])){
			include("proc/connection.proc.php");
		?>
	        <header id="header_main">
	        	<button onclick="window.location.href='crear_contacto.php'">+ Añadir Contacto</button>
	        	<button onclick="window.location.href='proc/logout.proc.php'">Cerrar Sesión</button>
	        	<button onclick="window.location.href='modificar_perfil.php'">Modificar Perfil</button>
	        </header>
	        <section class="cuerpo_section">
		        <!-- ARTICLE DE LISTA DE CONTACTOS -->
			   	<article>
			    	<h1>Lista de contactos:</h1>
			    </article>
				<!-- ARTICLE DE MAPA DE CADA CONTACTO -->
			    <article>
			    	<h1>Información del contacto:</h1>
			    </article>
		    </section>

	        <footer>
	        	Derechos reservados a Carlos y Daniel. DAW-2
	        </footer>
	    <?php
	    } else {
	    	$_SESSION['error']="No has iniciado sesion todavía. Si no tienes una cuenta prueba a registrarte.";
			header("location: index.php");
	    }
        ?>
	</body>
</html>