<?php
include("conexion.php");
$id=$_POST["id"];
$contenido =$_POST["contenido"];
$fecha = date("Y-m-d");
$estatus=1;
$semana=date("W");
$numero=1;
$tipo=1;
$sql=mysql_query("INSERT INTO semana (sem_usu_id, sem_fecha,sem_numero,sem_semana,sem_contenido,sem_tipo,sem_estatus) VALUES ('$id', '$fecha', '$numero', '$semana', '$contenido', '$tipo', '$estatus')",$conexion) or die ("error");
echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=../mis-reportes.php">';
?>