<?php
    require '../modelo/db_local.php';
    
    if (isset($_POST['id_nombre']) && isset($_POST['matricula']) && isset($_POST['programacion'])  && isset($_POST['matematicas'])  && isset($_POST['algoritmos'])  && isset($_POST['logica'])  && isset($_POST['so'])  && isset($_POST['bd'])) {

        

        $sql = "INSERT INTO calificaciones (matricula, programacion, matematicas, algoritmos, logica, so, bd, usuario_id_fk) VALUES (:matricula, :programacion, :matematicas, :algoritmos, :logica, :so, :bd, :id_nombre)";
        $stmt = $conn->prepare($sql);  

        $matricula= $_POST['matricula'];
        $programacion= $_POST['programacion'];
        $matematicas = $_POST['matematicas'];
        $algoritmos = $_POST['algoritmos'];
        $logica = $_POST['logica'];
        $so = $_POST['so'];
        $bd = $_POST['bd'];
        $id_nombre = $_POST['id_nombre'];
       
         if(empty($_POST['id_nombre'])){
             echo"
             <script language='javascript'>
             alert('Debe seleccionar un estudiante')
             window.location='../vista/registroProfesor.php'
             </script>";
        }else{
            $stmt->bindParam(':id_nombre', $id_nombre);
            print_r($id_nombre);

        }
        // NOMBRE ESTUDIANTE - MATRICULA

        if(empty($_POST['matricula']) || strlen($matricula) == 8 || !preg_match('`[0-9]`', $matricula)){
             echo"
             <script language='javascript'>
             alert('El campo matricula no puede estar vacio y debe contener solo números')
             window.location='../vista/registroProfesor.php'
             </script>";
        }else{
            $stmt->bindParam(':matricula', $_POST['matricula']);
        }
        // MATRICULA

         if(empty($_POST['programacion']) || strlen($programacion) > 4 || !preg_match('`[0-9]`',$programacion)){
             echo"
             <script language='javascript'>
             alert('Digite una calificación no mayor a 3 digitos')
             window.location='../vista/registroProfesor.php'
             </script>";
        }else{
            $stmt->bindParam(':programacion', $_POST['programacion']);
        }
        // PROGRAMACION

        if(empty($_POST['matematicas']) || strlen($matematicas) > 4 || !preg_match('`[0-9]`',$matematicas)){
             echo"
             <script language='javascript'>
             alert('Digite una calificación no mayor a 3 digitos')
             window.location='../vista/registroProfesor.php'
             </script>";
        }else{
            $stmt->bindParam(':matematicas', $_POST['matematicas']);
        }
        // MATEMATICAS

        if(empty($_POST['algoritmos']) || strlen($algoritmos) > 4 || !preg_match('`[0-9]`',$algoritmos)){
             echo"
             <script language='javascript'>
             alert('Digite una calificación no mayor a 3 digitos')
             window.location='../vista/registroProfesor.php'
             </script>";
        }else{
            $stmt->bindParam(':algoritmos', $_POST['algoritmos']);
        }
        // ALGORITMOS


        if(empty($_POST['logica']) || strlen($logica) > 4 || !preg_match('`[0-9]`',$logica)){
             echo"
             <script language='javascript'>
             alert('Digite una calificación no mayor a 3 digitos')
             window.location='../vista/registroProfesor.php'
             </script>";
        }else{
            $stmt->bindParam(':logica', $_POST['logica']);
        }
        // LOGICA

        if(empty($_POST['so']) || strlen($so) > 4 || !preg_match('`[0-9]`',$so)){
             echo"
             <script language='javascript'>
             alert('Digite una calificación no mayor a 3 digitos')
             window.location='../vista/registroProfesor.php'
             </script>";
        }else{
            $stmt->bindParam(':so', $_POST['so']);
        }
        // SO

        if(empty($_POST['bd']) || strlen($bd) > 4 || !preg_match('`[0-9]`',$bd)){
             echo"
             <script language='javascript'>
             alert('Digite una calificación no mayor a 3 digitos')
             window.location='../vista/registroProfesor.php'
             </script>";
        }else{
            $stmt->bindParam(':bd', $_POST['bd']);
        }
        // BD

  if ($stmt->execute()) {

             echo"
             <script language='javascript'>
             alert('Estudiante registrado')
             window.location='../vista/principalProfesor.php'
             </script>";
             exit();       

         } else {
            echo"
             <script language='javascript'>
             alert('Hubo un problema!!!')
             window.location='../vista/registroProfesor.php'
             </script>";

     }
}
    
?>