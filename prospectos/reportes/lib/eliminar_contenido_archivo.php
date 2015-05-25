<?php
session_start();
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blog | Tecnoceano Ingenieria y Estudios Marinos</title>
</head>
<body>
<?php
	include("conexion.php");
	$id=$_GET["id"];
	$sql=mysql_query("DELETE FROM blog WHERE blog_id=$id",$conexion);
	echo "Eliminando archivo...";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT="2;URL=../index.php">';
?>
</body>
</html>