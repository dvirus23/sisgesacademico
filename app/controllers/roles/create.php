<?php
include ('../../../app/config.php');
$nombre_rol = $_POST['nombre_rol'];
$nombre_rol = mb_strtoupper($nombre_rol,encoding: 'UTF-8');

if ($nombre_rol==""){
    session_start();
    $_SESSION['mensaje'] = "ERROR LLene el campo NOMBRE DEL ROL";
    $_SESSION['icono'] = "error";
    header('Location:'.APP_URL."/admin/roles/create.php");
}else{
    $sentencia = $pdo->prepare("INSERT INTO roles ( nombre_rol, fyh_creacion, estado) 
    VALUES (:nombre_rol,:fyh_creacion,:estado) ");

    $sentencia->bindParam('nombre_rol',$nombre_rol);
    $sentencia->bindParam('fyh_creacion',$fechahora);
    $sentencia->bindParam('estado',$estado_de_registro);
    try {
        if ($sentencia->execute()){
            session_start();
            $_SESSION['mensaje'] = "Se registro el ROL satisfactoriamente";
            $_SESSION['icono'] = "success";
            header('Location:'.APP_URL."/admin/roles");
        }else{
            session_start();
            $_SESSION['mensaje'] = "ERROR No se pudo regsitrar, comuniquese con el administrador";
            $_SESSION['icono'] = "error";
            header('Location:'.APP_URL."/admin/roles/create.php");
        }
    }catch (Exception $exception){
        session_start();
        $_SESSION['mensaje'] = "Este rol ya existe en la base de datos..!";
        $_SESSION['icono'] = "error";
        header('Location:'.APP_URL."/admin/roles/create.php");
    }


}



