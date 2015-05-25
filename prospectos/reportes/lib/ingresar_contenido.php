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
$blog_title =$_POST["blog_title"];
$blog_descripcion =$_POST["blog_descripcion"];
$blog_keywords =$_POST["blog_keywords"];
$blog_foto = $_POST["blog_foto"];
$blog_estado = $_POST["blog_estado"];
$blog_fecha = date("Y-m-d");

$_SESSION['titulo'] = $blog_titulo;
$_SESSION['corto'] = $blog_corto;
$_SESSION['contenido']= $blog_contenido;
$_SESSION['title'] = $blog_title;
$_SESSION['descripcion'] = $blog_descripcion;
$_SESSION['keyword'] = $blog_keywords;

	if($blog_estado=='on'){
	$blog_estado='true';
	$_SESSION['estado']='checked="checked"';
	}
	
	else{
	$blog_estado='false';
	$_SESSION['estado']="";
    }
		$url=limpiar($blog_titulo);
$blog_url=str_replace(" ","-",$url);
	
if($blog_titulo =="" or $blog_corto =="" or strlen($blog_corto)>400 or $blog_contenido =="" or $blog_url =="" or $blog_title =="" or $blog_descripcion =="" or $blog_keywords =="")
{

echo "LOS CAMPOS MARCADOS CON (*) SON NECESARIOS<br />";
echo "Por favor corrija sus datos e intentelo nuevamente";

echo '<META HTTP-EQUIV="REFRESH" CONTENT="2;URL=../ingresar_contenido.php">';
  
}
else{
	
		if(!empty($_FILES['blog_foto']) && $_FILES['blog_foto']['error'] == UPLOAD_ERR_OK) {
		require_once 'ModifiedImage.php';
		$hora=date("YmdHis");
		list($tipo,$ext)=explode("/",$_FILES['blog_foto']['type']);
	
			if($tipo == 'image'){ 
			$image = new ModifiedImage($_FILES['blog_foto']['tmp_name']);
			$img = 'img_' . $_FILES['blog_foto']['name'];
			$image->resizeToFit(100, 80, true,255,255,255);
			$image->save($img);
			$mov=$hora."-".$img;
			rename($img,"../../images/blog/$mov");
			$foto_dir="$mov";
			}
		
			else{
			?>
			<script type="text/javascript">
			alert("El archivo que intentas subir no es una foto");
			window.location="../ingresar_contenido.php";
			</script>
			<?
			}
		}
	
		if($tipo == 'image' or $tipo==""){

	   	$sql=mysql_query("INSERT INTO blog (blog_url,blog_fecha,blog_titulo,blog_corto,blog_contenido,blog_foto,blog_title,blog_descripcion,blog_keyword,blog_estado)
		VALUES ('$blog_url', '$blog_fecha', '$blog_titulo', '$blog_corto', '$blog_contenido', '$foto_dir', '$blog_title', '$blog_descripcion', '$blog_keywords',$blog_estado)",$conexion) or die ("error");

		
		echo "Guardando...";
		

					unset($_SESSION['titulo']);
					unset($_SESSION['corto']);
					unset($_SESSION['contenido']);
					unset($_SESSION['title']);
					unset($_SESSION['descripcion']);
					unset($_SESSION['keyword']);
					unset($_SESSION['estado']);

		
		echo '<META HTTP-EQUIV="REFRESH" CONTENT="3;URL=../">';
		}
	
		else{
			echo "Ocurrio un error al intentar guardar revise los datos ingresados";
		 	echo '<META HTTP-EQUIV="REFRESH" CONTENT="3;URL=../ingresar_contenido.php">';
	 	}
}
?>
</body>
</html>