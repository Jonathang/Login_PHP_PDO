<?php require '../controlador/codigoRegistroEstudiante.php' ?>
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
                            <a class="nav-link" href="principalProfesor.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active">Evaluar</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link">Consultar</a>
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

    <div class="container-fluid fondo">
        <div class="d-flex">
            <div class="card card-total mb-3" style="max-width: 840px;">
                <div class="row g-0">
                    <div class="card-body">
                        <h2 class="card-title text-center">Registro de Calificación</h2> <!-- titulo formulario -->

                        <form action="../controlador/codigoRegistroEstudiante.php" method="post" id="formulario">

                            <select class="form-select" aria-label="Default select example" name="nombre_estudiante"
                                required id="id_nombre">
                                <option value selected="">Seleccione un estudiante</option>
                                <?php
                                require '../controlador/consultas.php';  
                                foreach ($data as $valores):
                                ?>
                                <option value="<?php echo $valores[0]; ?>"><?php echo $valores["1"]; ?>
                                </option>
                                <?php
                                endforeach; 
                                ?>
                            </select>
                            <!-- NOMBRE DE ESTUDIANTE -->

                            <div class="input-group flex-nowrap my-4">
                                <span class="input-group-text formulario-registrate" id="addon-wrapping"><img
                                        src="../icons/badge_white_24dp.svg"></span>

                                <input type="text" class="form-control" placeholder="Matrícula" aria-label="MATRICULA"
                                    aria-describedby="addon-wrapping" name="matricula" id="matricula">
                            </div><!-- MATRICULA -->

                            <div class="input-group flex-nowrap my-4 formulario-registro">
                                <span class="input-group-text formulario-registrate" id="addon-wrapping"><img
                                        src="../icons/draw_white_24dp.svg"></span>
                                <input type="text" class="form-control" placeholder="Programación"
                                    aria-label="Programacion" aria-describedby="addon-wrapping" name="programacion"
                                    id="Programacion">
                            </div><!-- MATERIA PROGRAMACIÓN -->

                            <div class="input-group flex-nowrap my-4 formulario-registro">
                                <span class="input-group-text formulario-registrate" id="addon-wrapping"><img
                                        src="../icons/draw_white_24dp.svg"></span>
                                <input type="text" class="form-control" placeholder="Matemáticas" aria-label="Mate"
                                    aria-describedby="addon-wrapping" name="matematicas" id="matematicas">
                            </div><!-- MATERIA MATEMÁTICAS -->

                            <div class="input-group flex-nowrap my-4 formulario-registro">
                                <span class="input-group-text formulario-registrate" id="addon-wrapping"><img
                                        src="../icons/draw_white_24dp.svg"></span>
                                <input type="text" class="form-control" placeholder="Algoritmos" aria-label="Algo"
                                    aria-describedby="addon-wrapping" name="algoritmos" id="algoritmos">
                            </div><!-- MATERIA ALGORITMOS -->

                            <div class="input-group flex-nowrap my-4 formulario-registro">
                                <span class="input-group-text formulario-registrate" id="addon-wrapping"><img
                                        src="../icons/draw_white_24dp.svg"></span>
                                <input type="text" class="form-control" placeholder="Lógica" aria-label="Logica"
                                    aria-describedby="addon-wrapping" name="logica" id="logica">
                            </div><!-- MATERIA LÓGICA -->

                            <div class="input-group flex-nowrap my-4 formulario-registro">
                                <span class="input-group-text formulario-registrate" id="addon-wrapping"><img
                                        src="../icons/draw_white_24dp.svg"></span>
                                <input type="text" class="form-control" placeholder="SO" aria-label="SO"
                                    aria-describedby="addon-wrapping" name="so" id="so">
                            </div><!-- MATERIA SO -->

                            <div class="input-group flex-nowrap my-4 formulario-registro">
                                <span class="input-group-text formulario-registrate" id="addon-wrapping"><img
                                        src="../icons/draw_white_24dp.svg"></span>
                                <input type="text" class="form-control" placeholder="BD" aria-label="bd"
                                    aria-describedby="addon-wrapping" name="bd" id="bd">
                            </div><!-- MATERIA BD -->

                            <div class="">
                                <input class="btn btn-primary col-lg-6 boton-registrate" type="submit"
                                    value="Registrar">
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