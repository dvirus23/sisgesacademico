<?php
define('SERVIDOR','localhost');
define('USUARIO','root');
define('PASSWORD','');
define('BD','sisgestionescolar');

define('APP_NAME','SISTEMA DE GESTION ESCOLAR');
define('APP_URL','http://localhost/sisgestionescolar/');
define('KEY_API_MAPS','');

//CONEXCION BD

$servidor="mysql:dbname=".BD.";host=".SERVIDOR;
try{
    $pdo=new PDO($servidor,USUARIO,PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    //echo "CONECCION EXITOSA A LA BASE DE DATOS";
} catch (PDOException){
    print_r($e);
    echo "ERROR, NO SE PUDO CONECTAR A LA BASE DE DATOS";
}
date_default_timezone_set("america/la_paz");
$fechahora = date('Y-m-d H:i:s');

$fecha_actual = date('Y-m-d');
$dia_actual = date('d');
$mes_actual = date('m');
$ano_actual = date('Y');

$estado_de_registro='1';
?>

