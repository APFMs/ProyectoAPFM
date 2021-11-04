<?php
include('Backend/conexion.php');

$especie         = $_REQUEST['especie'];
$tam        = $_REQUEST['tam'];
$color        = $_REQUEST['color'];

// ejemplo mensaje
//$message = "Especie " . $especie . " tam " . $tam . " color " . $color;
//echo "<script type='text/javascript'>alert('$message');</script>";

//$query = "select * from imagenes";
//$resultado = mysqli_query($con, $query);

?>
<!doctype html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Document</title>
    <!-- Custom styles for this template -->
    <link href="../css/carousel.css" rel="stylesheet">




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

        .btn-df {
            color: #fff;
            background-color: #6f3dbf;
            border-color: #6f3dbf;
            box-shadow: none;
        }

        @media (min-width: 576px) {
            .card-columns {
                -webkit-column-count: 5 !important;
                -moz-column-count: 5 !important;
                column-count: 5 !important;
                -webkit-column-gap: 1.25rem;
                -moz-column-gap: 1.25rem;
                column-gap: 1.25rem;
                orphans: 1;
                widows: 1;
            }

            .card-columns .card {
                display: inline-block;
                width: 100%;
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


        <form method="POST" action="galeria2.php">
            <input type="hidden" name="id" value="">

            <div class="modal-body" id="cont_modal">
                <div class="from-group" data-validate="Usuario incorrecto">
                    <label for="">Especie:</label>
                    <select class="input100" name="especie" id="especie">
                        <?php
                        if ($especie == "Perro") {
                        ?>
                            <option value="Perro" selected>Perro</option>
                        <?php
                        } else {
                        ?>
                            <option value="Perro">Perro</option>
                        <?php
                        }
                        ?>
                        <?php
                        if ($especie == "Gato") {
                        ?>
                            <option value="Gato" selected>Gato</option>
                        <?php
                        } else {
                        ?>
                            <option value="Gato">Gato</option>
                        <?php
                        }
                        ?>
                        <?php
                        if ($especie == "Otro") {
                        ?>
                            <option value="Otro" selected>Otro</option>
                        <?php
                        } else {
                        ?>
                            <option value="Otro">Otro</option>
                        <?php
                        }
                        ?>
                    </select>
                    <label for="">Tamaño:</label>
                    <select class="input100" name="tam" id="tam">
                        <?php
                        if ($tam == "Grande") {
                        ?>
                            <option value="Grande" selected>Grande</option>
                        <?php
                        } else {
                        ?>
                            <option value="Grande">Grande</option>
                        <?php
                        }
                        ?>
                        <?php
                        if ($tam == "Mediano") {
                        ?>
                            <option value="Mediano" selected>Mediano</option>
                        <?php
                        } else {
                        ?>
                            <option value="Mediano">Mediano</option>
                        <?php
                        }
                        ?>
                        <?php
                        if ($tam == "Pequeño") {
                        ?>
                            <option value="Pequeño" selected>Pequeño</option>
                        <?php
                        } else {
                        ?>
                            <option value="Pequeño">Pequeño</option>
                        <?php
                        }
                        ?>
                    </select>

                    <label for="">Color:</label>
                    <select class="input100" name="color" id="color">
                        <?php
                        if ($color == "Negro") {
                        ?>
                            <option value="Negro" selected>Negro</option>
                        <?php
                        } else {
                        ?>
                            <option value="Negro">Negro</option>
                        <?php
                        }
                        ?>
                        <?php
                        if ($color == "Blanco") {
                        ?>
                            <option value="Balnco" selected>Blanco</option>
                        <?php
                        } else {
                        ?>
                            <option value="Blanco">Blanco</option>
                        <?php
                        }
                        ?>
                        <?php
                        if ($color == "Café") {
                        ?>
                            <option value="Café" selected>Café</option>
                        <?php
                        } else {
                        ?>
                            <option value="Café">Café</option>
                        <?php
                        }
                        ?>
                        <?php
                        if ($color == "Plomo") {
                        ?>
                            <option value="Plomo" selected>Plomo</option>
                        <?php
                        } else {
                        ?>
                            <option value="Plomo">Plomo</option>
                        <?php
                        }
                        ?>
                        <?php
                        if ($color == "Naranja") {
                        ?>
                            <option value="Naranja" selected>Naranja</option>
                        <?php
                        } else {
                        ?>
                            <option value="Naranja">Naranja</option>
                        <?php
                        }
                        ?>
                        <?php
                        if ($color == "Blanco con Negro") {
                        ?>
                            <option value="Blanco con Negro" selected>Blanco con Negro</option>
                        <?php
                        } else {
                        ?>
                            <option value="Blanco con Negro">Blanco con Negro</option>
                        <?php
                        }
                        ?>
                        <?php
                        if ($color == "Blanco con café") {
                        ?>
                            <option value="Blanco con café" selected>Blanco con café</option>
                        <?php
                        } else {
                        ?>
                            <option value="Blanco con café">Blanco con café</option>
                        <?php
                        }
                        ?>
                        <?php
                        if ($color == "Otro") {
                        ?>
                            <option value="Otro" selected>Otro</option>
                        <?php
                        } else {
                        ?>
                            <option value="Otro">Otro</option>
                        <?php
                        }
                        ?>
                    </select>


                    <button type="submit" class="btn btn-primary">Buscar</button>



                </div>

        </form>


        <div class="">
            <hr>
            <div class="card-columns">
                <?php

                if ($color == "Otro") {
                    $query = "SELECT I.imagen, I.idMascota, M.id, M.nombre, M.especie, M.edad, M.sexo, M.color, M.tam,  M.descripcion FROM imagenes I INNER JOIN mascota M ON I.idMascota=M.id AND M.adoptable=1 and M.estado=1 and M.especie='" . $especie . "' and M.tam='" . $tam . "';";
                    $resultado = mysqli_query($con, $query);
                    $cantidad     = mysqli_num_rows($resultado);

                    //$message = "Lamentamos infirmar que no exiten mascotas de este : " . $color . " Sin embargo estas estan disponibles";
                    //echo "<script type='text/javascript'>alert('$message');</script>";
                } else {
                    $query = "SELECT I.imagen, I.idMascota, M.id, M.nombre, M.especie, M.edad, M.sexo, M.color, M.tam,  M.descripcion FROM imagenes I INNER JOIN mascota M ON I.idMascota=M.id AND M.adoptable=1 and M.estado=1 and M.especie='" . $especie . "' and M.tam='" . $tam . "' and M.color='" . $color . "';";
                    $resultado = mysqli_query($con, $query);
                    $cantidad     = mysqli_num_rows($resultado);
                }
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

                            <button type="button" class="btn btn-df" data-toggle="modal" data-target="#Formulario<?php echo $dataCliente['id']; ?>">
                                Adoptar
                            </button>
                            <?php include('ModalSolicitar.php'); ?>

                        </div>

                    </div>
                <?php }

                ?>


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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            $(window).load(function() {
                $(".cargando").fadeOut(1000);
            });

            //Ocultar mensaje
            setTimeout(function() {
                $("#contenMsjs").fadeOut(1000);
            }, 3000);



            $('.btnBorrar').click(function(e) {
                e.preventDefault();
                var id = $(this).attr("id");

                var dataString = 'id=' + id;
                url = "recib_Delete.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: dataString,
                    success: function(data) {
                        window.location.href = "tablaFundacion.php";
                        $('#respuesta').html(data);
                    }
                });
                return false;

            });



        });
    </script>

</body>

</html>