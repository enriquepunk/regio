<meta charset="UTF-8" />
<div class="login_form">     
	<style>
		.mediano2
		{
     		background: none repeat scroll 0 0 #FFF !important;
     		border: 1px solid #CCC !important;
    		color: #000 !important;
			font-family:open sans; 
     		font-size: 12px !important;
    		margin-bottom: 3px !important;
    		padding: 5px !important;
   	 		width: 94% !important;
			font-family:"Lato",helvetica,arial,sans-serif !important;  
		}
		#comentarios2
		{
     		background: none repeat scroll 0 0 #FFF !important;
     		border: 1px solid #CCC !important;
    		color: #000 !important;
			font-family:open sans; 
     		font-size: 12px !important;
    		margin-bottom: 3px !important;
    		padding: 5px !important;
   	 		width: 94% !important;
			height:30px;
			resize:none !important;
			font-family:"Lato",helvetica,arial,sans-serif !important;
		}
		.boton_aceptar2
		{
			background: none repeat scroll 0 0 #43669d !important;
   	 		border: 1px solid #fff !important;
    		border-radius: 6px !important;
    		color: #fff !important;
    		font-size: 12px !important;
    		margin-bottom: 10px !important;
    		padding: 6px !important;
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
		$(document).ready(function()
		{	
			$("#envio2").click(function()
			{				
				var nombre2= $("#nombre2").val();
				var correo2= $("#correo2").val();
				var telefono2= $("#telefono2").val();
				var comentarios2= $("#comentarios2").val();
				var asunto2= $("#asunto2").val();
				var codigo2= $("#codigo2").val();
				if($("#nombre2").val() == "Nombre")
				{	
					$("#mensaje2").hide();
					$("#mensaje2").html("<div class='mensaje'>Escriba su nombre completo </div>");
					$("#mensaje2").delay().slideToggle();
					return false;
				}
				else if(telefono2=="" || telefono2=="Teléfono")
				{	
					$("#mensaje2").hide();
					$("#mensaje2").html("<div class='mensaje'>Escriba su número teléfonico</div>");
					$("#mensaje2").delay().slideToggle();
					return false;
				}
				else if(correo2=="" || correo2=="E-mail")
				{		
					$("#mensaje2").hide();
					$("#mensaje2").html("<div class='mensaje'>Escriba su correo electrónico</div>");
					$("#mensaje2").delay().slideToggle();
					return false;
				}		
				else if($("#correo2").val().indexOf('@', 0) == -1 || $("#correo2").val().indexOf('.', 0) == -1)
				{
					$("#mensaje2").hide();
					$("#mensaje2").html("<div class='mensaje'>Escriba un correo válido</div>");
					$("#mensaje2").delay().slideToggle();
					return false;
				}
				else if(asunto2=="")
				{	
					$("#mensaje2").hide();
					$("#mensaje2").html("<div class='mensaje'>Seleccione el asunto del mensaje</div>");
					$("#mensaje2").delay().slideToggle();
					return false;
				}
				else if(codigo2!="lima")
				{	
					$("#mensaje2").hide();
					$("#mensaje2").html("<div class='mensaje'>Escriba el código correcto</div>");
					$("#mensaje2").delay().slideToggle();
					return false;
				}	
				else 
				{
					$("#envio2").attr("disabled", true);
					 $("#contactform2").submit();
				}
     		});
		});
	</script>
    	
   	<form name="contactform2" id="contactform2" method="post" action="componentes/enviar2.php">
   	
       <input type="hidden" id="estado2" name="estado2" value="Quintana Roo" />
       	<input type="hidden" id="pais2" name="pais2" value="Mexico" />
       	<input type="hidden" id="empresa2" name="empresa2" value="111" />
       	<input type="hidden" id="empresanombre2" name="empresanombre2" value="GRUPO REGIO" />
       	<input type="hidden" id="asunto2" name="asunto2" value="Cotizaciones" /> 
		
       	<input name="nombre2" id="nombre2" type="text" class="mediano2" value="Nombre" onFocus="if (this.value == 'Nombre') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Nombre';}"/>
   		<input name="correo2" id="correo2" type="text" class="mediano2" onFocus="if (this.value == 'Correo') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Correo';}" value="Correo"/>
        <input name="ciudad2" id="ciudad2" type="text" class="mediano2" onFocus="if (this.value == 'Ciudad') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Ciudad';}" value="Ciudad"/>
        <input name="telefono2" id="telefono2" type="text" class="mediano2" onFocus="if (this.value == 'Teléfono') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Teléfono';}" value="Teléfono" />
    
			&nbsp;<b style="font-weight:bold; font-size:12px;">Selecciona los Articulos de Interés:</b><br> 
			<select id="cotiza2" name="cotiza2[]" style="padding-top:0px !important; padding-bottom:0px !important; height:64px !important; width:100% !important; background:#FFF; color:#000; border: 1px solid #ccc !important; font-family: 'Lato',helvetica,arial,sans-serif !important; font-size:12px; margin-top:5px;" multiple="multiple" >
   				<option value="Papelería Corporativa">Papelería Corporativa</option>
				<option value="Papelería Operativa">Papelería Operativa</option>
   				<option value="Material Publicitario">Material Publicitario</option>
   				<option value="Hotelería">Hotelería</option>
   				<option value="Agendas">Agendas</option>
   				<option value="Bidding Books">Bidding Books</option>
				<option value="Libros">Libros</option>
   				<option value="Material Didáctico">Material Didáctico</option>
   				<option value="Revistas">Revistas</option>
   				<option value="Anillados">Anillados</option>
    			<option value="Barniz a Registro">Barniz a Registro</option>
				<option value="Barniz Brillante">Barniz Brillante</option>
   				<option value="Barniz Mate">Barniz Mate</option>
   				<option value="Barniz Texturizado">Barniz Texturizado</option>
   				<option value="Encapsulado">Encapsulado</option>
   				<option value="Hot Melt">Hot Melt</option>
				<option value="Hot Stamping">Hot Stamping</option>
   				<option value="Laminados">Laminados</option>
   				<option value="Realzados">Realzados</option>
   				<option value="Suajes">Suajes</option>
    			<option value="Troqueleados">Troqueleados</option>
				<option value="Acrílicos Decorativos">Acrílicos Decorativos</option>
   				<option value="Acrílicos Luminosos">Acrílicos Luminosos</option>
   				<option value="Aparadores">Aparadores</option>
   				<option value="Caja de Luz">Caja de Luz</option>
   				<option value="Cristales Decorados">Cristales Decorados</option>
				<option value="Escenografía">Escenografía</option>
   				<option value="Espectaculares">Espectaculares</option>
   				<option value="Estáticos">Estáticos</option>
   				<option value="Estructuras PTR">Estructuras PTR</option>
    			<option value="Exhibidores">Exhibidores</option>
   				<option value="Gráficos para Pisos y Paredes">Gráficos para Pisos y Paredes</option>
				<option value="Letrero">Letrero</option>
   				<option value="Materiales POP">Materiales POP</option>
   				<option value="Murales">Murales</option>
   				<option value="Pantalla de Acrílico">Pantalla de Acrílico</option>
    			<option value="Pendones">Pendones</option>
   				<option value="Rotulación de Vehículos">Rotulación de Vehículos</option>
    			<option value="Señalización Interior y Exterior">Señalización Interior y Exterior</option>
   				<option value="Vallas Publicitarias">Vallas Publicitarias</option>
    			<option value="X-Spider">X-Spider</option>
   				<option value="Otros">Otros</option>
			</select> 
			<span style="font-size:11px; font-weight:normal !important;">(Seleccione uno o varios dando click)</span>
   		<textarea name="comentarios2" id="comentarios2"  class="recuadrocomentarios2" onFocus="if (this.value == 'Comentarios') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Comentarios';}">Comentarios</textarea>
   		<div id="validacion">
			<input maxlength="4" name="codigo2" id="codigo2" type="text" style="float: left; border: 1px solid rgb(204, 204, 204); color: rgb(58, 58, 58); font-family: 'Lato',helvetica,arial,sans-serif !important; height: 18px; font-size: 12px; padding-left: 10px; width: 80px; background: none repeat scroll 0px 0px rgb(255, 255, 255);" value="Código" onFocus="if (this.value == 'Código') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Código';}"/>
			<img name="imgVal" id="imgVal" class="captcha" src="images/seguridad.jpg" alt="Imagen" style="float: left;margin-left:10px;margin-top:5px;" />
			<img id="refresh" src="images/refresh.png" style="padding: 0px 0px 0px 10px; float: left;margin-top:5px; cursor: pointer;"/>
		</div>
    	<div style="clear:both"></div>
    	<div id="mensaje2"></div>
    	<input type="button" id="envio2" value="ENVIAR" class="boton_aceptar2"/>
	</form>
</div>