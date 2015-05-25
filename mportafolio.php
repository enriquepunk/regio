<!DOCTYPE html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta charset="UTF-8" />
	<title></title>
   	<meta name="description" content="" />
	<meta name="keywords" content="" />
   	<meta name="author" content="HDS Consultoria">
	<link type="image/x-icon" href="favicon.ico" rel="icon" />
	<link type="image/x-icon" href="favicon.ico" rel="shortcut icon" />
    <link rel="stylesheet" media="all" href="css/vendor/base.css" />
	<link rel="stylesheet" media="all" href="css/vendor/skeleton.css" />
	<link rel="stylesheet" media="all" href="css/master.css" />
	<style>
		#gallery 
		{
    		height: 100%;
    		width: 100%;
		}
		.product 
		{
    		background: #333;
    		height: 100%;
    		width: 100%;
		}
		.image 
		{
        	position: absolute;
    		background: #777;
    		height: 100%;
    		width: 100%;
		}		
		.caption 
		{
			margin-top:45%;
    		width: 100%;
   		 	height: 100%;
    		position: absolute;
			margin-left: 48px;
    		width: 70%;
		}	
		.tituloportafolio
		{
			background: none repeat scroll 0 0 #d54a4e; 
			color: #fff !important; 
			font-size: 14px; 
			font-weight: normal; 
			margin: 0 !important; 
			text-align: center; 
			padding:5px;
		}
		.subtituloportafolio
		{
			background: none repeat scroll 0 0 #606870;
    		color: #fff !important;
    		font-size: 16px !important;
    		font-weight: normal !important;
    		margin-top: 0;
    		padding: 10px;
    		text-align: center;
		}
		.cuadroportafolio
		{
			background: url('images/fondo-caja.png') repeat scroll 0px 0px transparent; 
			color: rgb(255, 255, 255) !important; 
			font-weight: normal !important; 
			padding: 10px; 
			font-size: 12px !important; 
			margin-top: -15px;	
		}
		.miboton 
		{
    		background: none repeat scroll 0 0 #124b75;
    border-radius: 4px;
    color: #fff !important;
    display: inline-block;
    font-family: Arial,"Lato",helvetica,sans-serif !important;
    font-weight: bold;
    height: 36px;
    line-height: 36px;
    margin-left: 78px;
    padding-right: 7px;
    text-align: center;
    text-transform: uppercase;
    width: 100px;
		}
	/*	@media only screen and (min-width: 300px) and (max-width: 320px) 
		{
			#gallery 
			{
    			height: 72%;
			}
			.image 
			{
    			height: 120%;
			}
			.escondeme
			{ 
				display:none;
			}
			.emovil
			{
				display:block;
			}
			.cuadroportafolio
			{
				display:none;
			}
			.caption 
			{
    			margin-left: 170px;
    			width: 50% !important;
				height: auto !important;
			}
		}*/
		/*@media only screen and (min-width: 359px) and (max-width: 479px) 
		{
			.escondeme
			{ 
				display:none;
			}
			.emovil
			{
				display:block;
			}
			.caption 
			{
    			margin-left: 55px;
    			width: 70% !important;
				height: auto !important;
			}
			.cuadroportafolio
			{
				display:none;
			}
		}
		@media only screen and (min-width: 480px) and (max-width: 700px)
		{
			.escondeme
			{ 
				display:none;
				
			}
			.caption 
			{
    			margin-left: 170px;
    			width: 50% !important;
				height: auto !important;
			}
			.cuadroportafolio
			{
				display:none;
			}
			.caption 
			{
				margin-top:40%;
			}	
			.miboton 
			{
    			margin-left: 110px;
			}
			.emovil
			{
				display:none;
			}
			.escondeme
			{
				display:block;
			}
			.image 
			{
        		height: 100%;
			}
		}*/
		@media only screen and (min-width: 300px) and (max-width: 330px)
		{
			.caption 
			{
    			height: auto !important;
    			margin-left: 52px;
    			margin-top: 55%;
    			width: 70% !important;
			}
			#gallery 
			{
    			height: 100%;
			}
			.escondeme
			{ 
				display:none;
			}
			.emovil
			{
				display:block;
			}
			.cuadroportafolio
			{
				display:none;
			}
			.miboton 
			{
    			margin-left:62px !important;
			}
		}
		@media only screen and (min-width: 321px) and (max-width: 330px)
		{
		.image 
			{
    			height: 110%;
			}
		}
		@media only screen and (min-width: 200px) and (max-width: 320px)
		{
		.image 
			{
    			height: 164%;
			}
		}
		@media only screen and (min-width: 400px) and (max-width: 600px)
		{
			.caption 
			{
    			height: auto !important;
    			margin-left: 170px;
    			margin-top: 25%;
    			width: 45% !important;
			}
			#gallery 
			{
    			height: 100%;
			}
			.image 
			{
    			height: 110% !important;
			}
			.escondeme
			{ 
				display:block;
			}
			.emovil
			{
				display:none;
			}
			.cuadroportafolio
			{
				display:none;
			}
			.miboton 
			{
    			margin-left:62px !important;
			}
			.product {
    height: 53%;
}
		}
		@media only screen and (min-width: 600px) and (max-width: 700px)
		{
			.caption 
			{
    			height: auto !important;
    			margin-left: 170px;
    			margin-top: 40%;
    			width: 45% !important;
			}
			#gallery 
			{
    			height: 100%;
			}
			.image 
			{
    			height: 110% !important;
			}
			.escondeme
			{ 
				display:block;
			}
			.emovil
			{
				display:none;
			}
			.cuadroportafolio
			{
				display:none;
			}
			.miboton 
			{
    			margin-left:97px !important;
			}
			.product {
   
}
		}
	</style>
	<script src="js/vendor/jquery/jquery.tools.min.js"></script>
	<script src="js/vendor/jquery/divscroll/jquery-ui-1.8.23.custom.min.js" type="text/javascript"></script>
	<script src="js/cuda/cuda.min.js"></script>
