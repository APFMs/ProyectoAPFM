<?php
include('Backend/conexion.php');
$query = "select * from imagenes";
$resultado = mysqli_query($con, $query);
?>
<!doctype html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Galeria</title>
    <!-- Custom styles for this template -->
    <link href="../css/carousel.css" rel="stylesheet">




    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>INICIO SOY TU VOZ</title>

    <link rel="canonical" href="../css/carousel/">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



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
            background-color: #fca006;
            border-color: #fca006;
            box-shadow: none;
        }

        .btn-ww {
            color: #fff;
            background-color: #ffb907;
            border-color: #ffb907;
            box-shadow: none;
        }

        @media (min-width: 576px) {
            .card-columns {
                -webkit-column-count: 5 !important;
                -moz-column-count: 5 !important;
                column-count: 4 !important;
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
        .form-select {
        border:  solid #fca006 4px;
        font-size: 1.1rem;
        line-height: 2;
        font-weight: 600;
        font: oblique bold 120% cursive;
        background-color: #ffb905;
        color: #fff;
        width: 70%;
        border-radius: 16px;
        }
        h6 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            max-width: 200px;
            overflow: hidden;
            text-overflow: ellipsis;
            height: 56px;
        }

        img {

            max-width: 800px;
            height: 200px;
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
                            <a class="btn btn-ww" href="../index.html" tabindex="-1" aria-disabled="true">Inicio</a>

                        </li>
                        <br>


                        <li class="nav-item" style="margin: 5px;">
                            <a class="btn btn-ww" href="../ventanas/informacion.php" tabindex="-1" aria-disabled="true">Requisitos Para Adoptar</a>

                        </li>
                        <br>

                        <li class="nav-item" style="margin: 5px;">
                            <a class="btn btn-ww" href="../login.html" tabindex="-1" aria-disabled="true">Ingresar</a>

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
        <?php
        $especies = array("Todos", "Perro", "Gato", "Otro");
        $tams = array("Todos", "Grande", "Mediano", "Pequeño");
        $colores = array("Todos", "Negro", "Blanco", "Café", "Plomo", "Naranja", "Blanco con Negro", "Blanco con café", "Otro");
        $sexos = array("Todos", "Macho", "Hembra");

        $where = array();
        $selectedEspecie = "";
        $selectedTam = "";
        $selectedColor = "";
        $selectedSexo = "";
        if (!isset($_POST["id"])) {
            $selectedEspecie = "Todos";
            $selectedTam = "Todos";
            $selectedColor = "Todos";
            $selectedSexo = "Todos";
        }
        if (isset($_POST['especie']) && $_POST['especie'] != '' && $_POST['especie'] != 'Todos') {
            $selectedEspecie = $_POST['especie'];
            $where[] = " M.especie = '$selectedEspecie'";
        }
        if (isset($_POST['tam']) && $_POST['tam'] != '' && $_POST['tam'] != 'Todos') {
            $selectedTam = $_POST['tam'];
            $where[] = " M.tam = '$selectedTam'";
        }
        if (isset($_POST['color']) && $_POST['color'] != '' && $_POST['color'] != 'Todos') {
            $selectedColor = $_POST['color'];
            $where[] = " color = '$selectedColor'";
        }
        if (isset($_POST['sexo']) && $_POST['sexo'] != '' && $_POST['sexo'] != 'Todos') {
            $selectedSexo = $_POST['sexo'];
            $where[] = " sexo = '$selectedSexo'";
        }
        ?>

        <form method="POST" action="galeria.php">
            <input type="hidden" name="id" value="1">

            <div class="container" id="cont_modal">
                <div class="row align-items-end" data-validate="Usuario incorrecto">
                    <div class="col-sm">
                        <label for="especie"><strong>Especie:</strong></label>
                        <select class="form-select form-select-sm" name="especie" id="especie">
                            <?php
                            foreach ($especies as $especie) {
                                $selected = ($especie == $selectedEspecie) ? "selected" : "";
                                echo "<option value='$especie' $selected>$especie</option>";
                            }
                            unset($especies);
                            ?>
                        </select>
                    </div>
                    <div class="col-sm">
                        <label for="tam"><strong>Tamaño:</strong></label>
                        <select class="form-select form-select-sm" aria-label=".form-select-lg example" name="tam" id="tam">
                            <?php
                            foreach ($tams as $tam) {
                                $selected = ($tam == $selectedTam) ? "selected" : "";
                                echo "<option value='$tam' $selected>$tam</option>";
                            }
                            unset($tams);
                            ?>
                        </select>
                    </div>
                    <div class="col-sm">
                        <label for="color"><strong>Color:</strong></label>
                        <select class="form-select form-select-sm" aria-label=".form-select-lg example" name="color" id="color">
                            <?php
                            foreach ($colores as $color) {
                                $selected = ($color == $selectedColor) ? "selected" : "";
                                echo "<option value='$color' $selected>$color</option>";
                            }
                            unset($colores);
                            ?>
                        </select>
                    </div>
                    <div class="col-sm">
                        <label for="sexo"><strong>Sexo:</strong></label>
                        <select class="form-select form-select-sm" aria-label=".form-select-lg example" name="sexo" id="sexo">
                            <?php
                            foreach ($sexos as $sexo) {
                                $selected = ($sexo == $selectedSexo) ? "selected" : "";
                                echo "<option value='$sexo' $selected>$sexo</option>";
                            }
                            unset($sexos);
                            ?>
                        </select>
                    </div>
                    <div class="col-sm">
                        <button type="submit" class="btn btn-df">Buscar</button>
                    </div>
                </div>

        </form>


        <div class="">
            <hr>
            <div class="card-columns">
                <?php
                $query = "SELECT I.imagen, I.idMascota, M.id, M.nombre, M.especie, M.edad, M.sexo, M.color, M.tam,  M.descripcion, M.adoptable 
                FROM imagenes I INNER JOIN mascota M ON I.idMascota=M.id AND M.adoptable in (1,3) and M.estado=1";

                if (!empty($where)) {
                    $query .= ' WHERE ' . implode(' AND ', $where);
                }
                $resultado = mysqli_query($con, $query);
                foreach ($resultado as $dataCliente) { ?>

                    <div class="card">
                        <img src="../fundacion/mascota/img/<?php echo $dataCliente['imagen']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><strong><?php echo $dataCliente['nombre']; ?></strong> <?php echo $dataCliente['adoptable'] == 3 ? "Reservado" : ""; ?> </h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo $dataCliente['descripcion']; ?></h6>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-df" data-toggle="modal" data-target="#masDetalles<?php echo $dataCliente['id']; ?>">
                                Mas Detalles
                            </button>
                            <?php include('ModalDetalles.php'); ?>

                            <?php if ($dataCliente['adoptable'] == 1) { ?>
                                <button type="button" class="btn btn-df" data-toggle="modal" data-target="#Formulario<?php echo $dataCliente['id']; ?>">
                                    Adoptar
                                </button>
                            <?php } ?>
                            <?php include('ModalSolicitar.php'); ?>

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