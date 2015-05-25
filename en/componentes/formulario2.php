<div class="login_form">     
	<style>
	.mediano{
     	background: none repeat scroll 0 0 #FFF !important;
     	border: 1px solid #CCC !important;
    	color: #000 !important;
		font-family:open sans; 
     	font-size: 14px !important;
    	margin-bottom: 3px !important;
    	padding: 9px !important;
   	 	width: 94% !important;
		font-family:"Lato",helvetica,arial,sans-serif !important;  
	}
	#comentarios{
     	background: none repeat scroll 0 0 #FFF !important;
     	border: 1px solid #CCC !important;
    	color: #000 !important;
		font-family:open sans; 
     	font-size: 14px !important;
    	margin-bottom: 3px !important;
    	padding: 9px !important;
   	 	width: 94% !important;
		height:40px;
		resize:none !important;
		font-family:"Lato",helvetica,arial,sans-serif !important;
	}
	.boton_aceptar{
		background: none repeat scroll 0 0 #43669d !important;
   	 	border: 1px solid #fff !important;
    	border-radius: 6px !important;
    	color: #fff !important;
    	font-size: 14px !important;
    	margin-bottom: 10px !important;
    	padding: 8px !important;
    	width: 100% !important;
		margin-top:10px !important;
		font-family:"Lato",helvetica,arial,sans-serif !important;
	}
	.mensaje
	{
    	color: #c30;
    	font-weight: bold;
    	margin-top: 4px;
    	text-align: center;
		font-size:12px;
		font-family:"Lato",helvetica,arial,sans-serif !important;
	}
    </style>   		
	<script type="text/javascript">
	/*$(function() 
		{
  			$("#camposcotiza").hide();
		});
		
		function pagoOnChange(sel) 
		{
      		if (sel.value=="Cotizaciones")
			{
          		$("#camposcotiza").show();
      		}
	  		else
	  		{
          		$("#camposcotiza").hide();
      		}
		}*/
		
		function guardar_datos()
		{		
			var $jq = jQuery.noConflict();
			var nombre= $jq("#nombre").val();
			var ciudad= "CANCUN";
			var estado= "Q.ROO.";
			var pais= "MEXICO";
			var correo= $jq("#correo").val();
			var telefono= $jq("#telefono").val();
			var comentarios= $jq("#comentarios").val();
			var empresa=111;
			var empresanombre="GRUPO REGIO";
			var codigo= $jq("#codigo").val();
			if($jq("#nombre").val() == "Nombre")
			{	
				$jq("#mensaje").hide();
				$jq("#mensaje").html("<div class='mensaje'>Escriba su nombre completo </div>");
				$jq("#mensaje").delay().slideToggle();
				return false;
			}
			else if(telefono=="" || telefono=="Teléfono")
			{	
				$jq("#mensaje").hide();
				$jq("#mensaje").html("<div class='mensaje'>Escriba su número teléfonico</div>");
				$jq("#mensaje").delay().slideToggle();
				return false;
			}
			else if(correo=="" || correo=="E-mail")
			{	
				$jq("#mensaje").hide();
				$jq("#mensaje").html("<div class='mensaje'>Escriba su correo electrónico</div>");
				$jq("#mensaje").delay().slideToggle();
				return false;
			}		
			else if($jq("#correo").val().indexOf('@', 0) == -1 || $jq("#correo").val().indexOf('.', 0) == -1)
			{
				$jq("#mensaje").hide();
				$jq("#mensaje").html("<div class='mensaje'>Escriba un correo válido</div>");
				$jq("#mensaje").delay().slideToggle();
				return false;
			}
			else if(codigo!="lima")
			{	
				$jq("#mensaje").hide();
				$jq("#mensaje").html("<div class='mensaje'>Escriba el código correcto</div>");
				$jq("#mensaje").delay().slideToggle();
				return false;
			}	
			else 
			{
				$jq.post("http://www.hdsconsultoria.com/prospectos/gruporegio/envio.php",{nombre:nombre, ciudad:ciudad, estado:estado, pais:pais, correo:correo, telefono:telefono, comentarios:comentarios,codigo:codigo, empresa:empresa, empresanombre:empresanombre});
				$jq("#mensaje").hide();
				$jq("#mensaje").html("<div class='mensaje'>¡Mensaje enviado con éxito!</div>");
				$jq("#nombre").val('Nombre');
				$jq("#correo").val('E-mail');
				$jq("#telefono").val('Teléfono');
				$jq("#comentarios").val('Comentarios');
				$jq("#codigo").val('Código');
				$jq("#mensaje").delay().slideToggle();
					setTimeout(function(){
						url = "gracias.php";
						$jq(location).attr('href',url);
					},2500);
			}
     	}
	</script>	
   	<input name="nombre" id="nombre" type="text" class="mediano" value="Nombre" onFocus="if (this.value == 'Nombre') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Nombre';}"/>
   	<input name="telefono" id="telefono" type="text" class="mediano" onFocus="if (this.value == 'Teléfono') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Teléfono';}" value="Teléfono" />
   	<input name="correo" id="correo" type="text" class="mediano" onFocus="if (this.value == 'Correo') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Correo';}" value="Correo"/>
  	<textarea name="comentarios" id="comentarios"  class="recuadrocomentarios" onFocus="if (this.value == 'Comentarios') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Comentarios';}">Artículos de Intéres</textarea>
   	<textarea name="comentarios" id="comentarios"  class="recuadrocomentarios" onFocus="if (this.value == 'Comentarios') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Comentarios';}">Comentarios</textarea>
   	<div id="validacion">
		<input maxlength="4" name="codigo" id="codigo" type="text" style="float: left; border: 1px solid rgb(204, 204, 204); color: rgb(58, 58, 58); font-family: 'Lato',helvetica,arial,sans-serif !important; height: 20px; font-size: 14px; padding-left: 10px; width: 80px; background: none repeat scroll 0px 0px rgb(255, 255, 255);" value="Código" onFocus="if (this.value == 'Código') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Código';}"/>
		<img name="imgVal" id="imgVal" class="captcha" src="images/seguridad.jpg" alt="Imagen" style="float: left;margin-left:10px;margin-top:5px;" />
		<img id="refresh" src="images/refresh.png" style="padding: 0px 0px 0px 10px; float: left;margin-top:5px; cursor: pointer;"/>
	</div>
    <div style="clear:both"></div>
    <div id="mensaje"></div>
    <input type="button" onClick="javascript:guardar_datos();" value="Enviar" class="boton_aceptar"/>
</div>