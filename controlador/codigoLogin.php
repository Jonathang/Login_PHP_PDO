<?php

if($_POST){

  session_start();
  require '../modelo/db.php';
  $id = $_POST['id'];
  $password = $_POST['pass'];
  
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = $conn->prepare("SELECT * FROM usuarios WHERE ID_usuario=:id AND Pass=:pass");
  $sql->bindParam(":id", $id);
  $sql->bindParam(":pass", $password);
  $sql->execute();
  $resultado = $sql->fetch(PDO::FETCH_ASSOC);

  if($resultado){
    $_SESSION['usuario_id'] = $resultado['ID_usuario'];

    if($resultado > 1){
      header("Location: ../vista/principalAlumno.php");
    }else{
      header("Location: ../vista/principalProfesor.php");
    }

  }else{
    header('Location: ../vista/error.html');
  }

}

?>