</head>
<body id="BODY_products">
	<?php include("componentes/menumovil.php"); ?>
	<?php include("componentes/chat.php"); ?>
	<?php include("componentes/cabecera.php"); ?>    
   	<div id="gallery">
   		<div class="product">
       		<img class="image escondeme" src="images/portafolio/landscape/papeleria-corporativa-1.jpg" />
          	<img class="image emovil" src="images/portafolio/movil/papeleria-corporativa-1.jpg" />
        	<div class="caption">
           	<h2 class="tituloportafolio">Impresión</h2>
        		<h2 class="subtituloportafolio">Papelería Corporativa</h2>
              	<div class="foot">
              		<a href="contactanos.php" class="miboton">
              	   		<span>Cotizar</span> <i class="icon arrow-right-white"></i> 
                	</a> 
             	</div>
        	</div>
    	</div>
    	<div class="product">
       		<img class="image escondeme" src="images/portafolio/landscape/papeleria-operativa-1.jpg" />
         	<img class="image emovil" src="images/portafolio/movil/papeleria-operativa-1.jpg" />
        	<div class="caption">
           	<h2 class="tituloportafolio">Impresión</h2>
        		<h2 class="subtituloportafolio">Papelería Operativa</h2>
              	<div class="foot">
              		<a href="contactanos.php" class="miboton">
                  	<span>Cotizar</span> <i class="icon arrow-right-white"></i> 
                 	</a> 
             	</div>
           </div>
   		</div>
       	<div class="product">
       		<img class="image escondeme" src="images/portafolio/landscape/material-publicitario-1.jpg" />
           <img class="image emovil" src="images/portafolio/movil/material-publicitario-1.jpg" />
        	<div class="caption">
           	<h2 class="tituloportafolio">Impresión</h2>
        		<h2 class="subtituloportafolio">Material Publicitario</h2>
              	<div class="foot">
              		<a href="contactanos.php" class="miboton">
                  	<span>Cotizar</span> <i class="icon arrow-right-white"></i> 
                  </a> 
             	</div>  
           </div>
    	</div>
       	<div class="product">
       		<img class="image escondeme" src="images/portafolio/landscape/hoteleria-1.jpg" />
           <img class="image emovil" src="images/portafolio/movil/hoteleria-1.jpg" />
        	<div class="caption">
           	<h2 class="tituloportafolio">Impresión</h2>
        		<h2 class="subtituloportafolio">Hotelería</h2>
              	<div class="foot">
              		<a href="contactanos.php" class="miboton">
                  	<span>Cotizar</span> <i class="icon arrow-right-white"></i> 
                 	</a> 
             	</div>
           </div>
    	</div>
       	<div class="product">
       		<img class="image escondeme" src="images/portafolio/landscape/agendas.jpg" />
           <img class="image emovil" src="images/portafolio/movil/agendas.jpg" />
        	<div class="caption">
           	<h2 class="tituloportafolio">Impresión</h2>
        		<h2 class="subtituloportafolio">Agendas</h2>
        		<div class="foot">
              		<a href="contactanos.php" class="miboton">
                  	<span>Cotizar</span> <i class="icon arrow-right-white"></i> 
                	</a> 
              	</div>
           </div>
   		</div>
       	<div class="product">
       		<img class="image escondeme" src="images/portafolio/landscape/libros.jpg" />
          	<img class="image emovil" src="images/portafolio/movil/libros.jpg" />
        	<div class="caption">
           	<h2 class="tituloportafolio">Impresión</h2>
             	<h2 class="subtituloportafolio">Libros</h2>
        		<div class="foot">
              		<a href="contactanos.php" class="miboton">
                  	<span>Cotizar</span> <i class="icon arrow-right-white"></i> 
                	</a> 
             	</div>
           </div>
    	</div>
      	<div class="product">
       		<img class="image escondeme" src="images/portafolio/landscape/revistas.jpg" />
          	<img class="image emovil" src="images/portafolio/movil/revistas.jpg" />
        	<div class="caption">
           	<h2 class="tituloportafolio">Impresión</h2>
             	<h2 class="subtituloportafolio">Revistas</h2>
        		<div class="foot">
              		<a href="contactanos.php" class="miboton">
                  	<span>Cotizar</span> <i class="icon arrow-right-white"></i> 
                	</a> 
             	</div>
           </div>
    	</div>
       	<div class="product">
       		<img class="image escondeme" src="images/portafolio/landscape/anillados.jpg" />
          	<img class="image emovil" src="images/portafolio/movil/anillados.jpg" />
        	<div class="caption">
           	<h2 class="tituloportafolio">Acabados</h2>
             	<h2 class="subtituloportafolio">Anillados</h2>
        		<div class="foot">
              		<a href="contactanos.php" class="miboton">
                  	<span>Cotizar</span> <i class="icon arrow-right-white"></i> 
                 	</a> 
             	</div>
           </div>
    	</div>
       	<div class="product">
       		<img class="image escondeme" src="images/portafolio/landscape/barniz-a-registro.jpg" />
          	<img class="image emovil" src="images/portafolio/movil/barniz-a-registro.jpg" />
        	<div class="caption">
           	<h2 class="tituloportafolio">Acabados</h2>
             		<h2 class="subtituloportafolio">Barniz a Registro</h2>
        			<div class="foot">
                 		<a href="contactanos.php" class="miboton">
                     		<span>Cotizar</span> <i class="icon arrow-right-white"></i> 
                     	</a> 
                	</div>
           </div>
    	</div>
       	<div class="product">
       		<img class="image escondeme" src="images/portafolio/landscape/barniz-brillante.jpg" />
          	<img class="image emovil" src="images/portafolio/movil/barniz-brillante.jpg" />
        	<div class="caption">
           	<h2 class="tituloportafolio">Acabados</h2>
             	<h2 class="subtituloportafolio">Barniz Brillante</h2>
        		<div class="foot">
              		<a href="contactanos.php" class="miboton">
                  	<span>Cotizar</span> <i class="icon arrow-right-white"></i> 
                 	</a> 
             	</div>
           </div>
    	</div>
       	<div class="product">
       		<img class="image escondeme" src="images/portafolio/landscape/barniz-mate.jpg" />
          	<img class="image emovil" src="images/portafolio/movil/barniz-mate.jpg" />
        	<div class="caption">
           	<h2 class="tituloportafolio">Acabados</h2>
             	<h2 class="subtituloportafolio">Barniz Mate</h2>
        		<div class="foot">
              		<a href="contactanos.php" class="miboton">
                  	<span>Cotizar</span> <i class="icon arrow-right-white"></i> 
                	</a> 
             	</div>
           </div>
    	</div>
       	<div class="product">
       		<img class="image escondeme" src="images/portafolio/landscape/encapsulado.jpg" />
          	<img class="image emovil" src="images/portafolio/movil/encapsulado.jpg" />
        	<div class="caption">
           	<h2 class="tituloportafolio">Acabados</h2>
             	<h2 class="subtituloportafolio">Encapsulado</h2>
        		<div class="foot">
                 	<a href="contactanos.php" class="miboton">
                  	<span>Cotizar</span> <i class="icon arrow-right-white"></i> 
                	</a> 
             	</div>
           </div>
    	</div>
       	<div class="product">
       		<img class="image escondeme" src="images/portafolio/landscape/laminado.jpg" />
          	<img class="image emovil" src="images/portafolio/movil/laminado.jpg" />
        	<div class="caption">
           	<h2 class="tituloportafolio">Acabados</h2>
             	<h2 class="subtituloportafolio">Laminado</h2>
        		<div class="foot">
                 	<a href="contactanos.php" class="miboton">
                 		<span>Cotizar</span> <i class="icon arrow-right-white"></i> 
                 	</a> 
              	</div>
           </div>
    	</div>
       	<div class="product">
       		<img class="image escondeme" src="images/portafolio/landscape/realzado.jpg" />
          	<img class="image emovil" src="images/portafolio/movil/realzado.jpg" />
        	<div class="caption">
           	<h2 class="tituloportafolio">Acabados</h2>
             	<h2 class="subtituloportafolio">Realzado</h2>
        		<div class="foot">
              		<a href="contactanos.php" class="miboton">
                     <span>Cotizar</span> <i class="icon arrow-right-white"></i> 
                 	</a> 
              </div>
           </div>
    	</div>
       	<div class="product" id="acrilicos-decorativos">
       		<img class="image escondeme" src="images/portafolio/landscape/acrilicos-decorativos.jpg" />
          	<img class="image emovil" src="images/portafolio/movil/acrilicos-decorativos.jpg" />
        	<div class="caption">
           	<h2 class="tituloportafolio">Gran Formato</h2>
             	<h2 class="subtituloportafolio">Acrilicos Decorativos</h2>
        		<div class="foot">
              		<a href="contactanos.php" class="miboton">
                  	<span>Cotizar</span> <i class="icon arrow-right-white"></i> 
                 	</a> 
              </div>
           </div>
    	</div>
       	<div class="product">
       		<img class="image escondeme" src="images/portafolio/landscape/acrilicos-luminosos.jpg" />
          	<img class="image emovil" src="images/portafolio/movil/acrilicos-luminosos.jpg" />
        	<div class="caption">
           	<h2 class="tituloportafolio">Gran Formato</h2>
             	<h2 class="subtituloportafolio">Acrilicos Luminosos</h2>
        		<div class="foot">
              		<a href="contactanos.php" class="miboton">
                 		<span>Cotizar</span> <i class="icon arrow-right-white"></i> 
                 	</a> 
             	</div>
           </div>
    	</div>
       	<div class="product">
       		<img class="image escondeme" src="images/portafolio/landscape/aparadores.jpg" />
          	<img class="image emovil" src="images/portafolio/movil/aparadores.jpg" />
        	<div class="caption">
           	<h2 class="tituloportafolio">Gran Formato</h2>
             	<h2 class="subtituloportafolio">Aparadores</h2>
        		<div class="foot">
              		<a href="contactanos.php" class="miboton">
                 		<span>Cotizar</span> <i class="icon arrow-right-white"></i> 
                 	</a> 
             	</div>
           </div>
    	</div>
       	<div class="product">
       		<img class="image escondeme" src="images/portafolio/landscape/caja-de-luz.jpg" />
          	<img class="image emovil" src="images/portafolio/movil/caja-de-luz.jpg" />
        	<div class="caption">
           	<h2 class="tituloportafolio">Gran Formato</h2>
             	<h2 class="subtituloportafolio">Caja de Luz</h2>
        		<div class="foot">
              		<a href="contactanos.php" class="miboton">
                 		<span>Cotizar</span> <i class="icon arrow-right-white"></i> 
                 	</a> 
              	</div>
           </div>
    	</div>
       	<div class="product">
       		<img class="image escondeme" src="images/portafolio/landscape/cristales-decorados.jpg" />
          	<img class="image emovil" src="images/portafolio/movil/cristales-decorados.jpg" />
        	<div class="caption">
           	<h2 class="tituloportafolio">Gran Formato</h2>
             	<h2 class="subtituloportafolio">Cristales Decorados</h2>
        		<div class="foot">
             		<a href="contactanos.php" class="miboton">
                  	<span>Cotizar</span> <i class="icon arrow-right-white"></i> 
                 	</a> 
             	</div>
           </div>
    	</div>
       	<div class="product">
       		<img class="image escondeme" src="images/portafolio/landscape/escenografia.jpg" />
          	<img class="image emovil" src="images/portafolio/movil/escenografia.jpg" />
        	<div class="caption">
           	<h2 class="tituloportafolio">Gran Formato</h2>
             	<h2 class="subtituloportafolio">Escenografia</h2>
        		<div class="foot">
              		<a href="contactanos.php" class="miboton">
                 		<span>Cotizar</span> <i class="icon arrow-right-white"></i> 
                	</a> 
             	</div>
           </div>
    	</div>
       	<div class="product">
       		<img class="image escondeme" src="images/portafolio/landscape/estaticos.jpg" />
          	<img class="image emovil" src="images/portafolio/movil/estaticos.jpg" />
        	<div class="caption">
           	<h2 class="tituloportafolio">Gran Formato</h2>
             	<h2 class="subtituloportafolio">Estáticos</h2>
        		<div class="foot">
              		<a href="contactanos.php" class="miboton">
                 		<span>Cotizar</span> <i class="icon arrow-right-white"></i> 
                 	</a> 
            	</div>
           </div>
    	</div>
       	<div class="product">
       		<img class="image escondeme" src="images/portafolio/landscape/estructura-prt.jpg" />
          	<img class="image emovil" src="images/portafolio/movil/estructura-prt.jpg" />
        	<div class="caption">
           	<h2 class="tituloportafolio">Gran Formato</h2>
             		<h2 class="subtituloportafolio">Estructuras PRT</h2>
        			<div class="foot">
                 		<a href="contactanos.php" class="miboton">
                     		<span>Cotizar</span> <i class="icon arrow-right-white"></i> 
                     	</a> 
                	</div>
           </div>
    	</div>
       	<div class="product">
       		<img class="image escondeme" src="images/portafolio/landscape/graficos-para-pisos-y-paredes.jpg" />
          	<img class="image emovil" src="images/portafolio/movil/graficos-para-pisos-y-paredes.jpg" />
        	<div class="caption">
           	<h2 class="tituloportafolio">Gran Formato</h2>
             	<h2 class="subtituloportafolio">Gráficos para pisos y Paredes</h2>
        		<div class="foot">
             		<a href="contactanos.php" class="miboton">
                 		<span>Cotizar</span> <i class="icon arrow-right-white"></i> 
                 	</a> 
              	</div>
           </div>
    	</div>
       	<div class="product">
       		<img class="image escondeme" src="images/portafolio/landscape/letreros.jpg" />
          	<img class="image emovil" src="images/portafolio/movil/letreros.jpg" />
        	<div class="caption">
           	<h2 class="tituloportafolio">Gran Formato</h2>
             	<h2 class="subtituloportafolio">Letreros</h2>
        		<div class="foot">
              		<a href="contactanos.php" class="miboton">
                		<span>Cotizar</span> <i class="icon arrow-right-white"></i> 
                 	</a> 
            	</div>
           </div>
    	</div>
       	<div class="product">
       		<img class="image escondeme" src="images/portafolio/landscape/materiales-pop.jpg" />
          	<img class="image emovil" src="images/portafolio/movil/materiales-pop.jpg" />
        	<div class="caption">
           	<h2 class="tituloportafolio">Gran Formato</h2>
             	<h2 class="subtituloportafolio">Materiales POP</h2>
        		<div class="foot">
             		<a href="contactanos.php" class="miboton">
                		<span>Cotizar</span> <i class="icon arrow-right-white"></i> 
                	</a> 
              	</div>
           </div>
    	</div>
       	<div class="product">
       		<img class="image escondeme" src="images/portafolio/landscape/pendones.jpg" />
          	<img class="image emovil" src="images/portafolio/movil/pendones.jpg" />
        	<div class="caption">
           	<h2 class="tituloportafolio">Gran Formato</h2>
             	<h2 class="subtituloportafolio">Pendones</h2>
        		<div class="foot">
              		<a href="contactanos.php" class="miboton">
                		<span>Cotizar</span> <i class="icon arrow-right-white"></i> 
                 	</a> 
             	</div>
           </div>
    	</div>
       	<div class="product">
       		<img class="image escondeme" src="images/portafolio/landscape/rotulacion-de-vehiculos.jpg" />
          	<img class="image emovil" src="images/portafolio/movil/rotulacion-de-vehiculos.jpg" />
        	<div class="caption">
           	<h2 class="tituloportafolio">Gran Formato</h2>
             	<h2 class="subtituloportafolio">Rotulación de Vehículos</h2>
        		<div class="foot">
             		<a href="contactanos.php" class="miboton">
                		<span>Cotizar</span> <i class="icon arrow-right-white"></i> 
                 	</a> 
             	</div>
           </div>
    	</div>
       	<div class="product">
       		<img class="image escondeme" src="images/portafolio/landscape/stands.jpg" />
          	<img class="image emovil" src="images/portafolio/movil/stands.jpg" />
        	<div class="caption">
           	<h2 class="tituloportafolio">Gran Formato</h2>
             	<h2 class="subtituloportafolio">Stands</h2>
        		<div class="foot">
             		<a href="contactanos.php" class="miboton">
                 		<span>Cotizar</span> <i class="icon arrow-right-white"></i> 
                 	</a> 
             	</div>
           </div>
    	</div>
       	<div class="product">
       		<img class="image escondeme" src="images/portafolio/landscape/vallas-publicitarias.jpg" />
          	<img class="image emovil" src="images/portafolio/movil/vallas-publicitarias.jpg" />
        	<div class="caption">
           	<h2 class="tituloportafolio">Gran Formato</h2>
             	<h2 class="subtituloportafolio">Vallas Publicitarias</h2>
        		<div class="foot">
              		<a href="contactanos.php" class="miboton">
                 		<span>Cotizar</span> <i class="icon arrow-right-white"></i> 
                 	</a> 
             	</div>
           </div>
    	</div>
       	<div class="product">
       		<img class="image escondeme" src="images/portafolio/landscape/x-spiders.jpg" />
          	<img class="image emovil" src="images/portafolio/movil/x-spiders.jpg" />
        	<div class="caption">
           	<h2 class="tituloportafolio">Gran Formato</h2>
             	<h2 class="subtituloportafolio">X-Spiders</h2>
        		<div class="foot">
             		<a href="contactanos.php" class="miboton">
                 		<span>Cotizar</span> <i class="icon arrow-right-white"></i> 
                 	</a> 
             	</div>
           </div>
    	</div>
	</div>
   	<?php /*include("componentes/formulariomovil.php");*/ ?>
	<?php /*include("componentes/libreria-pie.php");*/ ?>
	<?php /*include("componentes/piemovil.php");*/ ?>
	<?php /*include("componentes/pie.php");*/ ?>
   	<?php /*include("componentes/seguimiento.php");*/ ?>
</body>
</html>