<?php
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    $destino = 'urielcontactopersonal@gmail.com';
    $header = 'De: ' . $nombre . ' ' .$apellido . '\r\n'.
        'Correo: ' . ' ' . $email;
    $envio = mail($destino, $asunto, $mensaje, $header);

    if ($envio == true){
        $respuesta = true;
    }else{
        $respuesta = false;
    }

    echo $respuesta;