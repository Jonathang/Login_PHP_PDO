<?php
    require '../modelo/db_local.php';
    $tipo= 'E';

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $conn->prepare('SELECT * FROM usuarios WHERE Tipo_usuario=:tipo');
    $sql->bindParam(':tipo', $tipo);
    $sql->execute();
    $data = $sql->fetchAll(); 

                 
?>