<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
	<meta charset="UTF-8">
	<title>Registra un contacto!</title>
	<link rel="stylesheet" href="css/style.css">
	<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="js/script.js"></script>
</head>
<body  onload="initialize(); initialize2()">

		<?php
			$sql = "SELECT * FROM tbl_contacts WHERE con_id = '$_REQUEST[con_id]'";
			$datos = mysqli_query($con, $sql);
			$tbl_array = mysqli_fetch_array($datos)
		?>

	<div id="wrapper_crear_contacto">
		<form id="form_crear_contacto" action="proc/modificar_contacto.proc.php" method="GET">
			<div id="form_contenido">
			<p>Nombre:</p>
			<p><input id="val_nombre" value="<?php echo $tbl_array['con_name'] ?>" style="width: 120px; height: 17px" type="text" name="nombre_contacto" size="15" maxlength="25"></p>
			<p>Apellidos:</p>
			<p><input id="val_apellidos" value="<?php echo $tbl_array['con_surname'] ?>" style="width: 120px; height: 17px" type="text" name="apellidos_contacto" size="15" maxlength="25"></p>
			<p>Mail:</p>
			<input id="val_mail" value="<?php echo $tbl_array['con_mail'] ?>" style="width: 120px; height: 20px" type="text" name="mail_contacto" size="15" maxlength="50">
			<p>Telefono 1:</p>
			<p><input id="val_telef" style="width: 120px; height: 17px" type="text" name="telef1_contacto" size="15" maxlength="25"></p>
			<p>Telefono 2:</p>
			<p><input id="val_telef" style="width: 120px; height: 17px" type="text" name="telef2_contacto" size="15" maxlength="25"></p>
			<p>Casa</p>
			Latitud: <input disabled style="width: 60px; height: 17px" type="text" id="x" name="x_primera" /> Longitud: <input disabled style="width: 60px; height: 17px" type="text" id="y" name="y_primera"/>
			<br/>
			<p>Otra</p>
			Latitud: <input disabled style="width: 60px; height: 17px" type="text" id="x2" name="x_segunda" /> Longitud: <input disabled style="width: 60px; height: 17px" type="text" id="y2" name="y_segunda"/>
			<p>Código Postal:</p>
			<p><input id="val_cp" style="width: 120px; height: 17px" type="text" name="cp_contacto" size="15" maxlength="25"></p>
			<textarea name="comentarios" rows="5" cols="40">Comentarios</textarea>
			<p><input style="width: 122px; height: 25px" type="submit" value="Añadir"></p>
			<br/>
			<div id="link_volver">
				<p><a href="main.php">Volver</a></p>
			</div>
			</div>
		</form>
		<div id="zona_mapa1">
					<div>
					      Dirección de casa: <input id="address" type="textbox" value="Barcelona, Cataluña" />
					      <br/>
					      <br/>
					      <input type="button" value="Localizar" onclick="codeAddress()">
					</div>
					<br/>
					<div id="map_canvas"></div>
		</div>
		<div id="zona_mapa2">
					<div>
						Otra dirección: <input id="address2" type="textbox" value="Barcelona, Cataluña" />
						<br/>
						<br/>
						<input type="button" value="Localizar" onclick="codeAddress2()">
					</div>
					<br/>
					<div id="map_canvas2"></div>
		</div>
		</div>
</div>
</body>
</html>