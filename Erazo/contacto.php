<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge los datos del formulario
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Configuración del correo
    $to = "tu_correo@example.com";  // Reemplaza con tu dirección de correo
    $subject = "Nuevo mensaje de contacto de $name";
    $body = "Nombre: $name\nCorreo Electrónico: $email\n\nMensaje:\n$message";
    $headers = "From: $email";

    // Envío del correo
    if (mail($to, $subject, $body, $headers)) {
        echo "Mensaje enviado con éxito.";
    } else {
        echo "Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.";
    }
} else {
    echo "Solicitud no válida.";
}
?>
