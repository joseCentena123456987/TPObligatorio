<?php 

header('Content-Type: text/html; charset=utf-8');
header ("Cache-Control: no-cache, must-revalidate ");

/////////////////////////////
// CONFIGURACION APP//
/////////////////////////////
//C:\wamp64\www\
$PROYECTO ='TPObligatorio';

//variable que almacena el directorio del proyecto
$ROOT =$_SERVER['DOCUMENT_ROOT']."/$PROYECTO/";



include_once($ROOT.'Util/funciones.php');

$GLOBALS['ROOT'] = $ROOT;



?>