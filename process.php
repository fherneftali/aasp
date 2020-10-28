<?php
    //Correo destino
    $correoDest = "fherneftali.fj@gmail.com";
    
    //Texto emisor; sólo lo leerá quien reciba el contenido.
    $textoEmisor = "MIME-VERSION: 1.0\r\n";
    $textoEmisor .= "Content-type: text/html; charset=UTF-8\r\n";
    $textoEmisor .= "From: Formulario creado por FherVzla";

    //Recopilacion de los datos via POST
    $nombre = strip_tags($_POST['name']);
    $correo = strip_tags($_POST['email']);
    $telefono = strip_tags($_POST['phone']);
    $mensaje = strip_tags($_POST['message']);
    $fecha = time();
    $fechaFormateada = date("j/n/Y", $fecha);


    //Headers del correo
    $headers = 'From: ' . $correo . "\r\n".
                'Reply-To: ' . $correoDest. "\r\n".
                'X-Mailer: PHP/' . phpversion() .
                'MIME-Version: 1.0\r\n'.
                'Content-type: text/html; charset=UTF-8\r\n';

    //Formato del asunto del correo
    $asunto = "Contacto WEBAASP_$nombre";

    //Formato del cuerpo del correo
    $cuerpo = "<b>Enviado por:</b> " . $nombre . " a las " . $fechaFormateada . "";
    $cuerpo = "<b>Telefono de contacto:</b> " . $telefono . "";
    $cuerpo = "<b>E-mail:</b> " . $correo . "";
    $cuerpo = "<b>Mensaje:</b> " . $mensaje;

    //Envio del mensaje
    mail($correoDest, $asunto, $cuerpo, $textoEmisor);
 ?>        