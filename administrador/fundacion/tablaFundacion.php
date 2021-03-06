<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Administrador/Fundación </title>

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

    .btn-ds {
      color: #fff;
      background-color: #6f3dbf;
      border-color: #6f3dbf;
      box-shadow: none;
    }


    .btn-hj {
      color: #fff;
      background-color: #8a42c1;
      border-color: #8a42c1;
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

    .btn-primary1 {
      color: #fff447;
      background-color: #9a71e4;
      border-color: #9a71e4;
    }
  </style>

  <script>
    function adoptable() {

      $(document).ready(function() {
        var correo = $('#inputEmail').val();
        var contra = $('#inputPassword').val();
        $.post('verificar.php', {
          valor1: correo,
          valor2: contra
        }, function(result) {
          $('#valores').html(result);
        });

      });
    }
  </script>



</head>

<body class="hold-transition sidebar-mini">
  <?php
  $paginaAdministrador = "../tablaAdministrador.php";
  $paginaFundaciones = "tablaFundacion.php";
  $paginaMascota = "../mascota/tablaMascota.php";
  $paginaVoluntario = "../voluntario/tablaVoluntario.php";
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
          <a style="color:RED; font-weight: bold;" href="../../index.html" class="nav-link">Cerrar sesión</a>
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
      <a href="../index.html" class="brand-link">
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
            <a href="../Administrador.php" class="d-block"><?php echo $_SESSION["nombreUsuario"] ?></a>
          </div>
        </div>


        <!--borrado-->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->



            <li class="nav-item">
              <a href=<?php echo $paginaAdministrador ?> class="nav-link">
                <i class="fa fa-id-card"></i>
                <p>
                  Administradores
                </p>
              </a>
            </li>


            <li class="nav-item">
              <a href=<?php echo $paginaFundaciones ?> class="nav-link">
                <i class="fa fa-university"></i>
                <p>
                  Fundaciones
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
              <a href=<?php echo $paginaVoluntario ?> class="nav-link">
                <i class="fa fa-users"></i>
                <p>
                  Voluntarios
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
              <h1 style="color:#01a6a9; font-weight: bold;"><?php echo "BIENVENIDO " . strtoupper($_SESSION["nombreUsuario"]) ?></h1>
              <br>

              <tr>
                <td>
                  <button type="button" class="btn btn-primary1" data-toggle="modal" data-target="#insertChildresn">
                    Agregar Fundación
                  </button>
                  <?php include('ModalInsertar.php'); ?>
                </td>
              </tr>
              </form>
            </div>


            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Salir</a></li>

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

        $sqlQuery  = "SELECT * FROM fundacion WHERE estado=1 ORDER BY id DESC ";
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
            <strong style="color:#ec4c4c; font-size: 21px">Mostrando <?php echo $elementosPorPagina ?> de <?php echo $cantidad ?> Fundaciones</strong>
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
                              <th style="color:#115293;" scope="col">Nombre de la Fundación</th>
                              <th style="color:#115293;" scope="col">Teléfono</th>
                              <th style="color:#115293;" scope="col">Fecha de Creación</th>
                              <th style="color:#115293;" scope="col">Fecha de Actualización</th>

                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            while ($dataCliente = mysqli_fetch_array($queryCliente)) { ?>
                              <tr>
                                <td><?php echo $dataCliente['nombre']; ?></td>
                                <td><?php echo $dataCliente['num']; ?></td>
                                <td><?php echo $dataCliente['fechaCreacion']; ?></td>
                                <td><?php echo $dataCliente['fechaActualizacion']; ?></td>


                                <td>

                                  <button title="VER" type="button" class="btn btn-df" data-toggle="modal" data-target="#detalleChildresn<?php echo $dataCliente['id']; ?>">
                                    <i class="fa fa-eye"></i>
                                  </button>

                                  <button title="EDITAR" type="button" class="btn btn-primary" data-toggle="modal" data-target="#editChildresn<?php echo $dataCliente['id']; ?>">
                                    <i class="fas fa-edit"></i>
                                  </button>

                                  <button title="ELIMINAR" type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteChildresn<?php echo $dataCliente['id']; ?>">
                                    <i class="fa fa-times"></i>
                                  </button>
                                  <?php
                                  if ($dataCliente['persona_id'] == null) { ?>
                                    <button type="button" class="btn btn-hj" data-toggle="modal" data-target="#insert1Childresn<?php echo $dataCliente['id']; ?>">
                                      Agregar Director
                                    </button>
                                  <?php
                                  }
                                  ?>


                                </td>


                              </tr>
                              <!--Ventana Modal para Actualizar--->
                              <?php include('ModalEditar.php'); ?>

                              <!--Ventana Modal para la Alerta de Eliminar--->
                              <?php include('ModalEliminar.php'); ?>

                              <?php include('ModalInsertar.php'); ?>

                              <!--Ventana Modal para la Alerta de Eliminar--->
                              <?php include('ModalDetalles.php'); ?>


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