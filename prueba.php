<?php
    $destinatario = "openalfa@gmail.com";
    $asunto = "Prueba";
    $mensaje = 
        '<html>
        <body>
        <h1>Mensaje de prueba en formato HTML</h1>
        <p> Esto es un mensaje de prueba</p>
        </body>
        </html>';
    //para el envío en formato HTML 
    $headers = "MIME-Version: 1.0\r\n"; 
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    $headers .= 'From: hperez@hdsconsultoria.com' . "\r\n";
    $headers .= 'Cc: hapgomez@gmail.com' . "\r\n";
    $headers .= 'Reply-To: hapg_22@live.com' . "\r\n";
    $headers .= 'X-Mailer: PHP/' . phpversion();
    mail($destinatario,$asunto,$mensaje,$headers);
?>