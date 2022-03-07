<?php
    require '../modelo/db_local.php';
    
    if (isset($_POST['id']) && isset($_POST['nombre']) && isset($_POST['pass'])) {

        $sql = "INSERT INTO usuarios (ID_usuario, Nombre_usuario, Tipo_usuario, Pass) VALUES (:id, :nombre, :tipo, :pass)";
        $stmt = $conn->prepare($sql);  

        $id = $_POST['id'];
        $nombre= $_POST['nombre'];
        $tipo= $_POST['tipo'];
        $pass = $_POST['pass'];

        $sql2 = "SELECT * FROM usuarios WHERE ID_usuario=$id";
        $resultado =$conn->query($sql2);
       

        if(empty($_POST['id']) || strlen($id) > 4 || !preg_match('`[0-9]`',$id)){
              echo"
              <script language='javascript'>
              alert('El ID de Usuario debe ser menor o igual a 4 digitos')
              window.location='../vista/registrarse.php'
              </script>";
             
        }else if($resultado->fetchColumn() > 0 ){
             echo"
             <script language='javascript'>
             alert('Este ID ya existe, seleccione otro')
             window.location='../vista/registrarse.php'
             </script>";
          
        }else{
              $stmt->bindParam(':id', $_POST['id']);
        }
        //ID USUARIO

        if(empty($_POST['nombre']) || !preg_match('`[a-z]`',$nombre)){
             echo"
             <script language='javascript'>
             alert('El campo nombre no puede estar vacio y debe contener solo letras')
             window.location='../vista/registrarse.php'
             </script>";
        }else{
            $stmt->bindParam(':nombre', $_POST['nombre']);
        }
        // NOMBRE DE USUARIO

         if(empty($_POST['tipo'])){
             echo"
             <script language='javascript'>
             alert('Seleccione una opción')
             window.location='../vista/registrarse.php'
             </script>";
        }else{
            $stmt->bindParam(':tipo', $_POST['tipo']);
        }
        // TIPO DE USUARIO

        $patern = '`[#,$,-,_,&,%,/,(,),=,+,*,|,°,¬,\,!,¡,¿,?,.,;,:]`';
        if(empty($_POST['pass']) || strlen($pass) <= 7 || !preg_match('`[a-z]`',$pass) || !preg_match('`[0-9]`',$pass) 
                || !preg_match($patern, $pass)){
             echo"
             <script language='javascript'>
             alert('El password no puede estar vacio, debe ser mayor o igual a 8 caracteres, tener letras y números y algún caracter')
             window.location='../vista/registrarse.php'
             </script>";
        }else{
         
            $stmt->bindParam(':pass', $pass);
        }
        // PASSWORD

  if ($stmt->execute()) {

             echo"
             <script language='javascript'>
             alert('Usuario registrado')
             window.location='../index.html'
             </script>";
             exit();       

         } else {
            echo"
             <script language='javascript'>
             alert('Hubo un problema!!!')
             window.location='registrate.php'
             </script>";

     }
}
    
?>