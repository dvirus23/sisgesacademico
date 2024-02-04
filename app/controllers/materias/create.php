<?php

include ('../../../app/config.php');

$nombre_materia = $_POST['nombre_materia'];
$nombre_materia = mb_strtoupper($nombre_materia,'UTF-8');


$sentencia = $pdo->prepare('INSERT INTO materias
        (nombre_materia, fyh_creacion, estado)
VALUES (:nombre_materia,:fyh_creacion,:estado)');

$sentencia->bindParam(':nombre_materia',$nombre_materia);
$sentencia->bindParam('fyh_creacion',$fechahora);
$sentencia->bindParam('estado',$estado_de_registro);

if($sentencia->execute()){
    //echo 'success';
    session_start();
    $_SESSION['mensaje'] = "Se registro la Materia de la manera correcta en la base de datos";
    $_SESSION['icono'] = "success";
    header('Location:'.APP_URL."/admin/materias");
//header('Location:' .$URL.'/');
}else{
    //echo 'error al registrar a la base de datos';
    session_start();
    $_SESSION['mensaje'] = "Error no se pudo registrar en la base datos, comuniquese con el administrador";
    $_SESSION['icono'] = "error";
    ?><script>window.history.back();</script><?php
}
