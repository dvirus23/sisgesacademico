<?php

include ('../../../app/config.php');
$id_materia = $_POST['id_materia'];
$nombre_materia = $_POST['nombre_materia'];
$nombre_materia = mb_strtoupper($nombre_materia,'UTF-8');


$sentencia = $pdo->prepare('UPDATE materias
SET   nombre_materia=:nombre_materia,
      fyh_actualizacion=:fyh_actualizacion
WHERE id_materia=:id_materia');

$sentencia->bindParam(':nombre_materia',$nombre_materia);
$sentencia->bindParam('fyh_actualizacion',$fechahora);
$sentencia->bindParam('id_materia',$id_materia);

if($sentencia->execute()){
    //echo 'success';
    session_start();
    $_SESSION['mensaje'] = "Se actualizo la Materia de la manera correcta en la base de datos";
    $_SESSION['icono'] = "success";
    header('Location:'.APP_URL."/admin/materias");
//header('Location:' .$URL.'/');
}else{
    //echo 'error al registrar a la base de datos';
    session_start();
    $_SESSION['mensaje'] = "Error no se pudo actulizar el registro en la base datos, comuniquese con el administrador";
    $_SESSION['icono'] = "error";
    ?><script>window.history.back();</script><?php
}