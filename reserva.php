<?php


session_start();
$xml = simplexml_load_file("Reservas.xml");

$newUsuario = $_POST['usuario'];
$newContra = $_POST['contra'];

	

foreach($xml->usuarios->usuario as $usuario){

	if ($usuario->login==$newUsuario && $usuario->contra==$newContra){

	 if ($usuario->login["tipousuario"]== "root") {
	 		$_SESSION['login']=$_POST['usuario'];
	 		header("Location: reservasRoot.php");
	 		exit();
	 	}
	 
	 if ($usuario->login["tipousuario"]== "empleado") {
	 		$_SESSION['login']=$_POST['usuario'];
	 		header("Location: reservasEmpleados.php");
	 		exit();
	 	}
	 

	 if ($usuario->login["tipousuario"]=="cliente") {
	 		$_SESSION['login']=$_POST['usuario'];
	 		header("Location: reservasClientes.php");
	 		exit();
	 	}
	 

	}
}
exit();


?>