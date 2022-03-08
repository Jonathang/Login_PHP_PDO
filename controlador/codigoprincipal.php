<?php
  session_start();

  require '../modelo/db_local.php';

  if (isset($_SESSION['usuario_id'])) {
    $records = $conn->prepare('SELECT * FROM usuarios WHERE ID_usuario = :id');
    $records->bindParam(':id', $_SESSION['usuario_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }

?>