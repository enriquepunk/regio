<script type="text/javascript">
	$(document).ready(function()
	{	
		$("#envio4").click(function()
		{				
			var nombre= $("#nombre4").val();
			var edad= $("#edad4").val();
			var ciudad= $("#ciudad4").val();
			var estado= $("#estado4").val();
			var pais= $("#pais4").val();
			var telefono= $("#telefono4").val();
			var celular= $("#celular4").val();
			var correo= $("#correo4").val();
			var area= $("#area4").val();
			var codigo= $("#codigo4").val();
			
			if($("#nombre4").val() == "Nombre")
				{	
					$("#mensaje4").hide();
					$("#mensaje4").html("<div class='mensaje'>Escriba su nombre completo </div>");
					$("#mensaje4").delay().slideToggle();
					return false;
				}
				else if(telefono=="" || telefono=="Teléfono")
				{	
					$("#mensaje4").hide();
					$("#mensaje4").html("<div class='mensaje'>Escriba su número teléfonico</div>");
					$("#mensaje4").delay().slideToggle();
					return false;
				}
				else if(correo=="" || correo=="E-mail")
				{		
					$("#mensaje4").hide();
					$("#mensaje4").html("<div class='mensaje'>Escriba su correo electrónico</div>");
					$("#mensaje4").delay().slideToggle();
					return false;
				}		
				else if($("#correo4").val().indexOf('@', 0) == -1 || $("#correo4").val().indexOf('.', 0) == -1)
				{
					$("#mensaje4").hide();
					$("#mensaje4").html("<div class='mensaje'>Escriba un correo válido</div>");
					$("#mensaje4").delay().slideToggle();
					return false;
				}
				else if(area=="")
				{	
					$("#mensaje4").hide();
					$("#mensaje4").html("<div class='mensaje'>Seleccione el area laboral</div>");
					$("#mensaje4").delay().slideToggle();
					return false;
				}
				else if(codigo!="lima")
				{	
					$("#mensaje4").hide();
					$("#mensaje4").html("<div class='mensaje'>Escriba el código correcto</div>");
					$("#mensaje4").delay().slideToggle();
					return false;
				}	
				else 
				{
					$("#envio3").attr("disabled", true);
					 $("#contactform4").submit();
				}
     		});
		});
	</script>	
   	<form name="contactform4" id="contactform4" method="post" action="componentes/enviar4.php">
       	<input type="hidden" id="empresa4" name="empresa4" value="111" />
       	<input type="hidden" id="empresanombre4" name="empresanombre4" value="GRUPO REGIO" />   
		<input name="Nombre4" id="Nombre4" type="text" class="mediano" value="Nombre" onFocus="if (this.value == 'Nombre') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Nombre';}"/>
		<input name="Edad4" id="Edad4" type="text" class="mediano" onFocus="if (this.value == 'Edad') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Edad';}" value="Edad" />
		<input name="Ciudad4" id="Ciudad4" type="text" class="mediano" onFocus="if (this.value == 'Ciudad') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Ciudad';}" value="Ciudad" />
		<input name="Estado4" id="Estado4" type="text" class="mediano" onFocus="if (this.value == 'Estado') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Estado';}" value="Estado" />
		<input name="Pais4" id="Pais4" type="text" class="mediano" onFocus="if (this.value == 'País') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'País';}" value="País" />
   		<input name="telefono4" id="telefono4" type="text" class="mediano" onFocus="if (this.value == 'Teléfono') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Teléfono';}" value="Teléfono" />
		<input name="Celular4" id="Celular4" type="text" class="mediano" onFocus="if (this.value == 'Celular') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Celular';}" value="Celular" />	
   		<input name="correo4" id="correo4" type="text" class="mediano" onFocus="if (this.value == 'Correo') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Correo';}" value="Correo"/>
     	<select name="area4" id="area4"  style="padding-top:0px !important; padding-bottom:0px !important; height:40px !important; width:100% !important; background:#FFF; color:#000; border: 1px solid #ccc !important; font-family: 'Lato',helvetica,arial,sans-serif !important; font-size:14px;">
 			<option value="">Seleccionar Área de Interés</option>
    		<option value="Acabados">Acabados</option>
    		<option value="Administración">Administración</option>
    		<option value="Almacén">Almacén</option> 
    		<option value="Alzadora">Alzadora</option>
    		<option value="Calidad y Desarrollo">Calidad y Desarrollo</option> 
    		<option value="Cobranza">Cobranza</option>
    		<option value="Compras">Compras</option>
    		<option value="Contabilidad">Contabilidad</option>
    		<option value="Diseño">Diseño</option>
    		<option value="Diseño Industrial">Diseño Industrial</option>
    		<option value="Dobladoras Editorial">Dobladoras Editorial</option>
   			<option value="Engomados">Engomados</option>
    		<option value="Foliadora">Foliadora</option>
   			<option value="Gran formato">Gran formato</option>
   			<option value="Guillotinas">Guillotinas</option>
   			<option value="Limpieza">Limpieza</option>
   			<option value="Mantenimiento">Mantenimiento</option>
   			<option value="Marketing">Marketing</option>
  			<option value="Planeación">Planeación</option>
   			<option value="Posprensa">Posprensa</option>
   			<option value="Prensa">Prensa</option>
   			<option value="Preprensa">Preprensa</option>
   			<option value="Presupuestos">Presupuestos</option>
    		<option value="Producción">Producción</option>
    		<option value="Programación">Programación</option>
			<option value="Recepción">Recepción</option>
   			<option value="Recursos Humanos">Recursos Humanos</option> 
   			<option value="Reparto">Reparto</option>
   			<option value="Sistemas">Sistemas</option>
    		<option value="Taller">Taller</option>
    		<option value="Tesoreria">Tesoreria</option>
   			<option value="Troquelados/Suajados">Troquelados/Suajados</option> 
    		<option value="Ventas">Ventas</option>
		</select> 
       	Subir C.V.
      	<input name="imagen" id="imagen" type="file" class="mediano" onFocus="if (this.value == 'Area de Interes') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Area de Interes';}" value="Area de Interes" style="margin-left: 27px; height: 23px; padding: 2px ! important; width: 63% ! important;"/>
    	<div style="clear:both"></div>
       <div id="validacion">
			<input maxlength="4" name="codigo4" id="codigo4" type="text" style="float: left; border: 1px solid rgb(204, 204, 204); color: rgb(58, 58, 58); font-family: 'Lato',helvetica,arial,sans-serif !important; height: 18px; font-size: 12px; padding-left: 10px; width: 80px; background: none repeat scroll 0px 0px rgb(255, 255, 255);" value="Código" onFocus="if (this.value == 'Código') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Código';}"/>
			<img name="imgVal" id="imgVal" class="captcha" src="images/seguridad.jpg" alt="Imagen" style="float: left;margin-left:10px;margin-top:5px;" />
			<img id="refresh" src="images/refresh.png" style="padding: 0px 0px 0px 10px; float: left;margin-top:5px; cursor: pointer;"/>
		</div>
    	<div style="clear:both"></div>
    	<div id="mensaje4"></div>
   		<input type="button" id="envio4" value="ENVIAR" class="boton_aceptar"/>
    </form>
