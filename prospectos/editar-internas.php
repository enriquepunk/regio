<?php 
	session_start();
	if (!isset($_SESSION["usu_nombre"]))
	{
		header("Location: login.php"); 
		exit(); 
		session_destroy();
	}
	$usu_nombre=$_SESSION["usu_nombre"];
	$imagen=$_SESSION["imagen"];
	
	include("lib/conexion.php"); 
	
	$id=$_GET['id'];
	$sql_cas=mysql_query("SELECT * FROM internas WHERE int_id= $id",$conexion);
	$row_cas=mysql_fetch_array($sql_cas);
?>
<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sistema Administrativo | Grupo Cancún</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:100,900,800,700,600,500,400,300,200' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" />
	<link rel="stylesheet" href="font-awesome/css/font-awesome.css" type="text/css" />
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript"  src="js/bootstrap.js"></script>
	<script type="text/javascript"  src="js/script.js"></script>
	<script src="js/jquery-ui.custom.min.js"></script> 
    
	 	<link rel="stylesheet" type="text/css" href="lib/css/bootstrap.min.css" />
   	<link rel="stylesheet" type="text/css" href="src/bootstrap-wysihtml5.css" />
   	<script src="lib/js/wysihtml5-0.3.0.js"></script>
   	<script src="lib/js/jquery-1.7.2.min.js"></script>
   	<script src="lib/js/bootstrap.min.js"></script>
   	<script src="src/bootstrap3-wysihtml5.js"></script>
	
