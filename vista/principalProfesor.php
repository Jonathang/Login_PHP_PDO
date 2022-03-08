<?php require '../controlador/codigoprincipal.php' ?>
<?php
    if(isset($_SESSION['usuario_id'])){
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/estilos.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

    <title>UDS</title>
</head>

<body>
    <!-- barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand navegador" href="index.html"> </a>
            <!-- recorre el menu hacia la izquierda -->
            <div class="d-flex">
                <!-- boton cuando se hacen pantallas pequeñas -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-5 mb-2 mb-lg-0 m-0">
                        <li class="nav-item">
                            <!-- active es para seleccionar el item de la pagina activa -->
                            <a class="nav-link active">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="registroProfesor.php">Evaluar</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Consultar</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../cerrar.php">Salir</a>
                        </li>
                    </ul>
                </div>
                <!--collapse -->
            </div>
            <!--d-flex -->
        </div>
        <!--container -->
    </nav>
    <div class="container-fluid" id="contenido">
        <div class="row">
            <div class="col-12 datos">
                <h2><?php echo "<h4>Bienvenido: " .$user['Nombre_usuario']. "</h4>"; ?></h2>
                <h2><?php echo "<h4>Has iniciado como: " .$user['Tipo_usuario']. "</h4>"; ?></h2>
            </div>
        </div>
    </div><!-- CONTENIDO -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>




<?php
    }else{
        header('Location: ../index.html');
    }
?>