<?php
error_reporting(E_ALL ^ E_DEPRECATED);
include("conexion.php");

$id =$_POST["id"];
$titulo =$_POST["titulo"];
$descripcion = $_POST["descripcion"];
$liga = $_POST["liga"];

$sql=mysql_query("UPDATE slider SET sli_titulo='$titulo', sli_descripcion='$descripcion', sli_url='$liga'  WHERE sli_id = '$id'",$conexion) or die ("error1");
echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=../slider.php">';
	
?>