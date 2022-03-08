<?php require '../controlador/codigoConsultarProfesor.php';?>

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
                            <a class="nav-link" href="registroProfesor.php">Evaluar</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active">Consultar</a>
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

    <div class="container-fluid tabla-estudiantes">
        <div class="row tabla-scroll">
            <div class="table-responsive-sm tabla-scroll">
                <table class="table table-striped table-hover tabla" cellspacing="0" width="100%">

                    <thead class="cabecera">
                        <tr class="campos">

                            <td scope="col-sm-12">Matrícula</td>
                            <td scope="col-sm-12">Nombre</td>
                            <td scope="col-sm-12" class="text-center">Programación</td>
                            <td scope="col-sm-12" class="text-center">Matemáticas</td>
                            <td scope="col-sm-12" class="text-center">Algoritmos</td>
                            <td scope="col-sm-12" class="text-center">Lógica</td>
                            <td scope="col-sm-12" class="text-center">SO</td>
                            <td scope="col-sm-12" class="text-center">BD</td>
                        </tr>
                    </thead>


                    <tbody>
                        <?php
            
                foreach ($stm as $dato):
                
                  ?>

                        <tr class="campos">
                            <td><?php echo $dato->matricula; ?></td>
                            <td><?php echo $dato->Nombre_usuario; ?></td>
                            <td class="text-center"><?php echo $dato->programacion; ?></td>
                            <td class="text-center"><?php echo $dato->matematicas; ?></td>
                            <td class="text-center"><?php echo $dato->algoritmos; ?></td>
                            <td class="text-center"><?php echo $dato->logica; ?></td>
                            <td class="text-center"><?php echo $dato->so; ?></td>
                            <td class="text-center"><?php echo $dato->bd; ?></td>

                        </tr>

                        <?php
                       endforeach
  
                  ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>