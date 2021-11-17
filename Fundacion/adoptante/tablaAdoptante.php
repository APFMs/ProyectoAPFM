<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Voluntario </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="adminlte1.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <style>
    .navbar-light {
      background-color: #f39c12d4 !important;
    }

    .content-wrapper {
      background-color: #efe6d6;
    }


    .card {

      background-color: #ffe4ba;

    }


    .btn-df {
      color: #fff;
      background-color: #53b311;
      border-color: #53b311;
      box-shadow: none;
    }

    .btn-HH {
      color: #fff;
      background-color: #f8cf8f;
      border-color: #f8cf8f;
      box-shadow: none;
    }

    .btn-yy {
      color: #fff;
      background-color: #8353db;
      border-color: #8353db;
      box-shadow: none;
    }

    .btn-Q {
      color: #fff;
      background-color: #e35c71;
      border-color: #e35c71;
      box-shadow: none;
    }

    .btn-W {
      color: #fff;
      background-color: #ebb812;
      border-color: #ebb812;
      box-shadow: none;
    }

    .btn-E {
      color: #fff;
      background-color: #19af9e;
      border-color: #19af9e;
      box-shadow: none;
    }

    .page-link {

      color: #212529;
      background-color: #f39c12;
      border: 1 px solid #dee2e6;
    }

    .page-item.active .page-link {

      background-color: #ff7705;
      border-color: #ff7705;
    }
  </style>



</head>

