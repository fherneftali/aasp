<?php
    $nombre = $_POST['name'];
    $mail = $_POST['email'];
    $telefono = $_POST['phone'];
    $msg = $_POST['message'];

    $header = 'From: ' . $mail . " \r\n";
    $header = "X-Mailer: PHP/" . phpversion() . " \r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain";

    $mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
    $mensaje .= "Su e-mail es: " . $mail . " \r\n";
    $mensaje .= "Mensaje: " . $_POST['message'] . " \r\n";
    $mensaje .= "Enviado el " . date('d/m/Y', time());

    $para = 'fherneftali.fj@gmail.com';
    $asunto = 'Mensaje de AASP';

    mail($para, $asunto, utf8_decode($mensaje), $header);

    //header("Location:index.html");

    echo"<script>alert('correo enviado')</script>";
    echo"<script>setTimeout(\"location.href='index.html'\",1000)</script>";
 ?>        