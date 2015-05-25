<?php	
	$fecha	= date("Y-m-d H:i:s");
	$nombre = $_POST['nombre2'];	
	$correo = $_POST['correo2'];	
	$ciudad = $_POST['ciudad2'];	
	$estado = $_POST['estado2'];	
	$asunto = $_POST['asunto2'];	
	$pais = $_POST['pais2'];	
	$telefono = $_POST['telefono2'];
	$comentarios = $_POST['comentarios2'];	
	$codigo = $_POST['codigo2'];	
	$empresa = $_POST['empresa2'];
	$empresanombre = $_POST['empresanombre2'];
	$cotiza=$_POST["cotiza2"]; 	
	
	for ($i=0;$i<count($cotiza);$i++)
   	{
   		$intereses=$intereses." : ".$cotiza[$i];
   	} 
	
	if($codigo=='lima' || $codigo=='LIMA')
	{
		$mensaje='
		<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
    	<meta charset="UTF-8">
				<html lang="es">
					<head>
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
          								<td class="container-padding" bgcolor="#ffffff" style="background-color: #ffffff; padding-left: 30px; padding-right: 30px; font-size: 13px; line-height: 17px; font-family: tahoma; color: #333;  border-bottom: 10px solid #1B386E;  border-left: 1px solid #1B386E;  border-right: 1px solid #1B386E; border-top: 1px solid #1B386E; ">
            								<br>
                                   		<br>
            								<div align="center">
            									<img src="http://www.gruporegio.com.mx/images/gracias.jpg" width="100%">
            								</div>
            								<br>
                                       	<br>
           	 							<div style="font-weight: bold; font-size: 18px; line-height: 24px; color: #000; text-align:center;">
            									&iexcl;Gracias por su mensaje '.htmlentities($nombre).'!
            								</div>
											<br>
           				 				<p>Hemos recibido sus datos y en breve uno de nuestros asesores altamente capacitados se comunicar&aacute; con usted para brindarle toda la informaci&oacute;n necesaria. Sus datos de contacto recibidos son:</p>  
                                      	<ul>
			  									<li><b>Nombre:</b> '.htmlentities($nombre).'<br></li>
												<li><b>Ciudad:</b> '.htmlentities($ciudad).'<br></li>
			  									<li><b>Correo:</b> '.htmlentities($correo).'<br></li>
												<li><b>Telefono:</b> '.htmlentities($telefono).'<br></li>
												<li><b>Asunto:</b> '.htmlentities($asunto).'<br></li>
												<li><b>Intereses:</b> '.htmlentities($intereses).' <br></li>
												<li><b>Comentarios:</b> '.htmlentities($comentarios).' <br></li>
            								</ul>
            								<br>
                                       	<p style="font-size: 12px; color: #000;" align="right">&copy; 2014. Derechos Reservados <a href="http://www.hdsconsultoria.com" style="color:#000; font-weight:bold;" target="_blank"> HDS Consultor&iacute;a</a>.</p>
          									<br>
           							</td>
                               	</tr>
                               	<tr>
                               		<td bgcolor="#fbfbfb" style="background-color: #fbfbfb;">
                                   		<br>
                                     	<p style="font-family: tahoma; font-size: 10px; color: #666666; line-height: 12px;" align="center"><b>AVISO DE PRIVACIDAD</b><br><br>En cumplimiento con lo establecido por la Ley Federal de Protecci&oacute;n de Datos Personales en Posesi&oacute;n de Particulares, el tratamiento de sus datos personales o sensibles (datos) es controlado a efecto de garantizar la privacidad y el derecho a la autodeterminaci&oacute;n informativa de los mismos, sugerimos la lectura del presente aviso ya que la aportaci&oacute;n de datos mediante cualquier medio, constituye la aceptaci&oacute;n del presente aviso de privacidad. Los datos podr&aacute;n ser transferidos, compartidos y/o cedidos a sociedades subsidiarias, filiales, afiliadas y proveedores dentro de territorio nacional o en el extranjero para fines de identificaci&oacute;n, contacto, as&iacute; como para entender mejor las necesidades de nuestros clientes y lograr un mejor servicio. Se podr&aacute; conservar el tiempo que la ley aplicable lo permita la informaci&oacute;n en su base de datos con el objeto de simplificar la prestaci&oacute;n del servicio.</p>
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
		
	$para  = 'contacto@gruporegio.mx'. ', ';
	$para .= 'mercadotecnia@gruporegio.mx,';
	$para .= 'fgarza@gruporegio.mx,';
	$para .= 'gtrevinog@gruporegio.mx,';
	$para .= 'lcruz@gruporegio.mx,';
	$para .= 'ventas@hdsconsultoria.com,';
	$para .= 'hperez@hdsconsultoria.com';
	$titulo = 'Nuevo mensaje de Grupo Regio';
	$titulo1 = 'Gracias por tu mensaje - Grupo Regio';
	$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
	$cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
	$cabeceras .= 'From:web-noreply@gruporegio.mx' . "\r\n";
	mail($para, $titulo, $mensaje, $cabeceras);
	mail($correo, $titulo1, $mensaje, $cabeceras);
	$conexion=mysql_connect("host244.hostmonster.com","vacacion_hugo","cocacola22");
	mysql_select_db("vacacion_prospectos",$conexion); 
	$sql=mysql_query("INSERT INTO leads (lead_empresa, lead_fecha, lead_nombre, lead_ciudad, lead_estado, lead_pais, lead_telefono, lead_email, lead_comentarios, lead_estatus) VALUES ('$empresa', '$fecha','$nombre','$ciudad','$estado','$pais','$telefono','$correo','$comentarios',1)");
}
?>
<div style="padding: 10px; width: 150px; text-align: center; margin-right: auto; margin-left: auto; margin-top: 200px;">
	<p align="center" style="font-family:Arial; font-family:10px; color:#333;">Enviando mensaje...</p>
    <img src="http://gruporegio.com.mx/images/loanding.gif" />
</div>
<meta http-equiv="Refresh" content="3;url=http://www.gruporegio.com.mx/gracias.php">