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
	$sql_cas=mysql_query("SELECT * FROM slider WHERE sli_id= $id",$conexion);
	$row_cas=mysql_fetch_array($sql_cas);
?>
<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sistema Administrativo | Grupo Regio</title>
   	<link rel="stylesheet" type="text/css" href="jquery.cleditor.css" />
   	<script type="text/javascript" src="jquery.cleditor.min.js"></script>
   	<script type="text/javascript">
   		$(document).ready(function () 
		{ 
			$("#contenido").cleditor(); 
		});
   	</script> 
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
							<h1>Editar Slider</h1>
						</div>
						<div class="body-sec">
							<div class="col-md-12">
								<div class="widget-body">
									<div class="widget-heading blue">
										<i class="icon-table pull-left"></i><h3 class="pull-left">Actualice los datos mostrados</h3>
									</div>
									<div class="widget-sec">
										<form class="sec" role="form" name="guardar" id="validar_form" method="post" action="lib/actualizar-slider.php" enctype="multipart/form-data">
                                			<input id="id" name="id" type="hidden" value="<?php echo $id; ?>" />
                        					<div class="form-group">
												<label for="exampleInputEmail1">Titulo:</label>
												<input id="titulo" name="titulo" type="text" value="<?php echo $row_cas['sli_titulo']; ?>" class="form-control"  />
						 					</div>
                                			<div class="form-group">
												<label for="exampleInputEmail1">Descripción:</label>
												<input id="descripcion" name="descripcion" type="text" value="<?php echo $row_cas['sli_descripcion']; ?>"  class="form-control" />
						 					</div>
                              			<div class="form-group">
												<label for="exampleInputEmail1">Url:</label>
												<input id="liga" name="liga" type="text" value="<?php echo $row_cas['sli_url']; ?>" class="form-control"  />
						 					</div> 
                                			<hr>
                                			<div class="form-group">      
                               				<label for="exampleInputEmail1">Slider <span style="font-weight:normal; font-size:12px;">(1920 x 1080 pixeles)</span>:</label>
												<input id="imagen1" name="imagen1" type="file" class="form-control"  />
                                    		<br>
                                    		<img src="images/slider/<?php echo $row_cas['sli_imagen']; ?>" width="400px" />
						 					</div>
                                			<hr>  	
						  					<div class="form-group">      
                               				<label for="exampleInputEmail1">Slider Móvil <span style="font-weight:normal; font-size:12px;">(360 x 640 pixeles)</span>:</label>
												<input id="imagen2" name="imagen2" type="file"  class="form-control"  />
                                    		<br>
                                    		<img src="images/slider/<?php echo $row_cas['sli_imagen_movil']; ?>" width="100px" />
						 					</div>  
                                			<hr>
                               			<!--div class="form-group">      
                               				<label for="exampleInputEmail1">Slider Landscape <span style="font-weight:normal; font-size:12px;">(640 x 360 pixeles)</span>:</label>
												<input id="imagen3" name="imagen3" type="file" class="form-control"  />
                                   			<br>
                                    		<img src="images/slider/<?php echo $row_cas['sli_landscape']; ?>" width="200px" />
						 					</div>
                                			<hr-->  	
                                			<button type="submit" class="btn gray pull-right" id="botoncito" name="botoncito" >Actualizar</button>
										</form>
									</div>
								</div>
							</div>
						</div>	
           		</div>
              	</div>
       		</div>
		</section>
	</div>
</body>
</html>