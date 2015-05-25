<?php

$para      = 'ovela@gruporegio.mx' . ', ';
$para	  .= 'hperez@hdsconsultoria.com';
$titulo    = 'Prueba de correo | Servicio Sendmail | Servidor vps.gruporegio.mx';
$mensaje   = 'Mensaje prueba de correo electronico, enviado desde archivo http://www.gruporegio.mx/test.php, contenido editado via FTP';
$cabeceras = 'From: no-reply@gruporegio.mx' . "\r\n" .
    'Reply-To: socialmedia@gruporegio.mx' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($para, $titulo, $mensaje, $cabeceras);

?>
