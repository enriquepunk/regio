<?php
	$fecha=date("Y-m-d H:i:s");
		$mensaje='
			<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
				<html lang="es">
					<head>
    					<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    					<meta name="viewport" content="initial-scale=1.0">  
    					<meta name="format-detection" content="telephone=no"> 
    					<title>:: Nuevo Prospecto desde tu sitio Web ::</title>
    					<style type="text/css">
							.ReadMsgBody 
							{	 
								width: 100%; background-color: #fbfbfb;
							}
        					.ExternalClass 
							{
								width: 100%; background-color: #fbfbfb;
							}
	 		 			    .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div 
							{	
								line-height:100%;
							}
        					body 
							{
								-webkit-text-size-adjust:none; 
								-ms-text-size-adjust:none;
							}
       		 				body 
							{
								margin:0; 
								padding:0;
							}
        					table 
							{
								border-spacing:0;
							}
        					table td 
							{
								border-collapse:collapse;
							}
        					.yshortcuts a 
							{
								border-bottom: none !important;
							}
        					@media screen and (max-width: 600px) 
							{
            					table[class="container"] 
								{
                					width: 95% !important;
            					}
        					}
       					 	@media screen and (max-width: 480px) 
							{
            					td[class="container-padding"] 
								{
               			 			padding-left: 12px !important;
                					padding-right: 12px !important;
            					}
         					}
    					</style>
					</head>
					<body style="margin:0; padding:10px 0;" bgcolor="#fbfbfb" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
						<br>
						<table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0" bgcolor="#fbfbfb">
  							<tr>
    							<td align="center" valign="top" bgcolor="#fbfbfb" style="background-color: #fbfbfb;">
	      							<table border="0" width="600" cellpadding="0" cellspacing="0" class="container" bgcolor="#ffffff">
        								<tr>
          									<td class="container-padding" bgcolor="#ffffff" style="background-color: #ffffff; padding-left: 30px; padding-right: 30px; font-size: 13px; line-height: 17px; font-family: tahoma; color: #333;  border-bottom: 10px solid #5b3737;  border-left: 1px solid #5b3737;  border-right: 1px solid #5b3737; border-top: 1px solid #5b3737; ">
            									<br>
                                                <br>
            									<div align="center">
            										<img src="http://www.hdsconsultoria.com/nuestros-clientes/gruporegio.jpg" width="100%">
            									</div>
            									<br>
                                                <br>
           	 									<div style="font-weight: bold; font-size: 18px; line-height: 24px; color: #000; text-align:center;">
            										¡Gracias por tu mensaje!
            									</div>
												<br>
           				 						<p> Hemos recibido sus datos y en breve uno de nuestro personal altamente capacitado se 
               										comunicará con usted para brindarle toda la información necesaria. Sus datos 
               										de contacto recibidos son:</p>  
                                           
            									<br>
                                                <p style="font-size: 12px; color: #000;" align="right">© 2014. Derechos Reservados <a href="http://www.hdsconsultoria.com" style="color:#000; font-weight:bold;" target="_blank"> HDS Consultoría</a>.</p>
          										<br>
           									</td>
                                           </tr>
                                           <tr>
                                            <td bgcolor="#fbfbfb" style="background-color: #fbfbfb;">
                                            <br>
                                            <p style="font-family: tahoma; font-size: 10px; color: #666666; line-height: 12px;" align="center"><b>AVISO DE PRIVACIDAD</b><br><br>En cumplimiento con lo establecido por la Ley Federal de Protección de Datos Personales en Posesión de Particulares, el tratamiento de sus datos personales o sensibles (datos) es controlado a efecto de garantizar la privacidad y el derecho a la autodeterminación informativa de los mismos, sugerimos la lectura del presente aviso ya que la aportación de datos mediante cualquier medio, constituye la aceptación del presente aviso de privacidad. Los datos podrán ser transferidos, compartidos y/o cedidos a sociedades subsidiarias, filiales, afiliadas y proveedores dentro de territorio nacional o en el extranjero para fines de identificación, contacto, así como para entender mejor las necesidades de nuestros clientes y lograr un mejor servicio. Se podrá conservar el tiempo que la ley aplicable lo permita la información en su base de datos con el objeto de simplificar la prestación del servicio.</p>
                                                <br>
                                            </td>
                                        </tr>                                  
      								</table>
    							</td>
  							</tr>
						</table>
						<br>
                  
						<br>
					</body>
				</html>
				';
				$para  = 'ovela@gruporegio.mx'. ', ';
				$para .= 'hapgomez@gmail.com;';
				$titulo = 'Nuevo correo de prueba';
				$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
				$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
				$cabeceras .= 'From: no-reply@gruporegio.mx' . "\r\n";
				mail($para, $titulo, $mensaje, $cabeceras);				
?>