<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $destinatario = $_POST["destinatario"];
    $asunto = $_POST["asunto"];
    $mensaje = $_POST["mensaje"];

    // Configurar el correo
    $headers = "From: vmonfort@florida-uni.es" . "\r\n" .
               "Reply-To: vmonfort@florida-uni.es" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Enviar el correo
    if (mail($destinatario, $asunto, $mensaje, $headers)) {
        echo "El correo se envió correctamente.";
    } else {
        echo "Hubo un error al enviar el correo.";
    }
}
?>