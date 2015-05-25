<div class="login_form">     
	<style>
	.mediano{
     	background: none repeat scroll 0 0 #FFF !important;
     	border: 1px solid #CCC !important;
    	color: #000 !important;
     	font-size: 12px !important;
    	margin-bottom: 3px !important;
    	padding: 6px !important;
   	 	width: 94% !important;
		font-family:"Lato",helvetica,arial,sans-serif !important;  
	}
	#comentarios{
     	background: none repeat scroll 0 0 #FFF !important;
     	border: 1px solid #CCC !important;
    	color: #000 !important;
     	font-size: 12px !important;
    	margin-bottom: 3px !important;
    	padding: 6px !important;
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
    	font-size: 12px !important;
    	margin-bottom: 10px !important;
    	padding: 6px !important;
    	width: 100% !important;
		margin-top:10px !important;
		font-family:"Lato",helvetica,arial,sans-serif !important;
		cursor:pointer;
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
  			$("#camposcotiza1").hide();
		});
		
		function pagoOnChange(sel) 
		{
      		if (sel.value=="Cotizaciones1")
			{
          		$("#camposcotiza1").show();
      		}
	  		else
	  		{
          		$("#camposcotiza1").hide();
      		}
		}		
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
   <input name="nombre" id="nombre" type="text" class="mediano" value="Name" onFocus="if (this.value == 'Name') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Name';}"/>
   	<input name="telefono" id="telefono" type="text" class="mediano" onFocus="if (this.value == 'Phone') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Phone';}" value="Phone" />
   	<input name="correo" id="correo" type="text" class="mediano" onFocus="if (this.value == 'Email') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Email';}" value="Email"/>
    
  <!--select style="padding-top:0px !important; padding-bottom:0px !important; height:30px !important; width:100% !important; background:#FFF; color:#000; border: 1px solid #ccc !important; font-family: 'Lato',helvetica,arial,sans-serif !important; font-size:12px;" onChange="pagoOnChange(this)">
 	<option value="">Asunto</option>
    <option value="Administración / Contabilidad">Adminstración / Contabilidad</option>
    <option value="Almacenaje, Logística y Distribucón">Almacenaje, Logística y Distribución</option>
    <option value="Compras">Compras</option> 
    <option value="Cotizaciones1">Cotizaciones</option>
    <option value="Creatividad">Creatividad</option> 
    <option value="Mercadotecnía">Mercadotecnía</option>
    <option value="Servicio al Cliente">Servicio al Cliente</option>
</select--> 
<!--div id="camposcotiza"-->
&nbsp;<b style="font-weight:bold; font-size:12px">Our Products:</b><br> 
<select id="cotiza" name="cotiza" style="padding-top:0px !important; padding-bottom:0px !important; height:70px !important; width:100% !important; background:#FFF; color:#000; border: 1px solid #ccc !important; font-family: 'Lato',helvetica,arial,sans-serif !important; font-size:12px; margin-top:5px;" multiple="multiple" >
	<option value="Informacion">Information</option>
   	<option value="Papelería Corporativa">Corporate Stationary</option>
	<option value="Papelería Operativa">Operative Stationary</option>
   	<option value="Material Publicitario">Advertising Materials and Pieces</option>
   	<option value="Hotelería">Hostelry and Hotels items/option>
   	<option value="Agendas">Agendas</option>
   	<option value="Bidding Books">Bidding Books</option>
	<option value="Libros">Books</option>
   	<option value="Material Didáctico">Teaching and Learning Materials</option>
   	<option value="Revistas">Magazines</option>
   	<option value="Anillados">Spiral Binding</option>
    <option value="Barniz a Registro">UV coating - Spot</option>
	<option value="Barniz Brillante">Glossy</option>
   	<option value="Barniz Mate">Matte</option>
   	<option value="Barniz Texturizado">UV coating – Texturized and Glittered</option>
   	<option value="Encapsulado">Laminated</option>
   	<option value="Hot Melt">Hot melt</option>
	<option value="Hot Stamping">Hot stamping</option>
   	<option value="Laminados">Embossed</option>
   	<option value="Realzados">Die-cut</option>
   	<option value="Suajes">Punch</option>
	<option value="Acrílicos Decorativos">Acrylic décor</option>
   	<option value="Acrílicos Luminosos">Lit up Acrylics</option>
   	<option value="Aparadores">Display windows</option>
   	<option value="Caja de Luz">Light boxes</option>
   	<option value="Cristales Decorados">Crystal décor</option>
	<option value="Escenografía">Scenography </option>
   	<option value="Espectaculares">Billboards</option>
   	<option value="Estáticos">Statics</option>
   	<option value="Estructuras PTR">PTR structures</option>
    <option value="Exhibidores">Counters</option>
   	<option value="Gráficos para Pisos y Paredes">Wall and floor graphics</option>
	<option value="Letrero">Signage</option>
   	<option value="Materiales POP">POP Materials</option>
   	<option value="Murales">Murals</option>
   	<option value="Pantalla de Acrílico">Acrylic Screens</option>
    <option value="Pendones">Banners</option>
   	<option value="Rotulación de Vehículos">Vehicle Signage</option>
    <option value="Señalización Interior y Exterior">Indoor & Outdoor Signage</option>
   	<option value="Vallas Publicitarias">Exhibit stands</option>
    <option value="Vallas Publicitarias">Outdoor Advertising</option>
    <option value="X-Spider">X-Spider</option>
   	<option value="Otros">Otros</option>
</select> 
<!--/div-->
   	<textarea name="comentarios" id="comentarios"  class="recuadrocomentarios" onFocus="if (this.value == 'Comments') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Comments';}">Comments</textarea>
   	<div id="validacion">
		<input maxlength="4" name="codigo" id="codigo" type="text" style="float: left; border: 1px solid rgb(204, 204, 204); color: rgb(58, 58, 58); font-family: 'Lato',helvetica,arial,sans-serif !important; height: 18px; font-size: 12px; padding-left: 10px; width: 80px; background: none repeat scroll 0px 0px rgb(255, 255, 255);" value="Code" onFocus="if (this.value == 'Code') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Code';}"/>
		<img name="imgVal" id="imgVal" class="captcha" src="images/seguridad.jpg" alt="Imagen" style="float: left;margin-left:10px;margin-top:5px;" />
		<img id="refresh" src="images/refresh.png" style="padding: 0px 0px 0px 10px; float: left;margin-top:5px; cursor: pointer;"/>
	</div>
    <div style="clear:both"></div>
    <div id="mensaje"></div>
    <input type="button" onClick="javascript:guardar_datos();" value="Send" class="boton_aceptar"/>
</div>