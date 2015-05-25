<?php 
session_start();
include("conexion.php");
if(trim($_POST["usu_user"]) != "" && trim($_POST["usu_pass"]) != "")
{
	$usuario = htmlentities($_POST["usu_user"], ENT_QUOTES);
	$password = trim(($_POST["usu_pass"]));
	$result=mysql_query( "SELECT * FROM usuarios WHERE usu_usuario='$usuario'",$conexion);
	$row = mysql_fetch_array($result);
	$passw = trim($row["usu_password"]);
	if( $passw == $password)
	{
		$_SESSION["usu_nombre"] = $row["usu_nombre"];
		$_SESSION["imagen"] = $row["imagen"];
		echo "Bienvenido...<br />";
		print('<meta http-equiv="refresh" content="0;url=../index.php">');	
	}
else
{
	echo "Datos incorrectos...<br />";
	print('<meta http-equiv="refresh" content="1;url=../login.php">');
}
}
else
{
	echo "Datos incorrectos...<br />";
	print('<meta http-equiv="refresh" content="1;url=../login.php">');
}
?>