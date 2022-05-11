<?php

    $newNombre = $_POST['nombre'];
    $newApellidos = $_POST['apellidos'];
    $newTelefono = $_POST['telefono'];
    $newCorreo = $_POST['correo'];

    $newUsuario = $_POST['usuario'];
    $newContra = $_POST['contra'];

    $doc = new DOMDocument();
    $doc->load('Reservas.xml');

    $usuarios = $doc->getElementsByTagName('usuarios')->item(0);
    $usuario = $doc->createElement('usuario');


    $usuario_login = $doc-> createElement('login',$newUsuario);
    $usuario_login_attr = $doc->createAttribute('tipousuario');
    $usuario_login_attr->value = 'cliente';
    
    $usuario_contra = $doc-> createElement('contra',$newContra);
    $usuario_nombre = $doc-> createElement('nombre',$newNombre);
    $usuario_apellidos = $doc-> createElement('apellidos',$newApellidos);
    $usuario_telefono = $doc-> createElement('telefono',$newTelefono);
    $usuario_correo = $doc-> createElement('correo',$newCorreo);

    $usuario_login->appendChild($usuario_login_attr);
    $usuario->appendChild($usuario_login);
    $usuario->appendChild($usuario_contra);
    $usuario->appendChild($usuario_nombre);
    $usuario->appendChild($usuario_apellidos);
    $usuario->appendChild($usuario_telefono);
    $usuario->appendChild($usuario_correo);
    
    $usuarios->appendChild($usuario);
    

    $doc->save('Reservas.xml');
    header("Location: https://mballesterosv.ieslavereda.es/ejercicios/Web/contacto.html");

    exit;
?>