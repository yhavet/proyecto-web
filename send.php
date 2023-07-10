
<?php
    $admin = "alnzyhav@gmail.com"; //Correo del admin que recibe el mensaje
    //Atributos en los inputs del formulario
    $name = $_POST['name'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $message = $_POST['message'];
    
    $to = $email;
    $subject = "Formulario <nombre del sitio>";
    $txt = "Hola $name,\n\nGracias por contactarnos, le responderemos pronto.";
    $headers = "alnzyhav@gmail.com";
    
    mail($to,$subject,$txt,$headers);
    
    $to = $admin;
    $subject = "$name le ha enviado un mensaje";
    $txt = "Nombre: $name\n\nCorreo: $email\n\nMensaje: $message";
    $headers = "From: alnzyhav@gmail.com";
    
    mail($to,$subject,$txt,$headers);
    
    echo "Emails sent successfully";
?>