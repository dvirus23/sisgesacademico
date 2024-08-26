<?php
global $pdo;
include ('../../../app/config.php');

$rol_id = $_POST['rol_id'];
$nombres = $_POST['nombres'];
$nombres = mb_strtoupper($nombres,'UTF-8');
$apellidos = $_POST['apellidos'];
$apellidos = mb_strtoupper($apellidos,'UTF-8');
$ci = $_POST['ci'];
$email = $_POST['email'];
$email = mb_strtoupper($email,'UTF-8');
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$celular = $_POST['celular'];
$profesion = $_POST['profesion'];
$profesion = mb_strtoupper($profesion,'UTF-8');
$direccion = $_POST['direccion'];
$direccion = mb_strtoupper($direccion,'UTF-8');

//$pdo->beginTransaction();

$pdo->beginTransaction();
// ---------- INSERTAR A LA TABLA USUARIOS
$password = password_hash($ci, PASSWORD_DEFAULT);

$sentencia = $pdo->prepare('INSERT INTO usuarios
         (rol_id, email, password, fyh_creacion, estado)
VALUES ( :rol_id,:email,:password,:fyh_creacion,:estado)');


$sentencia->bindParam(':rol_id',$rol_id);
$sentencia->bindParam(':email',$email);
$sentencia->bindParam(':password',$password);
$sentencia->bindParam('fyh_creacion',$fechahora);
$sentencia->bindParam('estado',$estado_de_registro);
$sentencia->execute();

$id_usuario = $pdo->lastInsertId();

//insertar a la tabla personas
$sentencia = $pdo->prepare('INSERT INTO personas
        ( usuario_id, nombres, apellidos, ci, fecha_nacimiento, celular, profesion, direccion, fyh_creacion, estado)
VALUES ( :usuario_id,:nombres,:apellidos,:ci,:fecha_nacimiento,:celular,:profesion,:direccion,:fyh_creacion,:estado)');

$sentencia->bindParam(':usuario_id',$id_usuario);
$sentencia->bindParam(':nombres',$nombres);
$sentencia->bindParam(':apellidos',$apellidos);
$sentencia->bindParam(':ci',$ci);
$sentencia->bindParam(':fecha_nacimiento',$fecha_nacimiento);
$sentencia->bindParam(':celular',$celular);
$sentencia->bindParam(':profesion',$profesion);
$sentencia->bindParam(':direccion',$direccion);
$sentencia->bindParam('fyh_creacion',$fechahora);
$sentencia->bindParam('estado',$estado_de_registro);
$sentencia->execute();

$id_persona = $pdo->lastInsertId();


// INSERTAR A LA TABLA ADMINISTRATIVOS

$sentencia = $pdo->prepare('INSERT INTO administrativos
        ( persona_id, fyh_creacion, estado)
VALUES ( :persona_id,:fyh_creacion,:estado)');

$sentencia->bindParam(':persona_id',$id_persona);
$sentencia->bindParam('fyh_creacion',$fechahora);
$sentencia->bindParam('estado',$estado_de_registro);

    if($sentencia->execute()){
        //echo 'success';
        $pdo->commit();
        session_start();
        $_SESSION['mensaje'] = "Se registro los datos del personal administrativo de la manera correcta en la base de datos";
        $_SESSION['icono'] = "success";
        header('Location:'.APP_URL."/admin/administrativos");
    //header('Location:' .$URL.'/');
    }else{
        //echo 'error al registrar a la base de datos';
        $pdo->rollBack();
        session_start();
        $_SESSION['mensaje'] = "Error no se pudo registrar en la base datos, comuniquese con el administrador";
        $_SESSION['icono'] = "error";
        ?><script>window.history.back();</script><?php
    }






