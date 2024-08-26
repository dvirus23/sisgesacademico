<?php

$sql_asministrativos = "SELECT * FROM usuarios AS usu INNER JOIN roles AS rol ON rol.id_rol= usu.rol_id
                        INNER JOIN personas AS per ON per.usuario_id = usu.id_usuario
                        INNER JOIN administrativos AS adm ON adm.persona_id = per.id_persona
                        WHERE adm.estado = '1' ";
$query_asministrativos =$pdo->prepare($sql_asministrativos);
$query_asministrativos->execute();
$administrativos = $query_asministrativos->fetchAll(PDO::FETCH_ASSOC);