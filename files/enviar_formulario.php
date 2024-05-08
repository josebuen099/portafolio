<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    // Correo electrónico al que se enviará el mensaje
    $destinatario = "jebueno@jdc.edu.co";

    // Asunto del correo electrónico
    $asunto = "Nuevo mensaje desde el formulario de contacto";

    // Construir el cuerpo del mensaje
    $cuerpoMensaje = "Nombre: $nombre\n";
    $cuerpoMensaje .= "Email: $email\n";
    $cuerpoMensaje .= "Mensaje:\n$mensaje";

    // Cabeceras del correo electrónico
    $headers = "From: $nombre <$email>";

    // Enviar el correo electrónico
    mail($destinatario, $asunto, $cuerpoMensaje, $headers);

    // Redirigir de vuelta a la página principal después de enviar el formulario
    header('Location: index.html');
}
?>
