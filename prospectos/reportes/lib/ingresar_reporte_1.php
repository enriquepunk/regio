<?php
include("conexion.php");
$id=$_POST["id"];
$bancos =$_POST["bancos"];
$ingresos =$_POST["ingresos"];
$egresos =$_POST["egresos"];
$impuestos =$_POST["impuestos"];
$otros =$_POST["otros"];
$proyeccion =$_POST["proyeccion"];
$fecha = date("Y-m-d");
$estatus=1;
$semana=date("W");
$numero=1;
$tipo=1;
$sql=mysql_query("INSERT INTO semana (sem_usu_id, sem_fecha,sem_numero,sem_semana,sem_bancos,sem_ingresos,sem_egresos,sem_impuestos,sem_otros,sem_proyeccion,sem_tipo,sem_estatus) VALUES ('$id', '$fecha', '$numero', '$semana', '$bancos', '$ingresos', '$egresos', '$impuestos', '$otros', '$proyeccion', '$tipo', '$estatus')",$conexion) or die ("error");
echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=../mis-reportes.php">';
?>