<?php
include('../../../app/config.php');
$id_rol = $_POST['id_rol'];
    $sentencia = $pdo->prepare("DELETE FROM roles WHERE id_rol=:id_rol");

    $sentencia->bindParam('id_rol', $id_rol);

         if ($sentencia->execute()) {
            session_start();
            $_SESSION['mensaje'] = "Se elimino el rol de la manera correcta";
            $_SESSION['icono'] = "success";
            header('Location:' . APP_URL . "/admin/roles");
        } else {
            session_start();
            $_SESSION['mensaje'] = "ERROR No se pudo regsitrar, comuniquese con el administrador";
            $_SESSION['icono'] = "error";
            header('Location:' . APP_URL . "/admin/roles/create.php");
        }






