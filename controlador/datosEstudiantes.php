<?php
  require '../modelo/db_local.php';
  
  session_start();
  
  if (isset($_SESSION['usuario_id'])) {
    $records = $conn->prepare('SELECT usuarios.Nombre_usuario, calificaciones.matricula FROM usuarios INNER JOIN calificaciones ON usuarios.ID_usuario= calificaciones.usuario_id_fk WHERE usuarios.ID_usuario= :id');
    $records->bindParam(':id', $_SESSION['usuario_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }

?>