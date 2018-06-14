<?php 
    $to= "matias.scalella@gmail.com";

    $nombre = $_POST["fullName"];
    $telefono = $_POST["phone"];
    $mail = $_POST["email"];
    $suscripto = $_POST["suscribe"];
    $fecha = $_POST["date"];
    $mensaje = $_POST["message"];
    
    $formData = "Nombre: " . $nombre . "\nTeléfono: " . $telefono . "\nMail: " . $mail . "\nSuscripto al newsletter: " . $suscripto . "\nFecha de posible visita: " . $fecha . "\nMensaje: " . $mensaje;
    
    mail($to, "Contacto Hotel Ipanema", $formData);
    header("Location:resources/html/thanks.html");
?>