<meta charset="UTF-8" />
<div class="login_form">     
	<style>
		.mediano
		{
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
		#comentarios
		{
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
		.boton_aceptar
		{
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
		$(function() 
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
		}
	</script>
	<script type="text/javascript">
		$(document).ready(function()
		{	
			$("#envio1").click(function()
			{				
				var nombre= $("#nombre").val();
				var correo= $("#correo").val();
				var telefono= $("#telefono").val();
				var comentarios= $("#comentarios").val();
				var asunto= $("#asunto").val();
				var codigo= $("#codigo").val();
				if($("#nombre").val() == "Nombre")
				{	
					$("#mensaje").hide();
					$("#mensaje").html("<div class='mensaje'>Escriba su nombre completo </div>");
					$("#mensaje").delay().slideToggle();
					return false;
				}
				else if(telefono=="" || telefono=="Teléfono")
				{	
					$("#mensaje").hide();
					$("#mensaje").html("<div class='mensaje'>Escriba su número teléfonico</div>");
					$("#mensaje").delay().slideToggle();
					return false;
				}
				else if(correo=="" || correo=="E-mail")
				{		
					$("#mensaje").hide();
					$("#mensaje").html("<div class='mensaje'>Escriba su correo electrónico</div>");
					$("#mensaje").delay().slideToggle();
					return false;
				}		
				else if($("#correo").val().indexOf('@', 0) == -1 || $("#correo").val().indexOf('.', 0) == -1)
				{
					$("#mensaje").hide();
					$("#mensaje").html("<div class='mensaje'>Escriba un correo válido</div>");
					$("#mensaje").delay().slideToggle();
					return false;
				}
				else if(asunto=="")
				{	
					$("#mensaje").hide();
					$("#mensaje").html("<div class='mensaje'>Seleccione el asunto del mensaje</div>");
					$("#mensaje").delay().slideToggle();
					return false;
				}
				else if(codigo!="lima")
				{	
					$("#mensaje").hide();
					$("#mensaje").html("<div class='mensaje'>Escriba el código correcto</div>");
					$("#mensaje").delay().slideToggle();
					return false;
				}	
				else 
				{
					 $("#envio1").attr("disabled", true);
					 $("#contactform").submit();
				}
     		});
		});
	</script>	
   	<form name="contactform" id="contactform" method="post" action="componentes/enviar.php">
   	
       <input type="hidden" id="estado" name="estado" value="Quintana Roo" />
       	<input type="hidden" id="pais" name="pais" value="Mexico" />
       	<input type="hidden" id="empresa" name="empresa" value="111" />
       	<input type="hidden" id="empresanombre" name="empresanombre" value="GRUPO REGIO" />   
		
       	<input name="nombre" id="nombre" type="text" class="mediano" value="Nombre" onFocus="if (this.value == 'Nombre') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Nombre';}"/>
   		<input name="correo" id="correo" type="text" class="mediano" onFocus="if (this.value == 'Correo') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Correo';}" value="Correo"/>
        <input name="ciudad" id="ciudad" type="text" class="mediano" onFocus="if (this.value == 'Ciudad') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Ciudad';}" value="Ciudad"/>
        <input name="telefono" id="telefono" type="text" class="mediano" onFocus="if (this.value == 'Teléfono') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Teléfono';}" value="Teléfono" />
    
     	<select style="padding-top:0px !important; padding-bottom:0px !important; height:40px !important; width:100% !important; background:#FFF; color:#000; border: 1px solid #ccc !important; font-family: 'Lato',helvetica,arial,sans-serif !important; font-size:14px;" onChange="pagoOnChange(this)" id="asunto" name="asunto">
 			<option value="">Lista de Departamentos </option>
    		<option value="Administración / Contabilidad">Adminstración / Contabilidad</option>
    		<option value="Almacenaje, Logística y Distribucón">Almacenaje, Logística y Distribución</option>
    		<option value="Compras">Compras</option> 
    		<option value="Cotizaciones">Cotizaciones</option>
    		<option value="Creatividad">Creatividad</option> 
    		<option value="Mercadotecnía">Mercadotecnía</option>
    		<option value="Servicio al Cliente">Servicio al Cliente</option>
		</select> 

		<div id="camposcotiza">
			&nbsp;<b style="font-weight:bold;">Tomar los Articulos de Interés:</b><br> 
			<select id="cotiza" name="cotiza[]" style="padding-top:0px !important; padding-bottom:0px !important; height:150px !important; width:100% !important; background:#FFF; color:#000; border: 1px solid #ccc !important; font-family: 'Lato',helvetica,arial,sans-serif !important; font-size:14px; margin-top:5px;" multiple="multiple" >
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
		</div>
   		<textarea name="comentarios" id="comentarios"  class="recuadrocomentarios" onFocus="if (this.value == 'Comentarios') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Comentarios';}">Comentarios</textarea>
   		<div id="validacion">
			<input maxlength="4" name="codigo" id="codigo" type="text" style="float: left; border: 1px solid rgb(204, 204, 204); color: rgb(58, 58, 58); font-family: 'Lato',helvetica,arial,sans-serif !important; height: 20px; font-size: 14px; padding-left: 10px; width: 80px; background: none repeat scroll 0px 0px rgb(255, 255, 255);" value="Código" onFocus="if (this.value == 'Código') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Código';}"/>
			<img name="imgVal" id="imgVal" class="captcha" src="images/seguridad.jpg" alt="Imagen" style="float: left;margin-left:10px;margin-top:5px;" />
			<img id="refresh" src="images/refresh.png" style="padding: 0px 0px 0px 10px; float: left;margin-top:5px; cursor: pointer;"/>
		</div>
    	<div style="clear:both"></div>
    	<div id="mensaje"></div>
    	<input type="button" id="envio1" value="ENVIAR" class="boton_aceptar"/>
	</form>
</div>