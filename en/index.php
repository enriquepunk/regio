<?php
	$x=1; 
?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Grupo Regio es la imprenta en Cancún, México, líder en Soluciones Integrales de Comunicación Gráfica.</title>
	<meta name="description" content="Con más de 20 años en el mercado de impresos, Grupo Regio es la imprenta en digital, offset y gran formato más importante del sureste." />
	<meta name="author" content="HDS Consultoria">
	<link rel="alternate" href="http://www.gruporegio.com.mx" hreflang="es-mx" />
	<link type="image/x-icon" href="favicon.ico" rel="icon" />
	<link type="image/x-icon" href="favicon.ico" rel="shortcut icon" />
	<link rel="stylesheet" media="all" href="css/vendor/base.css" />
   	<link rel="stylesheet" media="all" href="css/vendor/skeleton.css" />
	<link rel="stylesheet" media="all" href="css/master.css" />
   	<script src="js/vendor/jquery/jquery.tools.min.js"></script>
	<script src="js/vendor/jquery/divscroll/jquery-ui-1.8.23.custom.min.js" type="text/javascript"></script>
	<script src="js/cuda/cuda.min.js"></script>
	<script src="js/vendor/jquery/jquery.carouFredSel-6.2.1-packed.js"></script>
	<script src="js/vendor/jquery/jquery.mousewheel.min.js"></script>
	<script src="js/vendor/jquery/jquery.touchSwipe.min.js"></script>
	<script src="js/vendor/jquery/jquery.transit.min.js"></script>
	<script src="js/vendor/jquery/jquery.ba-throttle-debounce.min.js"></script>
	<style>
		.url-internas:hover
		{ 
			opacity:0.6;
		}
		.pageination a 
		{
    		background: url("images/nav1.png") no-repeat scroll 0 0 rgba(0, 0, 0, 0) !important;
    		display: inline-block !important;
    		height: 16px !important;
    		margin-right: -2px !important;
    		width: 17px !important;
		}
		.pageination a.selected 
		{
    	 	background: url("images/nav2.png") no-repeat scroll 0 0 rgba(0, 0, 0, 0) !important;
   	 		display: inline-block !important;
    		height: 16px !important;
    		margin-right: -2px !important;
    		width: 17px !important;
		}
		#homepage_info 
		{
			position:absolute;
		}
		.boton-almacenamiento 
		{
    		background: none repeat scroll 0 0 #60a369 !important;
   		 	border: medium none !important;
    		border-radius: 2px !important;
    		color: #fff !important;
    		cursor: pointer !important;
    		display: inline-block !important;
   		 	float: left !important;
    		font-family: Arial !important;
    		font-size: 12px !important;
    		letter-spacing: 1px !important;
    		margin: 3px -11px 5px 87px !important;
    		padding: 6px !important;
    		text-transform: none !important;
			 margin-left: 100px !important;
		}
	</style>
</head>
<body >
	<?php include("componentes/menumovil.php"); ?>
	<?php include("componentes/chat.php"); ?>
	<div class="sb-container">
  		<div class="mp-pusher" id="mp-pusher">
    		<div class="scroller">
      			<div class="scroller-inner">
        			<div class="sb-content clearfix">
						<?php include("componentes/cabecera.php"); ?>                      	       
          				<section id="SECTION_BODY">           
							<div id="wrapper">
  								<div class="pageination" id="carousel_pag"></div>
                           	<?php include("componentes/slider.php"); ?>
                        	</div>
                       	<?php include("componentes/piemovil.php"); ?>
							<?php include("componentes/pie.php"); ?>
                   	</section>
               	</div>
      			</div>
   	 		</div>
  		</div>
	</div>
	<?php include("componentes/libreria.php"); ?>
   	<?php include("componentes/seguimiento.php"); ?>
	<script>
  		$(function(){ $("label.inset").inFieldLabels(); });
 		$(function() 
		{
    		"use strict";  
    		var theWindow = $(window)
    		var number_of_slides = $('#carousel .slide').length;
    		$('#carousel').carouFredSel({
      			width: theWindow.width(),
      			scroll: {
       	 			pauseOnHover: false
      			},
      			swipe: {
       				onTouch: true 
      			},
      			height: theWindow.height(),
      			next: { 
        			key: "right"
      			},
      			prev: {
        			key: "left"
      			},
      			align: false,
      			auto: 8500,
      			pagination: "#carousel_pag",
      			items: {
        			visible: 1,
        			width: 'variable',
        			height: 'variable'
      			}
    	});
    	$(window).resize(function() 
		{
      		var newCss = {
        		width: theWindow.width(),
        		height: theWindow.height()
      		};
      		$('#carousel').css( 'width', newCss.width*number_of_slides );
      		$('#carousel').css( 'height', newCss.height );
      		$('#carousel').parent('.caroufredsel_wrapper').css( newCss );
      		$('#carousel .slide').css( newCss );
    		}).resize();
    		$('#carousel_curtain').fadeOut(1500);
		});	
	</script>
</body>
</html>