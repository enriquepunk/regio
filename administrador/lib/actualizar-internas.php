<?php
error_reporting(E_ALL ^ E_DEPRECATED);
include("conexion.php");

$id =$_POST["id"];
$titulo =$_POST["titulo"];

$descripcion =$_POST["descripcion"];
$pleca =$_POST["pleca"];

$title =$_POST["title"];
$description =$_POST["description"];

$tituloseccion1 =$_POST["tituloseccion1"];
$contenidoseccion1 =$_POST["contenidoseccion1"];

$tituloseccion2 =$_POST["tituloseccion2"];
$contenidoseccion2 =$_POST["contenidoseccion2"];

$tituloseccion3 =$_POST["tituloseccion3"];
$contenidoseccion3 =$_POST["contenidoseccion3"];

$tituloseccion4 =$_POST["tituloseccion4"];
$contenidoseccion4 =$_POST["contenidoseccion4"];

$tituloseccion5 =$_POST["tituloseccion5"];
$contenidoseccion5 =$_POST["contenidoseccion5"];

$tituloseccion6 =$_POST["tituloseccion6"];
$contenidoseccion6 =$_POST["contenidoseccion6"];

$tituloseccion7 =$_POST["tituloseccion7"];
$contenidoseccion7 =$_POST["contenidoseccion7"];

$tituloseccion8 =$_POST["tituloseccion8"];
$contenidoseccion8 =$_POST["contenidoseccion8"];

$sql=mysql_query("UPDATE internas SET int_titulo='$titulo', int_descripcion='$descripcion',int_pleca='$pleca',int_title='$title',int_description='$description',int_titulo_barra_1='$tituloseccion1', int_contenido_barra_1='$contenidoseccion1',int_titulo_barra_2='$tituloseccion2', int_contenido_barra_2='$contenidoseccion2',int_titulo_barra_3='$tituloseccion3', int_contenido_barra_3='$contenidoseccion3',int_titulo_barra_4='$tituloseccion4', int_contenido_barra_4='$contenidoseccion4',int_titulo_barra_5='$tituloseccion5', int_contenido_barra_5='$contenidoseccion5',int_titulo_barra_6='$tituloseccion6', int_contenido_barra_6='$contenidoseccion6',int_titulo_barra_7='$tituloseccion7', int_contenido_barra_7='$contenidoseccion7',int_titulo_barra_8='$tituloseccion8', int_contenido_barra_8='$contenidoseccion8' WHERE int_id = '$id'",$conexion) or die ("error1");
echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=../interna.php">';
	
?>