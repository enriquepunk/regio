<?php
include("conexion.php");
$id =$_POST["id"];
$clave =$_POST["clave"];
$comentarios = $_POST["comentarios1"];
$estatus = $_POST["estatus"];
$estatus1 = 1;
$fecha = date("Y-m-d");
 

$sql=mysql_query("UPDATE caso SET cas_estatus='$estatus' WHERE cas_id = $id)",$conexion) or die ("error1");
$sql_bit=mysql_query("INSERT INTO bitacora (bit_cas_id, bit_comentarios, bit_fecha, cas_estatus) VALUES ('$id', '$comentarios1', '$fecha', '$estatus1')",$conexion) or die ("error2");
echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=../">';
	
?>