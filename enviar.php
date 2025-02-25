<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    // Configura el correo electrónico
    $to = "tucorreo@example.com"; // Cambia esto por tu correo
    $subject = "Nueva solicitud de contacto";
    $body = "Nombre: $nombre\nEmail: $email\nMensaje: $mensaje";
    $headers = "From: $email";

    // Envía el correo
    if (mail($to, $subject, $body, $headers)) {
        echo "Gracias, $nombre. Hemos recibido tu mensaje.";
    } else {
        echo "Hubo un error al enviar tu mensaje. Por favor, inténtalo de nuevo.";
    }
}
?>