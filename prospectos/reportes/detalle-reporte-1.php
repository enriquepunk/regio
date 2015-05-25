<?php 
	session_start();
	if (!isset($_SESSION["DB_admin"]))
	{
		header("Location: login.php"); 
		exit(); 
		session_destroy();
	}
	$usu_nombre=$_SESSION["usu_nombre"];
	$usu_empresa=$_SESSION["usu_empresa"];
	$usu_id=$_SESSION["usu_id"];
	$usu_area=$_SESSION["usu_area"];
	include("lib/conexion.php"); 
	$id=$_GET['id'];
	$empleado=$_GET['empleado'];
	$empresa=$_GET['empresa'];
	$sql_cas=mysql_query("SELECT * FROM semana WHERE sem_id= $id",$conexion);
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
				<h1>Detalle Reporte de <?php echo $empleado." - ".$empresa; ?></h1>
			</div>
			<div class="body-sec">
				<div class="col-md-12">
					<div class="widget-body">
						<div class="widget-heading blue">
							<i class="icon-table pull-left"></i><h3 class="pull-left">Detalles del Reporte Semana</h3>
						</div>
						<div class="widget-sec">
							<div class="widget-sec">
								<form class="sec" role="form" id="" name="">
                        			<div class="form-group">
										<label for="exampleInputEmail1">Bancos:</label>
										<textarea class="form-control" rows="7" readonly><?php echo $row_cas['sem_bancos']; ?></textarea>
						 			</div>
                                	<div class="form-group">
										<label for="exampleInputEmail1">Ingresos:</label>
										<textarea class="form-control" rows="7" readonly><?php echo $row_cas['sem_ingresos']; ?></textarea>
						 			</div>
                                	<div class="form-group">
										<label for="exampleInputEmail1">Egresos:</label>
										<textarea class="form-control" rows="7" readonly><?php echo $row_cas['sem_egresos']; ?></textarea>
						 			</div>
                                	<div class="form-group">
										<label for="exampleInputEmail1">Impuestos:</label>
										<textarea class="form-control" rows="7" readonly><?php echo $row_cas['sem_impuestos']; ?></textarea>
						 			</div>
                               	<div class="form-group">
										<label for="exampleInputEmail1">Otros:</label>
										<textarea class="form-control" rows="7" readonly><?php echo $row_cas['sem_otros']; ?></textarea>
						 			</div>
                                	<div class="form-group">
										<label for="exampleInputEmail1">Próxima Semana:</label>
										<textarea class="form-control" rows="7" readonly><?php echo $row_cas['sem_proyeccion']; ?></textarea>
						 			</div>
						  			<!--button type="submit" class="btn gray pull-right" id="botoncito" name="botoncito" >Enviar</button-->
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