<body class="hold-transition sidebar-mini">
  <?php
  $paginaVoluntario = "../voluntario/tablaVoluntario.php";
  $paginaMascota = "../mascota/tablaMascota.php";
  $paginaMascotaEnAdopcion = "../mascotaAdopcion/tablamascotaAdopcion.php";
  $paginaAdotantes = "tablaAdoptante.php";
  $paginaSeguimientos = "../seguimiento/tablaSeguimiento.php";
  $paginaNotificaciones = "../notificacion/tablaNotificacion.php";
  ?>
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="../Fundacion.php" class="nav-link">Volver</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="../../index.html" class="nav-link">Cerrar sesión</a>
          <?php
          session_start(); // para usar las variables de sesion                 
          ?>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>


        <!-- Notifications Dropdown Menu -->

        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>


      </ul>
    </nav>
    <!-- /.navbar -->


    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="../../index.html" class="brand-link">
        <img src="img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Somos Tu Voz</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="img/user.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="../Fundacion.php" class="d-block"><?php echo $_SESSION["nombreUsuario"] ?></a>
          </div>
        </div>

        <!--borrado-->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


            <li class="nav-item">
              <a href=<?php echo $paginaVoluntario ?> class="nav-link">
                <i class="fa fa-users"></i>
                <p>
                  Voluntarios
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href=<?php echo $paginaMascota ?> class="nav-link">
                <i class="fa fa-paw"></i>
                <p>
                  Mascotas
                </p>
              </a>
            </li>




            <li class="nav-item">
              <a href=<?php echo $paginaMascotaEnAdopcion ?> class="nav-link">
                <i class="fas fa-bone"></i>
                <p>
                  Mascotas en Adopción
                </p>
              </a>
            </li>



            <li class="nav-item">
              <a href=<?php echo $paginaAdotantes ?> class="nav-link">
                <i class="fa fa-address-book"></i>
                <p>
                  Adoptantes
                </p>
              </a>
            </li>


            <li class="nav-item">
              <a href=<?php echo $paginaSeguimientos ?> class="nav-link">
                <i class="fa fa-home"></i>
                <p>
                  Seguimientos
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href=<?php echo $paginaNotificaciones ?> class="nav-link">
                <i class="fa fa-envelope"></i>
                <p>
                  Notificaciones
                </p>
              </a>
            </li>


          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1><?php echo "BIENVENIDO " . strtoupper($_SESSION["nombreUsuario"]) ?></h1>
              <br>

              <tr>

              </tr>
              </form>
            </div>


            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="../../index.html">Salir</a></li>

              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!--TERMINA LA LINEA GRAFICA-->


      <!--PRUEBA-->

      <div class="container mt-1 p-1">

        <?php
        include('config.php');

        $elementosPorPagina = 10;
        $pagina = 1;
        if (isset($_GET["pagina"])) {
          $pagina = $_GET["pagina"];
        }

        $limit = $elementosPorPagina;
        $offset = ($pagina - 1) * $elementosPorPagina;


        $sqlQuery = "SELECT S.id as 'id', S.mascota_id, S.nombre AS 'nombreSolicitante',S.apllpat, S.apllmat, S.fechaNac, S.sexo, S.ci, S.num, S.depa, S.casa, S.direccion, S.fotoCi, S.fotoLuz, S.fotoCasa, S.aprobada, M.nombre as 'nombreMascota',S.info, M.idVoluntario, S.info,I.imagen, M.fundaciones_id
        FROM solicitudadopcion S INNER JOIN mascota M ON S.mascota_id=M.id
        INNER JOIN fundacion F ON F.id=M.fundaciones_id AND S.aprobada=2 AND F.persona_id=" . $_SESSION["idPersona"] . " LEFT JOIN imagenes I ON I.idMascota=M.id =" . $_SESSION['idPersona'] . "
        ORDER BY S.id DESC ";
        $pagination = " LIMIT " . $limit . " OFFSET " . $offset;

        $sqlCantidadElementos = ($sqlQuery);
        $queryCantidadElementos = mysqli_query($con, $sqlCantidadElementos);
        $cantidad = mysqli_num_rows($queryCantidadElementos);

        $paginas = ceil($cantidad / $elementosPorPagina);


        $sqlCliente   = ($sqlQuery . $pagination);
        $queryCliente = mysqli_query($con, $sqlCliente);
        ?>



        <div class="row text-center" style="background-color: #ffc66c">

          <div class="col-md-11">
            <strong>Mostrando <?php echo $elementosPorPagina ?> de <?php echo $cantidad ?> Adopciones</strong>
          </div>
        </div>


        <div class="row clearfix">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="body">
              <div class="row clearfix">


                <div class="col-sm-12">
                  <div class="row">
                    <div class="col-md-12 p-2">


                      <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                          <thead>
                            <tr>
                              <th scope="col">Adoptante</th>
                              <th scope="col">Mascota</th>
                              <th scope="col">Teléfono</th>
                              <th scope="col">Voluntario</th>
                              <th scope="col">CI</th>
                              <th scope="col">Boleta de pago</th>
                              <th scope="col">Casa</th>
                              <!--  <th scope="col">Fecha de Creación</th> -->

                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            while ($dataCliente = mysqli_fetch_array($queryCliente)) {

                              $sqlCliente3   = ("SELECT P.nombre 
                                FROM persona P WHERE P.id=" . $dataCliente['idVoluntario'] . ";");
                              $queryCliente3 = mysqli_query($con, $sqlCliente3);
                              $dataCliente3 = mysqli_fetch_array($queryCliente3);

                            ?>
                              <tr>
                                <td><?php echo $dataCliente['nombreSolicitante']; ?></td>
                                <td><?php echo $dataCliente['nombreMascota']; ?></td>
                                <td><?php echo $dataCliente['num']; ?></td>
                                <td><?php echo $dataCliente3['nombre']; ?></td>

                                <td> <button type="button" class="btn-HH" data-toggle="modal" data-target="#DCIChildresn<?php echo $dataCliente['id']; ?>">
                                    <img src="img/<?php echo $dataCliente['fotoCi']; ?>" height="35"></i>
                                  </button></td>

                                <td> <button type="button" class="btn-HH" data-toggle="modal" data-target="#DLUZChildresn<?php echo $dataCliente['id']; ?>">
                                    <img src="img/<?php echo $dataCliente['fotoLuz']; ?>" height="35"></i>
                                  </button></td>

                                <td> <button type="button" class="btn-HH" data-toggle="modal" data-target="#DCASAChildresn<?php echo $dataCliente['id']; ?>">
                                    <img src="img/<?php echo $dataCliente['fotoCasa']; ?>" height="35"> </i>
                                  </button></td>
                                <td>

                                  <button title="VER" type="button" class="btn btn-df" data-toggle="modal" data-target="#detalleChildresn<?php echo  $dataCliente['id']; ?>">
                                    <i class="fa fa-eye"></i>
                                  </button>

                                  <button title="EDITAR" type="button" class="btn btn-primary" data-toggle="modal" data-target="#editChildresn<?php echo $dataCliente['id']; ?>">
                                    <i class="fas fa-edit"></i>
                                  </button>

                                  <button title="ELIMINAR" type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteChildresn<?php echo $dataCliente['id']; ?>">
                                    <i class="fa fa-times"></i>
                                  </button>

                                  <button title="FOTO DE CI" type="button" class="btn btn-Q" data-toggle="modal" data-target="#foto2Childresn<?php echo $dataCliente['id']; ?>">
                                    <i class="fas fa-address-card"></i>
                                  </button>
                                  <button title="FOTO DE BOLETA DE PAGO" type="button" class="btn btn-W" data-toggle="modal" data-target="#fotoChildresn<?php echo $dataCliente['id']; ?>">
                                    <i class="fas fa-file-invoice-dollar"></i>
                                  </button>
                                  <button title="FOTO DE LA CASA" type="button" class="btn btn-E" data-toggle="modal" data-target="#foto1Childresn<?php echo $dataCliente['id']; ?>">
                                    <i class="fas fa-house-user"></i>
                                  </button>

                                  <!--  <?php
                                        if ($dataCliente['adoptante_id'] == null) { ?>
                                    <button type="button" class="btn btn-yy" data-toggle="modal" data-target="#insertChildresn">
                                      Agregar Adoptante
                                    </button>-->
                                <?php
                                        }
                                ?>



                                </td>
                              </tr>
                              <!--Ventana Modal para Actualizar--->
                              <?php include('ModalEditar.php'); ?>

                              <!--Ventana Modal para la Alerta de Eliminar--->
                              <?php include('ModalEliminar.php'); ?>

                              <!--Ventana Modal para la Alerta de Eliminar--->
                              <?php include('ModalDetalles.php'); ?>

                              <?php include('ModalInsertar.php'); ?>

                              <?php include('ModalIC.php'); ?>
                              <?php include('ModalDCI.php'); ?>

                              <?php include('ModalLuz.php'); ?>
                              <?php include('ModalDLUZ.php'); ?>

                              <?php include('ModalCasa.php'); ?>
                              <?php include('ModalDCASA.php'); ?>



                            <?php } ?>

                        </table>
                        <?php
                        include_once "../pagination.php";
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>



        </div>


        <!-- /.content -->
      </div>
      <!-- /.content-wrapper
      <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
        </div>
        <strong>Fundaciones de Cochabamba &copy; 2021 <a href="index.html">SomosTuVoz</a>.</strong> Por un mundo mejor.
      </footer>  -->

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->




    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="plugins/jszip/jszip.min.js"></script>
    <script src="plugins/pdfmake/pdfmake.min.js"></script>
    <script src="plugins/pdfmake/vfs_fonts.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="js/demo.js"></script>
    <!-- Page specific script -->




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
              window.location.href = "tablaAdoptante.php";
              $('#respuesta').html(data);
            }
          });
          return false;

        });


      });
    </script>

</body>

</html>