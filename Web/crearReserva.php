<?php
	session_start();
	$usuario=$_SESSION['login'];
	$xml=simplexml_load_file("Reservas.xml");

	foreach ($xml->usuarios->usuario as $usuarioPhp) {
		if ($usuarioPhp->login==$usuario) {
			$nombre=$usuarioPhp->nombre;
			$apellidos=$usuarioPhp->apellidos;
			$telefono=$usuarioPhp->telefono;
			$correo=$usuarioPhp->correo;
		}
		
	}

$doc = new DOMDocument();
$doc->load("Reservas.xml");
$reservas= $doc->getElementsByTagName('reservas')->item(0);

$hora=$_POST['hora'];
$fecha=$_POST['fecha'];
$observaciones=$_POST['observaciones'];

$reserva=$doc->createElement('reserva');
$reservas->appendChild($reserva);

$loginPHP=$doc->createElement('login', $usuario);
$reserva->appendChild($loginPHP);

$nombrePHP=$doc->createElement('nombre', $nombre);
$reserva->appendChild($nombrePHP);

$apellidosPHP=$doc->createElement('apellidos', $apellidos);
$reserva->appendChild($apellidosPHP);

$telefonoPHP=$doc->createElement('telefono', $telefono);
$reserva->appendChild($telefonoPHP);

$correoPHP=$doc->createElement('correo', $correo);
$reserva->appendChild($correoPHP);

$datosreservaPHP=$doc->createElement('datosreserva');
$reserva->appendChild($datosreservaPHP);

$fechaPHP=$doc->createElement('fecha',$fecha);
$datosreservaPHP->appendChild($fechaPHP);
$horaPHP=$doc->createElement('hora',$hora);
$datosreservaPHP->appendChild($horaPHP);
$observacionesPHP=$doc->createElement('observaciones',$observaciones);
$datosreservaPHP->appendChild($observacionesPHP);

#    <nombre></nombre>
#    <apellidos></apellidos>
#    <telefono>  </telefono>
#    <email>   </email>
#    <datosreserva>
#        <fecha></fecha>
#        <hora></hora>
#        <observaciones></observaciones>


$doc->save("Reservas.xml");
header("Location: cerrarSesion.php");
exit;

?>