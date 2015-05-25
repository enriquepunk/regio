<?php 
/*function conectar() 
{ 
$base_de_datos = "vacacion_prospectos";
$db_usuario = "vacacion_hugo"; 
$db_password = "cocacola22"; 
if (!($link = mysql_connect("host244.hostmonster.com", $db_usuario, $db_password)))
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
} */

/*$conexion=mysql_connect("host244.hostmonster.com","vacacion_hugo","cocacola22") or die ("Error al conectar!!");
mysql_select_db("vacacion_prospectos",$conexion);*/

$conexion=mysql_connect("localhost","root","root") or die ("Error al conectar!!");
mysql_select_db("regio",$conexion);

?>