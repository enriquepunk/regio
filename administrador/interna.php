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
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
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
							<h1>Bienvenido a Grupo Regio</h1>
						</div>
						<div class="body-sec">
							<div class="col-md-12">
								<div class="widget-body">
									<div class="widget-heading blue">
										<i class="icon-table pull-left"></i><h3 class="pull-left">Listado de Páginas Internas</h3>
									</div>
									<div class="widget-sec">
										<div class="streaming-table">
											<span id="found" class="label label-info"></span>
                                      	<?php 
						  						$sql=mysql_query("
													SELECT * FROM internas where int_landing=0 ORDER BY int_id ASC",$conexion);
												if($row=mysql_fetch_array($sql))
												{		
													echo '<table id="stream_table" class="table table-striped table-bordered">';
														echo '<thead>';
															echo '<tr>';
																echo '<th></th>';
                                     						echo '<th>TITULO</th>';
																echo '<th>ENCABEZADO</th>';
																echo '<th>MOVIL</th>';
																echo '<th>LANDSCAPE</th>';
										  						echo '<th>OPCIONES</th>';
															echo '</tr>';
									 					echo '</thead>';
														echo '<tbody>';
														$x=1; 
															do
															{ 
																echo '<tr>';
																echo '<td>'.$x.'</td>';
                                                			echo '<td>'.strtoupper($row['int_titulo']).'</td>'; 
																echo '<td><img src="images/encabezados/'.$row['int_slider'].'" style="width:400px;" /></td>';  
																echo '<td><img src="images/encabezados/'.$row['int_slider_movil'].'" style="width:70px;" /></td>';  
																echo '<td><img src="images/encabezados/'.$row['int_slider_landscape'].'" style="width:200px;" /></td>';             				
																echo '<td align="center" valign="top">
											 	  					  	<a href="editar-internas.php?id='.$row['int_id'].'"><i class="icon-share-sign" style="font-size:18px"></i></a>
																      </td>';
																echo ' </tr>';
																$x++;
															}
															while($row=mysql_fetch_array($sql));
														echo '</tbody>';
													echo '</table>';
												}
											?>
										</div>
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