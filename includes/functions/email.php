<?php
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    $destino = 'urielcontactopersonal@gmail.com';
    $header = "Enviado desde personal";
    $mensajeComp = "Nombre : {$nombre} Apellido: {$apellido} \n Correo: {$email} \n\n {$mensaje}";
    $envio = mail($destino, $asunto, $mensajeComp, $header);

    if ($envio == true){
        $respuesta = true;
    }else{
        $respuesta = false;
    }

    echo $respuesta;