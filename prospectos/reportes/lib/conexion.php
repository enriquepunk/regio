<?php 
function conectar() 
{ 
$base_de_datos = "vacacion_reportes";
$db_usuario = "vacacion_hugo"; 
$db_password = "cocacola22"; 
if (!($link = mysql_connect("localhost", $db_usuario, $db_password)))
{ 
echo "Error conectando a la base de datos."; 
exit(); 
} 
if (!mysql_select_db($base_de_datos, $link)) 
{ 
echo "Error seleccionando la base de datos."; 
exit(); 
} 
return $link; 
} 
$conexion=mysql_connect("localhost","vacacion_hugo","cocacola22") or die ("Error al conectar!!");
mysql_select_db("vacacion_reportes",$conexion);


/*
function conectar() 
{ 
	$base_de_datos = "ticket";
	$db_usuario = "root"; 
	$db_password = "root"; 
	if (!($link = mysql_connect("localhost", $db_usuario, $db_password)))
	{ 
		echo "Error conectando a la base de datos."; 
		exit(); 	
	} 
	if (!mysql_select_db($base_de_datos, $link)) 
	{ 
		echo "Error seleccionando la base de datos."; 
		exit(); 
	}	 
	return $link; 
} 
$conexion=mysql_connect("localhost","root","root") or die ("Error al conectar!!");
mysql_select_db("ticket",$conexion);
*/
?>