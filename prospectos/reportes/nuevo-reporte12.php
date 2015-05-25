<?php 
	$clave=date('Ymd')."".rand(5,50)."".rand(6,60)."".rand(7,70)."-A";
	$usuario=2; 
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
    <script src="js/validar.js" type="text/javascript"></script>
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
				<h1>Nuevo Reporte</h1>
			</div>
			<div class="body-sec">
				<div class="col-md-12">
					<div class="widget-body">
						<div class="widget-heading blue">
							<i class="icon-table pull-left"></i><h3 class="pull-left">Favor de llenar los siguientes datos:</h3>
						</div>
						<div class="widget-sec">
							<div class="widget-sec">
								<form class="sec" role="form" name="guardar" id="validar_form" method="post" action="lib/ingresar_reporte.php" enctype="multipart/form-data">
						  			<input type="hidden" id="usuario" name="usuario" value="<?php echo $usuario; ?>">
                                	<div class="form-group">
										<label for="exampleInputEmail1">Número de identificación:</label>
										<input type="text" class="form-control" id="clave" name="clave" placeholder="<?php echo $clave ?>" value="<?php echo $clave ?>" readonly>
						  			</div>
                        			<div class="form-group">
										<label for="exampleInputEmail1">Solicitud:</label>
                                   	<select id="solicitud" name="solicitud" class="form-control" >
											<option value="Asesoría Financiera">Asesoría Financiera</option>
											<option value="Asesoría Legal">Asesoría Legal</option>
											<option value="Asesoría Contable">Asesoría Contable</option>
										</select>     
						  			</div>
                         			<div class="form-group">
										<label for="exampleInputEmail1">Asunto:</label>
										<input type="text" class="form-control" id="asunto" name="asunto" placeholder="">
						  			</div>
                        			<div class="form-group">
										<label for="exampleInputEmail1">Comentarios:</label>
										<textarea class="form-control" rows="7" id="comentarios" name="comentarios" ></textarea>
						 			</div>
                        			<div class="form-group">
                        				<label>Prioridad:</label>
										<select id="prioridad" name="prioridad" class="form-control" >
											<option value="Baja">Baja</option>
											<option value="Media">Media</option>
											<option value="Alta">Alta</option>
										</select>
						  			</div>
						  			<div class="form-group">
										<label for="exampleInputFile">Adjunto:</label>
										<input type="file" id="adjunto" name="adjunto" >
						  			</div>
						  			<button type="submit" class="btn gray pull-right" id="botoncito" name="botoncito" >Enviar</button>
								</form>
							</div>
						</div>
					</div>
				</div>	
           </div>
		</section>
	</div>
</body>
</html>