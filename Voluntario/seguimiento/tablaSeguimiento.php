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
      background-color: #e35c71;
      border-color: #e35c71;
      box-shadow: none;
    }

    .btn-ff {
      color: #fff;
      background-color: #ebb812;
      border-color: #ebb812;
      box-shadow: none;
    }

    .btn-ss {
      color: #fff;
      background-color: #19af9e;
      border-color: #19af9e;
      box-shadow: none;
    }
  </style>



</head>

<body class="hold-transition sidebar-mini">
  <?php
  $paginaMascota = "../mascota/tablaMascota.php";
  $paginaMascotaEnAdopcion = "../mascotaAdopcion/tablamascotaAdopcion.php";
  $paginaAdotantes = "../adoptante/tablaAdoptante.php";
  $paginaSeguimientos = "tablaSeguimiento.php";
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
          <a href="../Voluntario.php" class="nav-link">Volver</a>
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
            <a href="../Voluntario.php" class="d-block"><?php echo $_SESSION["nombreUsuario"] ?></a>
          </div>
        </div>


        <!--borrado-->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->




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
              </form>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!--TERMINA LA LINEA GRAFICA-->


      <!--PRUEBA-->

      <div class="container mt-1 p-1">

        <?php
        include('config.php');


        $sqlCliente   = ("SELECT S.id, CONCAT(S.nombre, ' ',S.apllpat, ' ', S.apllmat) as 'Adoptante', M.nombre as 'Mascota', COUNT(SE.id) as 'Visitas'
        FROM solicitudadopcion S INNER JOIN mascota M ON M.id=S.mascota_id LEFT JOIN seguimiento SE ON SE.solicitud_fk=S.id WHERE S.aprobada=2 AND M.idVoluntario=" . $_SESSION["idPersona"] . " GROUP BY S.id;");
        $queryCliente = mysqli_query($con, $sqlCliente);
        $cantidad     = mysqli_num_rows($queryCliente);
        ?>

        <div class="row text-center" style="background-color: #ffc66c">

          <div class="col-md-11">
            <strong>Seguimientos <span style="color: crimson"> ( <?php echo $cantidad; ?> )</span> </strong>
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
                              <th scope="col">Mascota</th>
                              <th scope="col">Adpotante</th>
                              <th scope="col">Seguimientos</th>

                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            while ($dataCliente = mysqli_fetch_array($queryCliente)) { ?>
                              <tr>
                                <td><?php echo $dataCliente['Adoptante']; ?></td>
                                <td><?php echo $dataCliente['Mascota']; ?></td>
                                <td><?php echo $dataCliente['Visitas']; ?></td>


                                <td>

                                  <!--   <button title="AGENDAR" type="button" class="btn btn-ss" data-toggle="modal" data-target="#agendarChildresn<?php echo $dataCliente['id']; ?>">
                                    <i class="fas fa-calendar-alt"></i> </button>-->

                                  <button title="REGISTRAR" type="button" class="btn btn-df" data-toggle="modal" data-target="#insertChildresn<?php echo $dataCliente['id']; ?>">
                                    <i class="fas fa-keyboard"></i>
                                  </button>


                                  <button  title="HISTORIAL" type="button" class="btn btn-ff" onclick="location.href='historial.php?id=<?php echo $dataCliente['id'];?>'"><i class="fas fa-folder"></i></button>


                                </td>

                              </tr>

                              <!--Ventana Modal para Actualizar--->
                              <?php include('ModalEditar.php'); ?>

                              <!--Ventana Modal para la Alerta de Eliminar--->
                              <?php include('ModalEliminar.php'); ?>

                              <!--Ventana Modal para la Alerta de Eliminar--->
                              <?php include('ModalInsertar.php'); ?>

                              <?php include('ModalAgendar.php'); ?>


                            <?php } ?>

                        </table>
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
              window.location.href = "tablaMascota.php";
              $('#respuesta').html(data);
            }
          });
          return false;

        });


      });
    </script>

</body>

</html>