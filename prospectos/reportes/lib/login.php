<? 
session_start();
include("conexion.php");
if(trim($_POST["usu_user"]) != "" && trim($_POST["usu_pass"]) != "")
{
$usuario = htmlentities($_POST["usu_user"], ENT_QUOTES);
$password = trim(($_POST["usu_pass"]));
$result=mysql_query( "SELECT * FROM usuarios WHERE usu_usuario='$usuario'",$conexion);
$row = mysql_fetch_array($result);
$passw = trim($row["usu_pass"]);
if( $passw === $password)
{
$_SESSION["DB_admin"] = $row["usu_usuario"];
$_SESSION["usu_nombre"] = $row["usu_nombre"];
$_SESSION["usu_empresa"] = $row["usu_empresa"];
$_SESSION["usu_id"] = $row["usu_id"];
$_SESSION["usu_area"] = $row["usu_area"];
echo "Bienvenido...<br />";
$bit_fecha="fecha";
$bit_usuario=$_POST["usu_user"];
print('<meta http-equiv="refresh" content="0;url=../index.php">');
}
else{
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