</head>
<body>
	<div class="wrapper">
		<?php include("componentes/menu.php"); ?>
		<section class="main-section">
			<?php include("componentes/menu-responsivo.php"); ?>
			<div class="container">
				<div class="row">
					<div class="main-bg">
						<div class="heading-buttons-sec">
							<h1>Editar Interna</h1>
						</div>
						<div class="body-sec">
							<div class="col-md-12">
								<div class="widget-body">
									<div class="widget-heading blue">
										<i class="icon-table pull-left"></i><h3 class="pull-left">Actualice los datos mostrados</h3>
									</div>
									<div class="widget-sec">
								<form class="sec" role="form" name="guardar" id="validar_form" method="post" action="lib/actualizar-internas.php" enctype="multipart/form-data">
                                <input id="id" name="id" type="hidden" value="<?php echo $id; ?>" />
                                
                        			<div class="form-group">
										<label for="exampleInputEmail1">Titulo:</label>
										<input id="titulo" name="titulo" type="text" value="<?php echo $row_cas['int_titulo']; ?>"  class="form-control" />
						 			</div>
                              	<hr>
                                	
                               	<label style="float:left;">Slider</label>      
                               	<a onClick="muestra('sliders')"; style="float:right;">
                               		<img src="images/plus.png" width="24" />
                               	</a>
                              	<div style="clear:both"></div>
                                	<hr>
                               	<div id="sliders">   
                               		<div class="form-group">
											<label for="exampleInputEmail1" style="font-weight:100;">Slider Full (2236 x 400 px):</label>
											<input id="slider1" name="slider1" type="file"  class="form-control" />
						 				</div>
                                   	<div class="form-group">
											<label for="exampleInputEmail1" style="font-weight:100;">Slider Móvil (640 x 300 px):</label>
											<input id="slider2" name="slider2" type="file"  class="form-control" />
						 				</div> 
                                	</div> 
                                <hr>
                                <label style=" float:left;">Datos Internas</label> 
                                <a onClick="muestra('landing')"; style="float:right; margin-bottom:-20px;">
                               		<img src="images/plus.png" width="24" />
                               	</a>
                              	<div style="clear:both"></div>
                                <hr>
                                	<div id="landing">
                                		<div class="form-group">
											<label for="exampleInputEmail1" style="font-weight:100;">Descripción:</label>
                                       	<textarea id="descripcion" name="descripcion" class="form-control" rows="7"><?php echo $row_cas['int_descripcion']; ?></textarea>
						 				</div>
                                    	
                                		<div class="form-group">
											<label for="exampleInputEmail1" style="font-weight:100;">Pleca:</label>
											<input id="pleca" name="pleca" type="text" value="<?php echo $row_cas['int_pleca']; ?>"  class="form-control" />
						 				</div>        
                               	</div>
                                	<hr>
                               	<label style="float:left;">Posicionamiento Web</label>       
                                <a onClick="muestra('seo')"; style="float:right; margin-bottom:-20px;">
                               		<img src="images/plus.png" width="24" />
                               	</a>
                              	<div style="clear:both"></div>
                                <hr> 
                               	<div id="seo">
                                		<div class="form-group">
											<label for="exampleInputEmail1" style="font-weight:100;">Titulo SEO:</label>
											<input id="title" name="title" type="text" value="<?php echo $row_cas['int_title']; ?>"  class="form-control" />
						 				</div>
                                    	
                                		<div class="form-group">
											<label for="exampleInputEmail1" style="font-weight:100;">Descripción SEO:</label>
											<input id="description" name="description" type="text" value="<?php echo $row_cas['int_description']; ?>"  class="form-control" />
						 				</div>        
                               	</div>
                               	<hr>
                                <label style="float:left;">Sección 1</label> 
                          		<a onClick="muestra('seccion1')"; style="float:right; margin-bottom:-20px;">
                               		<img src="images/plus.png" width="24" />
                               	</a>
                              	<div style="clear:both"></div>
                                <hr> 
                                <div id="seccion1">   
                              		<div class="form-group">
											<label for="exampleInputEmail1" style="font-weight:100;">Titulo Sección 1:</label>
											<input id="tituloseccion1" name="tituloseccion1" type="text" value="<?php echo $row_cas['int_titulo_barra_1']; ?>"  class="form-control" />
						 				</div>
                                   	<div class="form-group">
											<label for="exampleInputEmail1" style="font-weight:100;">Contenido Sección 1:</label>
											<textarea id="contenidoseccion1" name="contenidoseccion1" class="form-control" rows="7"  class="form-control" ><?php echo $row_cas['int_contenido_barra_1']; ?></textarea>
						 				</div>
                                   	<div class="form-group">
											<label for="exampleInputEmail1" style="font-weight:100;">Imagen 1 (560 x 426 px):</label>
											<input id="imagen1seccion1" name="imagen1seccion1" type="file"  class="form-control" />
						 				</div>
                                   	<div class="form-group">
											<label for="exampleInputEmail1" style="font-weight:100;">Imagen 2 (560 x 426 px):</label>
											<input id="imagen2seccion1" name="imagen2seccion1" type="file"  class="form-control" />
						 				</div> 
                                   	<div class="form-group">
											<label for="exampleInputEmail1" style="font-weight:100;">Imagen 3 (560 x 426 px):</label>
											<input id="imagen3seccion1" name="imagen3seccion1" type="file"  class="form-control" />
						 				</div>
                                   	<div class="form-group">
											<label for="exampleInputEmail1" style="font-weight:100;">Imagen 4 (560 x 426 px):</label>
											<input id="imagen4seccion1" name="imagen4seccion1" type="file"  class="form-control" />
						 				</div>  
                               	</div>	
                              	<hr>
                                	<label style="float:left;">Sección 2</label>    	    
                                 <a onClick="muestra('seccion2')"; style="float:right; margin-bottom:-20px;">
                               		<img src="images/plus.png" width="24" />
                               	</a>
                              	<div style="clear:both"></div>
                                <hr>                                   	
                                <div id="seccion2">   
                              		<div class="form-group">
											<label for="exampleInputEmail1"  style="font-weight:100;">Titulo Sección 2:</label>
											<input id="tituloseccion2" name="tituloseccion2" type="text" value="<?php echo $row_cas['int_titulo_barra_2']; ?>"  class="form-control"  />
						 				</div>
                                   	<div class="form-group">
											<label for="exampleInputEmail1"  style="font-weight:100;">Contenido Sección 2:</label>
											<textarea id="contenidoseccion2" name="contenidoseccion2" class="form-control" rows="7"><?php echo $row_cas['int_contenido_barra_2']; ?></textarea>
						 				</div>
                                   	<div class="form-group">
											<label for="exampleInputEmail1"  style="font-weight:100;">Imagen 1 (560 x 426 px):</label>
											<input id="imagen1seccion2" name="imagen1seccion2" type="file"  class="form-control" />
						 				</div>
                                   	<div class="form-group">
											<label for="exampleInputEmail1"  style="font-weight:100;">Imagen 2 (560 x 426 px):</label>
											<input id="imagen2seccion2" name="imagen2seccion2" type="file"  class="form-control" />
						 				</div> 
                                   	<div class="form-group">
											<label for="exampleInputEmail1"  style="font-weight:100;">Imagen 3 (560 x 426 px):</label>
											<input id="imagen3seccion2" name="imagen3seccion2" type="file"  class="form-control" />
						 				</div>
                                   	<div class="form-group">
											<label for="exampleInputEmail1"  style="font-weight:100;">Imagen 4 (560 x 426 px):</label>
											<input id="imagen4seccion2" name="imagen4seccion2" type="file"  class="form-control" />
						 				</div>  
                                	</div>	
                              	<hr>
                                <label style=" float:left;">Sección 3</label> 
                                <a onClick="muestra('seccion3')"; style="float:right; margin-bottom:-20px;">
                               		<img src="images/plus.png" width="24" />
                               	</a>
                              	<div style="clear:both"></div>
                                <hr> 
                                <div id="seccion3">   
                              		<div class="form-group">
											<label for="exampleInputEmail1"  style="font-weight:100;">Titulo Sección 3:</label>
											<input id="tituloseccion3" name="tituloseccion3" type="text" value="<?php echo $row_cas['int_titulo_barra_3']; ?>"  class="form-control" />
						 				</div>
                                   	<div class="form-group">
											<label for="exampleInputEmail1"  style="font-weight:100;">Contenido Sección 3:</label>
											<textarea id="contenidoseccion3" name="contenidoseccion3" class="form-control" rows="7" class="form-control" ><?php echo $row_cas['int_contenido_barra_3']; ?></textarea>
						 				</div>
                                   	<div class="form-group">
											<label for="exampleInputEmail1"  style="font-weight:100;">Imagen 1 (560 x 426 px):</label>
											<input id="imagen1seccion3" name="imagen1seccion3" type="file"  class="form-control" />
						 				</div>
                                   	<div class="form-group">
											<label for="exampleInputEmail1"  style="font-weight:100;">Imagen 2 (560 x 426 px):</label>
											<input id="imagen2seccion3" name="imagen2seccion3" type="file"  class="form-control" />
						 				</div> 
                                   	<div class="form-group">
											<label for="exampleInputEmail1"  style="font-weight:100;">Imagen 3 (560 x 426 px):</label>
											<input id="imagen3seccion3" name="imagen3seccion3" type="file"  class="form-control" />
						 				</div>
                                   	<div class="form-group">
											<label for="exampleInputEmail1"  style="font-weight:100;">Imagen 4 (560 x 426 px):</label>
											<input id="imagen4seccion3" name="imagen4seccion3" type="file" />
						 				</div> 
                               	</div> 	
                              	<hr>
                                <label style="float:left;">Sección 4</label> 
                                <a onClick="muestra('seccion4')"; style="float:right; margin-bottom:-20px;">
                               		<img src="images/plus.png" width="24" />
                               	</a>
                              	<div style="clear:both"></div>
                                <hr> 
                                <div id="seccion4">   
                              		<div class="form-group">
											<label for="exampleInputEmail1"  style="font-weight:100;">Titulo Sección 4:</label>
											<input id="tituloseccion4" name="tituloseccion4" type="text" value="<?php echo $row_cas['int_titulo_barra_4']; ?>" />
						 				</div>
                                   	<div class="form-group">
											<label for="exampleInputEmail1"  style="font-weight:100;">Contenido Sección 4:</label>
											<textarea id="contenidoseccion4" name="contenidoseccion4" class="form-control" rows="7"><?php echo $row_cas['int_contenido_barra_4']; ?></textarea>
						 				</div>
                                   	<div class="form-group">
											<label for="exampleInputEmail1" style="font-weight:100;">Imagen 1 (560 x 426 px):</label>
											<input id="imagen1seccion4" name="imagen1seccion4" type="file"  class="form-control" />
						 				</div>
                                   	<div class="form-group">
											<label for="exampleInputEmail1"  style="font-weight:100;">Imagen 2 (560 x 426 px):</label>
											<input id="imagen2seccion4" name="imagen2seccion4" type="file"  class="form-control" />
						 				</div> 
                                   	<div class="form-group">
											<label for="exampleInputEmail1"  style="font-weight:100;">Imagen 3 (560 x 426 px):</label>
											<input id="imagen3seccion4" name="imagen3seccion4" type="file"  class="form-control" />
						 				</div>
                                   	<div class="form-group">
											<label for="exampleInputEmail1" style="font-weight:100;">Imagen 4 (560 x 426 px):</label>
											<input id="imagen4seccion4" name="imagen4seccion4" type="file"  class="form-control" />
						 				</div>
                                	</div>  	
                              	<hr>
                                <label style="float:left;">Sección 5</label> 
                                <a onClick="muestra('seccion5')"; style="float:right; margin-bottom:-20px;">
                               		<img src="images/plus.png" width="24" />
                               	</a>
                              	<div style="clear:both"></div>
                                <hr>  
                              	<div id="seccion5">   
                              		<div class="form-group">
											<label for="exampleInputEmail1"  style="font-weight:100;">Titulo Sección 5:</label>
											<input id="tituloseccion5" name="tituloseccion5" type="text" value="<?php echo $row_cas['int_titulo_barra_5']; ?>"  class="form-control" />
						 				</div>
                                   	<div class="form-group">
											<label for="exampleInputEmail1"  style="font-weight:100;">Contenido Sección 5:</label>
											<textarea id="contenidoseccion5" name="contenidoseccion5" class="form-control" rows="7" class="form-control" ><?php echo $row_cas['int_contenido_barra_5']; ?></textarea>
						 				</div>
                                   	<div class="form-group">
											<label for="exampleInputEmail1" style="font-weight:100;">Imagen 1 (560 x 426 px):</label>
											<input id="imagen1seccion5" name="imagen1seccion1" type="file"  class="form-control" />
						 				</div>
                                   	<div class="form-group">
											<label for="exampleInputEmail1"  style="font-weight:100;">Imagen 2 (560 x 426 px):</label>
											<input id="imagen2seccion5" name="imagen2seccion1" type="file"  class="form-control" />
						 				</div> 
                                   	<div class="form-group">
											<label for="exampleInputEmail1"  style="font-weight:100;">Imagen 3 (560 x 426 px):</label>
											<input id="imagen3seccion5" name="imagen3seccion1" type="file"  class="form-control" />
						 				</div>
                                   	<div class="form-group">
											<label for="exampleInputEmail1"  style="font-weight:100;">Imagen 4 (560 x 426 px):</label>
											<input id="imagen4seccion5" name="imagen4seccion1" type="file"  class="form-control" />
						 				</div>  
                                	</div>	
                              	 <hr>
                                 <label style="float:left;">Sección 6</label>   
                                 <a onClick="muestra('seccion6')"; style="float:right; margin-bottom:-20px;">
                               		<img src="images/plus.png" width="24" />
                               	</a>
                              	<div style="clear:both"></div>
                                <hr>                                   	
                                <div id="seccion6">   
                              		<div class="form-group">
											<label for="exampleInputEmail1"  style="font-weight:100;">Titulo Sección 6:</label>
											<input id="tituloseccion6" name="tituloseccion6" type="text" value="<?php echo $row_cas['int_titulo_barra_6']; ?>"  class="form-control" />
						 				</div>
                                   	<div class="form-group">
											<label for="exampleInputEmail1"  style="font-weight:100;">Contenido Sección 6:</label>
											<textarea id="contenidoseccion6" name="contenidoseccion6" class="form-control" rows="7" class="form-control" ><?php echo $row_cas['int_contenido_barra_6']; ?></textarea>
						 				</div>
                                   	<div class="form-group">
											<label for="exampleInputEmail1"  style="font-weight:100;">Imagen 1 (560 x 426 px):</label>
											<input id="imagen1seccion6" name="imagen1seccion6" type="file"  class="form-control" />
						 				</div>
                                   	<div class="form-group">
											<label for="exampleInputEmail1"  style="font-weight:100;">Imagen 2 (560 x 426 px):</label>
											<input id="imagen2seccion6" name="imagen2seccion6" type="file"  class="form-control" />
						 				</div> 
                                   	<div class="form-group">
											<label for="exampleInputEmail1"  style="font-weight:100;">Imagen 3 (560 x 426 px):</label>
											<input id="imagen3seccion6" name="imagen3seccion6" type="file"  class="form-control" />
						 				</div>
                                   	<div class="form-group">
											<label for="exampleInputEmail1" style="font-weight:100;">Imagen 4 (560 x 426 px):</label>
											<input id="imagen4seccion6" name="imagen4seccion6" type="file" />
						 				</div>  
                               	</div>	
                              	<hr>
                                <label style="float:left;">Sección 7</label>   	
                                <a onClick="muestra('seccion7')"; style="float:right; margin-bottom:-20px;">
                               		<img src="images/plus.png" width="24" />
                               	</a>
                              	<div style="clear:both"></div>
                                <hr> 
                                <div id="seccion7">   
                              		<div class="form-group">
											<label for="exampleInputEmail1"  style="font-weight:100;">Titulo Sección 7:</label>
											<input id="tituloseccion7" name="tituloseccion7" type="text" value="<?php echo $row_cas['int_titulo_barra_7']; ?>"  class="form-control" />
						 				</div>
                                   	<div class="form-group">
											<label for="exampleInputEmail1" style="font-weight:100;">Contenido Sección 7:</label>
											<textarea id="contenidoseccion7" name="contenidoseccion7" class="form-control" rows="7" class="form-control" ><?php echo $row_cas['int_contenido_barra_7']; ?></textarea>
						 				</div>
                                   	<div class="form-group">
											<label for="exampleInputEmail1"  style="font-weight:100;">Imagen 1 (560 x 426 px):</label>
											<input id="imagen1seccion7" name="imagen1seccion7" type="file"  class="form-control" />
						 				</div>
                                   	<div class="form-group">
											<label for="exampleInputEmail1"  style="font-weight:100;">Imagen 2 (560 x 426 px):</label>
											<input id="imagen2seccion7" name="imagen2seccion7" type="file"  class="form-control" />
						 				</div> 
                                   	<div class="form-group">
											<label for="exampleInputEmail1" style="font-weight:100;">Imagen 3 (560 x 426 px):</label>
											<input id="imagen3seccion7" name="imagen3seccion7" type="file"  class="form-control" />
						 				</div>
                                   	<div class="form-group">
											<label for="exampleInputEmail1" style="font-weight:100;">Imagen 4 (560 x 426 px):</label>
											<input id="imagen4seccion7" name="imagen4seccion7" type="file"  class="form-control" />
						 				</div>  	
                                	</div>
                              	<hr>
                                <label style="float:left;">Sección 8</label> 
                                <a onClick="muestra('seccion8')"; style="float:right; margin-bottom:-20px;">
                               		<img src="images/plus.png" width="24" />
                               	</a>
                              	<div style="clear:both"></div>
                                <hr> 
                                <div id="seccion8">   
                              		<div class="form-group">
											<label for="exampleInputEmail1" style="font-weight:100;">Titulo Sección 8:</label>
											<input id="tituloseccion8" name="tituloseccion8" type="text" value="<?php echo $row_cas['int_titulo_barra_8']; ?>"  class="form-control" />
						 				</div>
                                   	<div class="form-group">
											<label for="exampleInputEmail1" style="font-weight:100;">Contenido Sección 8:</label>
											<textarea id="contenidoseccion8" name="contenidoseccion8" class="form-control" rows="7" class="form-control" ><?php echo $row_cas['int_contenido_barra_8']; ?></textarea>
						 				</div>
                                   	<div class="form-group">
											<label for="exampleInputEmail1" style="font-weight:100;">Imagen 1 (560 x 426 px):</label>
											<input id="imagen1seccion8" name="imagen1seccion8" type="file"  class="form-control" />
						 				</div>
                                   	<div class="form-group">
											<label for="exampleInputEmail1" style="font-weight:100;">Imagen 2 (560 x 426 px):</label>
											<input id="imagen2seccion8" name="imagen2seccion8" type="file"  class="form-control" />
						 				</div> 
                                   	<div class="form-group">
											<label for="exampleInputEmail1" style="font-weight:100;">Imagen 3 (560 x 426 px):</label>
											<input id="imagen3seccion8" name="imagen3seccion8" type="file"  class="form-control" />
						 				</div>
                                   	<div class="form-group">
											<label for="exampleInputEmail1" style="font-weight:100;">Imagen 4 (560 x 426 px):</label>
											<input id="imagen4seccion8" name="imagen4seccion8" type="file"  class="form-control" />
						 				</div>  	
                                	</div>
                              	
                                
						  			<button type="submit" class="btn gray pull-right" id="botoncito" name="botoncito" >Actualizar</button>
								</form>
							</div>
						</div>
					</div>
				</div>	
           </div>
		</section>
	</div>
    <script>
    	$('#descripcion').wysihtml5();
	</script>
	<script>
    	$('#contenidoseccion1').wysihtml5();
	</script>
   	<script>
    	$('#contenidoseccion2').wysihtml5();
	</script>
   	<script>
    	$('#contenidoseccion3').wysihtml5();
	</script>
   	<script>
    	$('#contenidoseccion4').wysihtml5();
	</script>
   	<script>
    	$('#contenidoseccion5').wysihtml5();
	</script>
   	<script>
    	$('#contenidoseccion6').wysihtml5();
	</script>
   	<script>
    	$('#contenidoseccion7').wysihtml5();
	</script>
   	<script>
    	$('#contenidoseccion8').wysihtml5();
	</script>
</body>
</html>