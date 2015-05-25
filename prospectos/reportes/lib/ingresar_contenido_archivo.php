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
include("funcion_limpiar.php");
include("conexion.php");
$blog_titulo =$_POST["blog_titulo"];
$blog_corto =$_POST["blog_corto"];
$blog_contenido =$_POST["editor1"];
$blog_archivo = $_POST["blog_archivo"];
$blog_estado = $_POST["blog_estado"];
$empresa = $_POST["empresa"];
$categoria = $_POST["categoria"];
$idnivel1 = $_POST["idnivel1"];
$idnivel2 = $_POST["idnivel2"];
$idnivel3 = $_POST["idnivel3"];

$blog_fecha = date("Y-m-d");

$_SESSION['titulo'] = $blog_titulo;
$_SESSION['corto'] = $blog_corto;
if($blog_estado=='on'){
	$blog_estado='true';
	$_SESSION['estado']='checked="checked"';
	}
	
	else{
	$blog_estado='false';
	$_SESSION['estado']="";
    }
	
	
			
	 
	 $targetfolder = "../../archivos/blog/";
	 $file = 'file_' . $_FILES['blog_archivo']['name'];
	 $hora=date("YmdHis"); 
	 $mov=$hora."_".$file;
	 
 	 $targetfolder = $targetfolder . basename( $mov) ;
 	  if(move_uploaded_file($_FILES['blog_archivo']['tmp_name'], $targetfolder)){
 		$sql=mysql_query("INSERT INTO blog (blog_fecha,blog_titulo,blog_corto,blog_contenido,blog_archivo,blog_estado,blog_tipo,idempresa,categoria,idnivel1,idnivel2,idnivel3)
					      VALUES ('$blog_fecha', '$blog_titulo', '$blog_corto', '$blog_contenido', '$mov', 1,1,'$empresa', '$categoria', '$idnivel1', '$idnivel2', '$idnivel3')",$conexion) or die ("error");
		echo "El archivo ". basename( $mov). " se ha subido";
     	unset($_SESSION['titulo']);
		unset($_SESSION['corto']);							
	    unset($_SESSION['estado']);
		echo '<META HTTP-EQUIV="REFRESH" CONTENT="3;URL=../">';
      }else {echo "Problem uploading file";}		
?>
</body>
</html>