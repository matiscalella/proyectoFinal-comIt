<?php
    $to = "matias.scalella@gmail.com";
        
    $checkIn = $_POST["chkInDate"];
    $checkOut = $_POST["chkOutDate"];
    $roomType = $_POST["room"];
    $adults = $_POST["adults"];
    $kids = $_POST["kids"];
    $name = $_POST["fullName1"];
    $mail = $_POST["email1"];
    $phone = $_POST["phone1"];
    
    $formData = "Check In: " . $checkIn . "\nCheck Out: " . $checkOut . "\nHabitación: " . $roomType . "\nCant. de Adultos: " . $adults . "\nCant. de niños: " . $kids . "\nNombre Completo: " . $name . "\nMail: " . $mail . "\nTeléfono de contacto: " . $phone;
    
    mail($to, "Reserva Hotel Ipanema", $formData);
    header("Location:html/thanks-booking.html");
?>