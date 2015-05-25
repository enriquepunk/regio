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
//Agregamos nuestra conexion y le damos valor a las variables que enviamos del formulario
include("funcion_limpiar.php");
include("conexion.php");
$id=$_POST["id"];
$blog_titulo =$_POST["blog_titulo"];
$blog_corto =$_POST["blog_corto"];
$blog_contenido =$_POST["editor1"];
$blog_title =$_POST["blog_title"];
$blog_descripcion =$_POST["blog_descripcion"];
$blog_keywords =$_POST["blog_keywords"];
$blog_foto = $_POST["blog_foto"];
$blog_estado = $_POST["blog_estado"];
$blog_fecha = date("Y-m-d");
$_SESSION['act_titulo'] = $blog_titulo;
$_SESSION['act_corto'] = $blog_corto;
$_SESSION['act_contenido']= $blog_contenido;
$_SESSION['act_title'] = $blog_title;
$_SESSION['act_descripcion'] = $blog_descripcion;
$_SESSION['act_keyword'] = $blog_keywords;
	//Validamos si el checkbox esta palomeado o no
if($blog_estado=='on'){
	$blog_estado='true';
	$_SESSION['act_estado']='checked="checked"';
	}
	
	else{
	$blog_estado='false';
	$_SESSION['act_estado']="";
    }
	$url=limpiar($blog_titulo);
$blog_url=str_replace(" ","-",$url);

//Validamamos que los valores necesarios no esten vacios	
if($blog_titulo =="" or $blog_corto =="" or strlen($blog_corto)>400 or $blog_contenido =="" or $blog_url =="" or $blog_title =="" or $blog_descripcion == ""  	or $blog_keywords ==""){
		
/***********************************************/
echo "LOS CAMPOS MARCADOS CON (*) SON NECESARIOS<br />";
echo "Por favor corrija sus datos e intentelo nuevamente<br />";
/***********************************************/
echo '<META HTTP-EQUIV="REFRESH" CONTENT="2;URL=../actualizar_contenido.php?id='.$id.'">';
	  
}
//si llevan datos seguimos	
else{
			//Validamos que se reciba una imagen
			if(!empty($_FILES['blog_foto']) && $_FILES['blog_foto']['error'] == UPLOAD_ERR_OK) {
		
			require_once 'ModifiedImage.php';
			$hora=date("YmdHis");
			list($tipo,$ext)=explode("/",$_FILES['blog_foto']['type']);
		
					if($tipo == 'image'){
				 
					$image = new ModifiedImage($_FILES['blog_foto']['tmp_name']);
					$img = 'img_' . $_FILES['blog_foto']['name'];
					$image->resizeToFit(100, 80, true,255,255,255);
					$image->save($img);
					$mov=$hora.$img;
					rename($img,"../../images/blog/$mov");
					$foto_dir="$mov";
					}
					
					//si no es una imagen mandamos mensaje de alerta
					else{	
					?>
	
<script type="text/javascript">
					alert("El archivo que intentas subir no es una foto");
					window.location="../actualizar_contenido.php?id=<?php echo $id; ?>";
					</script>
				
					<?
					}
			}
			
			//Si es imagen guardamos todo
			if($tipo == 'image'){

		   $sql=mysql_query("UPDATE blog SET blog_url='$blog_url',
		   blog_fecha='$blog_fecha',
		   blog_titulo='$blog_titulo',
		   blog_corto='$blog_corto',
		   blog_contenido='$blog_contenido',
		   blog_foto='$foto_dir',
		   blog_title='$blog_title',
		   blog_descripcion='$blog_descripcion',
		   blog_keyword='$blog_keywords',
		   blog_estado=$blog_estado
		   WHERE blog_id = $id",$conexion) or die ("Ocurrio un error al intentar guardar en base de datos");
   					
					//Si se ejecuto correctamente nuestra actualizacion mandamos mensaje
					if($sql){
						
						
					unset($_SESSION['act_titulo']);
					unset($_SESSION['act_corto']);
					unset($_SESSION['act_contenido']);
					unset($_SESSION['act_title']);
					unset($_SESSION['act_descripcion']);
					unset($_SESSION['act_keyword']);
					unset($_SESSION['act_estado']);

						   
					/***********************************************/
					echo "Guardando...";
					/***********************************************/
					echo '<META HTTP-EQUIV="REFRESH" CONTENT="3;URL=../">';
					}
			}
			
			// si no subimos ningun archivo y queremos conservar el que ya existe
			else if($tipo==""){
		
			$sql=mysql_query("UPDATE blog SET blog_url='$blog_url',
			blog_fecha='$blog_fecha',
			blog_titulo='$blog_titulo',
			blog_corto='$blog_corto',
			blog_contenido='$blog_contenido',
			blog_title='$blog_title',
			blog_descripcion='$blog_descripcion',
			blog_keyword='$blog_keywords',
			blog_estado=$blog_estado
			WHERE blog_id=$id",$conexion) or die ("Ocurrio un error al intentar guardar en base de datos");
		 			
					//Si se ejecuto correctamente nuestra actualizacion mandamos mensaje
					if($sql){
					
					unset($_SESSION['act_titulo']);
					unset($_SESSION['act_corto']);
					unset($_SESSION['act_contenido']);
					unset($_SESSION['act_title']);
					unset($_SESSION['act_descripcion']);
					unset($_SESSION['act_keyword']);
					unset($_SESSION['act_estado']);
					
					/***********************************************/
					echo "Guardando...";
					/***********************************************/
					echo '<META HTTP-EQUIV="REFRESH" CONTENT="3;URL=../">';
					}
			}
			
			//Si no podemos guardar por alguna razon mandamos mensaje de error
			else{
			/***********************************************/
			echo "Ocurrio un error al intentar guardar revise los datos ingresados";
			/***********************************************/		
			echo '<META HTTP-EQUIV="REFRESH" CONTENT="3;URL=../actualizar_contenido.php?id='.$id.'">';
			}
}
?>
</body>
</html>