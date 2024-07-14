<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$response = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $celcontacto = htmlspecialchars($_POST['celcontacto']);
    $mensaje = htmlspecialchars($_POST['content']);

    $mail = new PHPMailer(true);

    try {
        // Configuración del servidor SMTP
        $mail->isSMTP();
        $mail->Host = 'mail.melodiasunidas.com'; // Reemplaza con tu servidor SMTP
        $mail->SMTPAuth = true;
        $mail->Username = 'contacto@melodiasunidas.com'; // Reemplaza con tu dirección de correo
        $mail->Password = 'c0ntacto2024Mu'; // Reemplaza con tu contraseña
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587; // El puerto SMTP de tu servidor

        // Configuración del correo
        $mail->setFrom($email, $nombre);
        $mail->addAddress('contacto@melodiasunidas.com'); // Reemplaza con el correo del destinatario
        $mail->addReplyTo($email, $nombre);

        $mail->isHTML(true);
        $mail->Subject = "Nuevo mensaje de $nombre desde la web de Melodias Unidas";
        $mail->Body    = "Nombre: $nombre<br>Correo: $email<br>Contacto: $celcontacto<br>Mensaje:<br>$mensaje";
        $mail->AltBody = "Nombre: $nombre\nCorreo: $email\Contacto: $celcontacto\nMensaje:\n$mensaje";

        $mail->send();
        $response['status'] = 'success';
        $response['message'] = 'Correo enviado con éxito';
    } catch (Exception $e) {
        $response['status'] = 'error';
        $response['message'] = "Error al enviar el correo: {$mail->ErrorInfo}";
    }
} else {
    $response['status'] = 'error';
    $response['message'] = 'Método de solicitud no válido.';
}

// Devolver la respuesta como JSON
header('Content-Type: application/json');
echo json_encode($response);
