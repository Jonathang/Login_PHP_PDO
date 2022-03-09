<?php
   require '../modelo/db_local.php';

   if (isset($_SESSION['usuario_id'])) {
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $conn->prepare('SELECT calificaciones.programacion, calificaciones.matematicas, calificaciones.algoritmos, calificaciones.logica, calificaciones.so, calificaciones.bd FROM calificaciones INNER JOIN usuarios ON usuarios.ID_usuario= calificaciones.usuario_id_fk WHERE usuarios.ID_usuario= :id');
    $sql->bindParam(':id', $_SESSION['usuario_id']);
    $sql->execute();
    $stm = $sql->fetchAll(PDO::FETCH_OBJ); 

    if (count($stm) > 0) {
      $user = $stm;
    }
   }
   
?>