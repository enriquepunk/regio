<?php
include("conexion.php");
$usuario=$_POST["usuario"];
$clave =$_POST["clave"];
$solicitud =$_POST["solicitud"];
$prioridad = $_POST["prioridad"];
$asunto = $_POST["asunto"];
$comentarios = $_POST["comentarios"];
$fecha = date("Y-m-d");
$estatus=1;
 
$targetfolder = "/archivos";
$file = 'file_' . $_FILES['adjunto']['name'];
$hora=date("YmdHis"); 
$mov=$hora."_".$file;
$targetfolder = $targetfolder . basename($mov) ;
move_uploaded_file($_FILES['adjunto']['tmp_name'], $targetfolder);
 
$sql=mysql_query("INSERT INTO caso (cas_clave, cas_usu_id, cas_solicitud,cas_prioridad, cas_nombre, cas_comentarios, cas_adjunto, cas_fecha_apertura, cas_estatus) VALUES ('$clave', '$usuario', '$solicitud', '$prioridad', '$asunto', '$comentarios', '$mov', '$fecha', '$estatus')",$conexion) or die ("error");
echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=../">';
	
?>