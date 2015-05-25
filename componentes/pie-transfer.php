  <style>
    	#homepage_info {
   			background: none !important;
       		bottom: 0;
    		clear: both;
    		color: #fff;
    		min-height: 92px;
    		padding-top: 15px;
    		position: absolute !important;
    		width: 100%;
			margin-top:-24px;
			border:none !important;
		}
	</style>
<link rel="stylesheet" href="css/colorbox.css" />
		<!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script-->
		<script src="js/jquery.colorbox.js"></script>
		<script>
			$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				$(".group1").colorbox({rel:'group1'});
				$(".group2").colorbox({rel:'group2', transition:"fade"});
				$(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
				$(".group4").colorbox({rel:'group4', slideshow:true});
				$(".ajax").colorbox();
				$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
				$(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
				$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
				$(".inline").colorbox({inline:true, width:"50%"});
				$(".callbacks").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});

				$('.non-retina').colorbox({rel:'group5', transition:'none'})
				$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
		</script>
<section id="homepage_info">
	<div style="background: none repeat scroll 0% 0% rgb(29, 56, 108); width: 100%; float: left; padding-top: 15px; padding-bottom: 0px; margin-top:9px; ">
		<div id="unopie6" style=" width:960px; margin-left:auto; margin-right:auto;">
                                  		<div id="unopie4" style="width:205px; float:left;"><a href="eco-regio.php" class="url-internas" style="margin-right:5px;"><img src="images/fsc_footer.png" style="width:88px; margin-top:13px;" /></a><a href="empresa-socialmente-responsable.php" class="url-internas"><img src="images/esr.png" style="width:108px; margin-bottom:104px;" /></a></div>
                                        	<div id="unopie3" style="width:630px; float:left; text-align:center; margin-top:10px;">
                                       			<a href="index.php" target="_blank" style="color:#FFF; margin-right:35px;">INICIO</a>
                                       			<img src="assets/img/points.png" style="height: 20px ! important; margin-bottom: -5px;" />
                                       	 		<a href="contacto.php#cancun" style="color:#FFF; margin-right:35px;">CANCÚN</a>
                                        		<img src="assets/img/points.png" style="height: 20px ! important; margin-bottom: -5px;" />
                                       			<a href="contacto.php#miami" style="color:#FFF; margin-right:35px;">MIAMI</a>
                                        		<img src="assets/img/points.png" style="height: 20px ! important; margin-bottom: -5px;" />
                                       			<a href="contacto.php#puntacana" style="color:#FFF; margin-right:35px;">PUNTA CANA</a>
                                               <a href="contacto.php" target="_blank" style="color:#FFF; margin-right:35px;">CONTACTO</a>
                                   				<p style="margin-top:15px; line-height:16px; font-weight:normal; font-size:11px;">© 2015. Grupo Regio. Todos los Derechos Reservados. Diseño y Posicionamiento Web <a href="http://www.hdsconsultoria.com" style="font-weight:bold; color:#FFF; text-decoration:none;">HDS Consultoría</a>.</p>
                                                <p>
                                                  	<a class='youtube' href="http://www.youtube.com/embed/LpvphxwU3mo?autoplay=true&rel=0&amp;wmode=transparent" style="margin-right:10px; "><img src="images/video1.png" /></a>
                                                   <a class='youtube' href="http://www.youtube.com/embed/y2yPHrYnJQo?autoplay=true&rel=0&amp;wmode=transparent"><img src="images/video2.png" /></a>
                                               	</p>
                                        	</div>
                                           <div id="unopie5" style="width:100px; float:right; margin-top:20px;">
                                           		<a href="#" ><img src="assets/img/facebook.png" style="width:32px;"/></a>
                                              	<a href="#" style="margin-left:5px;"><img src="assets/img/twitter.png" style="width:32px;"/></a>
                                           </div>
                                           <div style="clear:both"></div>
                                		</div>    
                                	</div>
								</section>