<?php
	session_start();
	$user=$_SESSION['login'];
	$xml = simplexml_load_file("Reservas.xml");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/css.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,400;1,500;1,700&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Cardo&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

	<title>Asador-Mario</title>
</head>
<body>
	<div class="cabecera">
		<img class="upperlogo" width="250" height="80" src="imagenes/logo.png">
		<div class="nav">
		<ul>
			<li> <a href="index.html">INICIO</a> </li>
			<li><a href="carta.html">CARTA</a></li>
			<li><a href="cartaVinos.html">CARTA DE VINOS</a></li>
			<li><a href="sobreNosotros.html">SOBRE NOSOTROS</a></li>
			<li><a href="contacto.html">CONTACTO</a></li>
		</ul>
		</div>
	</div>
	<div class="boxcontacto">
		<div class="mapa">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3078.1016283278354!2d-0.41817948431273216!3d39.512195918074255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd60450967ebd469%3A0x9a3fc4b797f0c3f0!2sAraguaney!5e0!3m2!1ses!2ses!4v1637957471507!5m2!1ses!2ses" width="1705" height="480" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>
		<br>
		<div class="center">
			<div class="bienvenidacabeza">HACER UNA <br>RESERVA</div>
			<div class="bienvenidatexto">
			<ul>
<?php
	foreach ($xml->reservas->reserva as $reserva) {
			$fecha=$reserva->datosreserva->fecha;
			$hora=$reserva->datosreserva->hora;
			$observaciones=$reserva->datosreserva->observaciones;
		?>
		<ul>
			<li> Fecha: <?php echo $fecha; ?></li>
			<li> Hora: <?php echo $hora; ?></li>
			<li> Observaciones: <?php echo $observaciones;?></li>
			<br><br><br><br>
		</ul>
	<?php
	}
?>	
        	</form>
					 <br>
					 <li><a class="colorContacto"><i class="fas fa-map-marker-alt"></i></a></li>
					 <li>Calle Rubert i Villó, 12 46100 Burjassot</li>
					 <br><br>
					 <li><a class="colorContacto"><i class="fas fa-phone-square-alt"></i></a></li>
					 <li>963 902 578 <br>649 379 737</li>
					 <br><br>
					 <li><a href="https://www.facebook.com/restaurante.araguaney/?fref=ts" class="colorContacto"><i class="fab fa-facebook-f"></i></a></li>
					 <li>Facebook Oficial de Araguaney</li>			
				</ul>
			</div>
		<div class="bot">
			<img width="350" height="150" src="imagenes/logo.png">
			<div class="inforestaurante">
				<ul>
					<li>Calle Rubert i Villó, 12 </li>
					<br>
					<li> 46100 Burjassot </li>
					<br>
					<li><a href="tel:+34 963 902 578"style="text-decoration:none">  963 902 578 </a></li>
					<br>
					<li> <a href="tel:+34 649 379 737" style="text-decoration:none"> 649 379 737 </a></li>
					<br>
					<li><a href="https://www.facebook.com/restaurante.araguaney/?fref=ts"><i class="fab fa-facebook-f"></i></a></li>
				</ul>
				</div>
				<div class="politicasContacto">
				<ul>
					<li> <a>Politica de privacidad</a> </li>
					<li>	-</li>
					<li><a>Aviso Legal</a></li>
				</ul>
				</div>
		</div>
	</div>
</body>
</html>