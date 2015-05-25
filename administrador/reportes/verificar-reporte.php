<?php 
	$id=$_GET['id'];
	$clave=$_GET['clave'];
	$nombre=$_GET['nombre'];
	include("lib/conexion.php"); 
	$sql_cas=mysql_query("SELECT * FROM caso WHERE cas_id= $id",$conexion);
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
				<h1>Detalle Reporte <?php echo $nombre.' - '.$clave ?></h1>
			</div>
			<div class="body-sec">
				<div class="col-md-12">
					<div class="widget-body">
						<div class="widget-heading blue">
							<i class="icon-table pull-left"></i><h3 class="pull-left">Detalles del Reporte - <?php if($row_cas['cas_estatus']==1){ echo "EN ESPERA";} else if($row_cas['cas_estatus']==2){ echo "ABIERTO";} if($row_cas['cas_estatus']==3){ echo "CERRADO";} ; ?></h3>
						</div>
						<div class="widget-sec">
							<div class="widget-sec">
								<form class="sec" role="form" name="guardar" id="validar_form" method="post" action="lib/actualizar_reporte.php" enctype="multipart/form-data">
						  			<input type="hidden" id="id" name="id" value="<?php echo strtoupper($row_cas['cas_id']); ?>">
                               	<div class="form-group">
										<label for="exampleInputEmail1">Número de identificación:</label>
										<input type="text" class="form-control" id="clave" name="clave" placeholder="<?php echo strtoupper($row_cas['cas_clave']); ?>" readonly>
						  			</div>
                        			<div class="form-group">
										<label for="exampleInputEmail1">Solicitud:</label>
										<input type="text" class="form-control" id="solicitud" name="solicitud" placeholder="<?php echo strtoupper($row_cas['cas_solicitud']); ?>" readonly>
						  			</div>
                         			<div class="form-group">
										<label for="exampleInputEmail1">Asunto:</label>
										<input type="text" class="form-control" id="asunto" name="asunto" placeholder="<?php echo strtoupper($row_cas['cas_nombre']); ?>" readonly>
						  			</div>
                        			<div class="form-group">
										<label for="exampleInputEmail1">Comentarios:</label>
										<textarea class="form-control" rows="7" id="comentarios" name="comentarios" readonly><?php echo strtoupper($row_cas['cas_comentarios']); ?></textarea>
						 			</div>
                        			<div class="form-group">
                        				<label>Prioridad:</label>
										<select id="prioridad" name="prioridad" disabled>
											<option <?php if($row_cas['cas_prioridad']=='Baja'){echo "selected";} ?>  value="Baja" >Baja</option>
											<option <?php if($row_cas['cas_prioridad']=='Media'){echo "selected";} ?> value="Media">Media</option>
											<option <?php if($row_cas['cas_prioridad']=='Alta'){echo "selected";} ?>  value="Alta">Alta</option>
										</select>
						  			</div>
                                	<div class="form-group">
                        				<label>Estatus:</label>
										<select id="estatus" name="estatus" >
											<option <?php if($row_cas['cas_prioridad']=='Baja'){echo "selected";} ?>  value="En Espera" >En Espera</option>
											<option <?php if($row_cas['cas_prioridad']=='Media'){echo "selected";} ?> value="Abierto">Abiero</option>
											<option <?php if($row_cas['cas_prioridad']=='Alta'){echo "selected";} ?>  value="Cerrado">Cerrado</option>
										</select>
						  			</div>
						  			<div class="form-group">
										<!--label for="exampleInputFile">Adjunto:</label-->
										<!--input type="file" id="adjunto" name="adjunto"-->
						  			</div>
                                    
                                		<?php 
						  			$sql_bit=mysql_query("SELECT * FROM bitacora WHERE bit_cas_id = $id ORDER BY bit_id DESC",$conexion);
									if($row_bit=mysql_fetch_array($sql_bit))
									{		
										echo '<h4 style="color:#ccc !important;">Respuestas:</h4>';
										do
										{ 
											echo '<div class="col-md-12">';
												echo '<div class="typography1">';
													echo '<strong>Fecha de Respuesta: '.$row_bit['bit_fecha'].'</strong>';
													echo '<p>'.$row_bit['bit_comentarios'].'</p>';
												echo '</div>';
											echo '</div>';								
										}
										while($row_bit=mysql_fetch_array($sql_bit));
									}
								?>                          
                                <h4 style="color:#ccc !important;">Agregar Nuevo Comentario:</h4>
                                <div class="form-group">
                                		<label for="exampleInputEmail1">Comentarios:</label>
										<textarea class="form-control" rows="7" id="comentarios1" name="comentarios1" ></textarea>
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