<!DOCTYPE html>
<html>
<head>
	<title>El Chavo y La Chava Animan</title>
	<link  rel="icon"   href="imagenes/Logo.png" type="image/png" />
	<link rel="stylesheet" href="index.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
</head>
<body>
	<main class="contenedor">
		<?php require 'diseño.php';?>
		<div class="contenedor_chava">
			<img src="imagenes/Chava.png" class="Chava">
		</div>
		<div class="contenedor_chavo">
			<img src="imagenes/Chavo.png" class="Chavo">
		</div>
        
		<section class="Formulario_InicioSesion">
		
		    <h4>Iniciar Sesion</h4>
		    <input class="casillas" type="text" name="cedula" id="Cedula" placeholder="Cedula de Identidad"><br>
		    <input class="casillas" type="password" name="clave" id="Clave" placeholder="Clave"><br><br>
		    <button class="boton_InicioSesion"><strong>Acceder</strong></button> 

                </section>
		
	</main>
</body>
</html>
