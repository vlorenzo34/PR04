<?php
	//iniciamos sesión - SIEMPRE TIENE QUE ESTAR EN LA PRIMERA LÍNEA
	session_start();
	include("proc/connection.proc.php");
?>
<!DOCTYPE html>
<html lang="es">
	<head>
	    <meta charset="utf-8"/>
	    <title></title>
	    <link rel="stylesheet" href="css/style_main.css">
	    <script type="text/javascript" src="js/script_main.js"></script>
	</head>
	<body>
		<?php
		//AQUIIIIIIIIIIIIIIIIIIIIIIIIIII INVERTIIIIIIIIIIR EL ISSET CUANDO TENGAMOS SESSIONES WORKING!
		if(isset($_SESSION['mail'])){
			include("proc/connection.proc.php");
		?>
	        <header id="header_main">
	        	<a href="crear_contacto.php"><img id="anadir_contacto" src="img/anadir_contacto.png" alt="anadir"></a>
	        	<a href="proc/logout.proc.php"><img id="cer_perf" src="img/cerrar_sesion.jpg" alt="cer_ses"></a>
	        	<a href="modificar_perfil.php"><img id="mod_perf" src="img/modificar_perfil_contacto.png" alt="mod_perf"></a>
	        	<br/><br/><br/><br/><div id="usu_nombre">Usuario: <?php echo utf8_encode($_SESSION['name']); ?></div><br/>
	        </header>

	        <section class="contenedor_central">
		    	<section class="contactos">
		    		<h1 id="menu_contactos">Contactos:</h1>
		    		<?php
		    		//CONSULTA QUE BUSCARA LOS CONTACTOS PARA LISTARLOS POSTERIORMENTE.
		    		$sql_contactos="SELECT * FROM tbl_contacts WHERE tbl_contacts.usu_mail='$_SESSION[mail]'";
		    		$datos_contactos = mysqli_query($con,$sql_contactos);

		    		if(mysqli_num_rows($datos_contactos)>0){
		    			while($contacto=mysqli_fetch_array($datos_contactos)){
		    		?>
		    				<section class="contacto">
		    					<article>
		    						<header>
		    							<?php echo "<h1 id='tit_con'>".utf8_encode($contacto['con_name']) . " " . utf8_encode($contacto['con_surname'])."</h1>"?>
		    						</header>

		    							<?php
		    							if(($contacto['usu_mail']==$_SESSION['mail']) || ($_SESSION['level']=="admin" || ($_SESSION['level']=="root"))){
												echo "<a href='modificar_contacto.php?con_id=".$contacto['con_id']."'>Modificar</a> - <a href='eliminar_contacto.php?con_id=".$contacto['con_id']."'>Eliminar</a>";
										}
										?>
										<br/><br/>
		    						<footer>
		    							<!-- EN EL FOOTER CARGAR BOTON QUE RELLENE EL SECTION INFO_CONTACTOS (LADO DERECHO)-->
		    							<!--<button onclick="rellenarInfoCon(<?php/* echo $contacto['con_id'] . ', ' . $contacto['con_mail'] . ', ' . $contacto['con_phone'] . ', ' . $contacto['con_phone2'] . ', ' . $contacto['con_lat_home'] . ', ' . $contacto['con_len_home'] . ', ' . $contacto['con_lat_other'] . ', ' . $contacto['con_len_other'] . ', ' . $contacto['con_text'] . ', ' . $contacto['con_name'] . ', ' . $contacto['con_surname'];*/ ?>)">+ Información</button>-->
		    							<button onclick="window.location.href='main.php?con_id=<?php echo $contacto["con_id"] ?>'">+ Información</button>
		    							<br/><br/>
		    						</footer>
		    					</article>
		    				</section>
		    		<?php
		    			}//end while($actividad=mysqli_fetch_array($datos_actividades)){
		    		} else {
		    			?>
		    			<section class="contacto">
	    					<article>
	    						<button onclick="window.location.href='crear_contacto.php'">+ Añadir Contacto</button>
	    					</article>
		    			</section>
		    		<?php

		    		}//end if(mysqli_num_rows($datos_actividades>0)){

		    		?>
		    	</section>
		    	<section class="info_contactos">
		    		<h1 id="menu_info_contactos">Información de los contactos:</h1>
		    		<section class="muestra_contenido_contacto">
	    			<?php 
	    				if(isset($_REQUEST['con_id'])){
							//echo $_REQUEST['con_id'];
							$sql_info_contacto="SELECT * FROM tbl_contacts WHERE tbl_contacts.con_id='$_REQUEST[con_id]'";
		    				$datos_con = mysqli_query($con,$sql_info_contacto);
		    		?>
		    			<section>
		    				<form name='info_contacto'>
		    				<?php
			    				while($info=mysqli_fetch_array($datos_con)){
			    					echo "Nombre y Apellidos:<br/>";
			    					echo '<input type="text" id="name_form" value="' . $info["con_name"] .' '. $info["con_surname"] . '" disabled><br/><br/>';
			    					echo "Teléfono 1:<br/>";
			    					echo '<input type="text" id="phone_form" value="' . $info["con_phone"] . '" disabled><br/><br/>';
			    					echo "Teléfono 2:<br/>";
			    					echo '<input type="text" id="phone2_form" value="' . $info["con_phone2"] . '" disabled><br/><br/>';
			    					echo "Mail:<br/>";
			    					echo '<input type="text" id="mail_form" value="' . $info["con_mail"] . '" disabled><br/><br/>';
			    					echo "Descripción:<br/>";
			    					echo '<input type="text" id="mail_form" value="' . $info["con_text"] . '" disabled><br/><br/>';
								}
			    			?>
		    				</form>
		    			</section>
		    			<h1>Ubicación 1:</h1>
			    		<div id="map"></div>
			    		<h1>Ubicación 2:</h1>
			    		<div id="map2"></div>
		    		<?php
						} else {
	    			?>
	    				<section><!-- SECTION PARA EL FORMULARIO -->
	    					<form name="info_contacto">
			    				Nombre y Apellidos:<br/>
			    				<input type="text" id="name_form" disabled><br/><br/>
			    				Teléfono 1:<br/>
			    				<input type="text" name="phone_form" disabled><br/><br/>
			    				Teléfono 2:<br/>
			    				<input type="text" name="phone2_form" disabled><br/><br/>
			    				Mail:<br/>
			    				<input type="mail" name="mail_form" disabled><br/><br/>
			    				Descripción:<br/>
			    				<input type="text" name="text_form" disabled><br/><br/>
			    				
			    			</form>
			    			<h1>Ubicación 1:</h1>
			    			<div id="map"></div>
				    		<h1>Ubicación 2:</h1>
				    		<div id="map2"></div>
			    		</section>
	    			
				    		
		    		<?php
	    				}
	    			?>
	    			</section>
		    	</section>
		    </section>
	        <footer id="pie">
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