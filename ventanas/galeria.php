<?php
include('conexion.php');
$query = "select * from imagenes";
$resultado = mysqli_query($con, $query);
?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>INICIO SOY TU VOZ</title>

    <link rel="canonical" href="../css/carousel/">



    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="../css/carousel.css" rel="stylesheet">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Soy Tú Voz</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item" style="margin: 5px;">
                            <a class="btn btn-header btn-outline-warning" href="../index.html" tabindex="-1" aria-disabled="true">Inicio</a>

                        </li>
                        <br>


                        <li class="nav-item" style="margin: 5px;">
                            <a class="btn btn-header btn-outline-warning" href="../ventanas/informacion.php" tabindex="-1" aria-disabled="true">Requisitos Para Adoptar</a>

                        </li>
                        <br>

                        <li class="nav-item" style="margin: 5px;">
                            <a class="btn btn-header btn-outline-warning" href="../subirimagenes/index.php" tabindex="-1" aria-disabled="true">Galeria</a>

                        </li>
                        <br>

                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                        <button type="button" class="btn btn-outline-warning">Buscar</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main>

        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <svg class="bd-placeholder-img" width="100%" height="10%" aria-hidden="true" preserveAspectRatio="xMidYMid slice">
                        <rect width="100%" height="100%" fill="#777" />
                    </svg>


                    <img src="img/mascota4.jpg" alt="">

                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>Realizamos un seguimiento.</h1>
                            <p>Como cada mascota encontro a su familia. que esperas para seguir el ejemplo.</p>
                            <button type="button" class="btn">Vealos Aquí</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>






        <form method="POST" action="recibCliente.php">
            <input type="hidden" name="id" value="">

            <div class="modal-body" id="cont_modal">
                <div class="from-group" data-validate="Usuario incorrecto">
                    <label for="">Especie:</label>
                    <select class="input100" name="especie" id="especie">
                        <option value="Perro">Perro</option>
                        <option value="Gato">Gato</option>
                        <option value="Otro">Otro</option>
                    </select>

                    <label for="">Tamaño:</label>
                    <select class="input100" name="especie" id="especie">
                        <option value="Perro">Grande </option>
                        <option value="Gato">Mediano</option>
                        <option value="Otro">Pequeño</option>
                    </select>

                    <label for="">Color:</label>
                    <select class="input100" name="color" id="color">
                        <option value="Negro">Negro</option>
                        <option value="Blanco">Blanco</option>
                        <option value="Café">Café</option>
                        <option value="Plomo">Plomo</option>
                        <option value="Naranja">Naranja</option>
                        <option value="Blanco con Negro">Blanco con Negro</option>
                        <option value="Blanco con café">Blanco con café</option>
                        <option value="Otro">Otro</option>
                    </select>


                    <a class="btn btn-header btn-outline-warning" href="login.html" tabindex="-1" aria-disabled="true">Buscar</a>



                </div>

        </form>


        <div class="col-lg-8">
            <h1 class="text-primary text-center">Galeria de Imagenes</h1>
            <hr>
            <div class="card-columns">
                <?php
                $query = "SELECT I.imagen, I.idMascota, M.id, M.nombre, M.especie, M.edad, M.sexo, M.color, M.tam,  M.descripcion FROM imagenes I INNER JOIN mascota M ON I.idMascota=M.id";
                $resultado = mysqli_query($con, $query);
                foreach ($resultado as $dataCliente) { ?>

                    <div class="card">
                        <img src="../fundacion/mascota/img/<?php echo $dataCliente['imagen']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><strong><?php echo $dataCliente['nombre']; ?></strong></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo $dataCliente['descripcion']; ?></h6>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-df" data-toggle="modal" data-target="#masDetalles<?php echo $dataCliente['id']; ?>">
                                Mas Detalles
                            </button>
                            <?php include('ModalDetalles.php'); ?>

                        </div>

                    </div>
                <?php } ?>

            </div>

        </div>

        <!-- Marketing messaging and featurettes
  ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->



        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

        <!-- FOOTER -->
        <footer class="container">
            <p class="float-end"><a href="#">INICIO</a></p>
            <p class="mt-5 mb-3 text-muted">&copy; Soy Tu Voz CBBA-2021</p>
        </footer>
    </main>


    <script src="../js/bootstrap.bundle.min.js"></script>


</body>

</html>