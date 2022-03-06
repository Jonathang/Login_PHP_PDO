<?php require '../controlador/codigoLogin.php' ?>
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
                            <a class="nav-link" href="../index.html">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="registrarse.php">Registrarse</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="iniciarSesion.php">Iniciar Sesión</a>
                        </li>
                    </ul>
                </div>
                <!--collapse -->
            </div>
            <!--d-flex -->
        </div>
        <!--container -->
    </nav>

    <div class="container-fluid fondo">
        <div class="d-flex">
            <div class="card card-login mb-3" style="max-width: 840px;">
                <div class="row g-0">
                    <div class="card-body cuerpo">
                        <h2 class="card-title text-center">Iniciar Sesión</h2> <!-- titulo formulario -->

                        <form name="formulariologin" action="" method="post">

                            <div class="input-group flex-nowrap my-4">
                                <span class="input-group-text formulario-login" id="addon-wrapping"><img
                                        src="../icons/badge_white_24dp.svg"></span>
                                <input type="text" class="form-control" placeholder="ID del usuario" aria-label="ID"
                                    aria-describedby="addon-wrapping" name="id" id="id" required>
                            </div><!-- ID_usuario -->

                            <div class="input-group flex-nowrap my-4">
                                <span class="input-group-text formulario-login" id="addon-wrapping"><img
                                        src="../icons/password_black_24dp.svg"></span>
                                <input type="password" class="form-control" placeholder="Password" aria-label="Pass"
                                    aria-describedby="addon-wrapping" name="pass" id="pass" required>

                            </div><!-- password -->
                            <div class="">
                                <input class="btn btn-primary col-lg-6 boton-login" type="submit" value="Entrar">
                            </div><!-- boton -->
                        </form>
                    </div><!-- car-body -->
                </div><!-- row -->
            </div><!-- card offset -->
        </div><!-- flex -->
        <div>
            <!-- container -->
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>