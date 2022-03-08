<?php
    require '../modelo/db_local.php';
    session_start();

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $conn->prepare('SELECT calificaciones.matricula, calificaciones.programacion, calificaciones.matematicas, calificaciones.algoritmos, calificaciones.logica, calificaciones.so, calificaciones.bd, usuarios.Nombre_usuario FROM calificaciones INNER JOIN usuarios ON calificaciones.usuario_id_fk = usuarios.ID_usuario');
    $sql->execute();
    $stm = $sql->fetchAll(PDO::FETCH_OBJ); 

?>