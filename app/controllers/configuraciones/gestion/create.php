<?php

include ('../../../../app/config.php');

$gestion = $_POST['gestion'];
$gestion = mb_strtoupper($gestion,'UTF-8');
$estado = $_POST['estado'];
if ($estado=="ACTIVO"){
    $estado=1;
}else{
    $estado=0;
}
$sentencia = $pdo->prepare('INSERT INTO gestiones
(gestion, fyh_creacion, estado)
VALUES ( :gestion,:fyh_creacion,:estado)');

$sentencia->bindParam(':gestion',$gestion);

$sentencia->bindParam('fyh_creacion',$fechahora);
$sentencia->bindParam('estado',$estado);

if($sentencia->execute()){
    //echo 'success';
    session_start();
    $_SESSION['mensaje'] = "Se registro la gestion educativa de la manera correcta en la base de datos";
    $_SESSION['icono'] = "success";
    header('Location:'.APP_URL."/admin/configuraciones/gestion");
//header('Location:' .$URL.'/');
}else{
    //echo 'error al registrar a la base de datos';
    session_start();
    $_SESSION['mensaje'] = "Error no se pudo registrar en la base datos, comuniquese con el administrador";
    $_SESSION['icono'] = "error";
    ?><script>window.history.back();</script><?php
}