<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Administrador/Reportes </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.css">
  <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../adminlte1.css">
  <link href="../../css/bootstrap.min.css" rel="stylesheet">
  <link href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css" rel="stylesheet" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

  <!-- Include Bootstrap Datepicker -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>


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
    $(document).ready(function() {
      $("#startdate_datepicker").datepicker({
        format: 'yyyy-mm-dd'
      });
      $("#enddate_datepicker").datepicker({
        format: 'yyyy-mm-dd'
      });
    });
  </script>



</head>

<body class="hold-transition sidebar-mini">
  <?php
  $paginaVoluntario = "../voluntario/tablaVoluntario.php";
  $paginaMascota = "../mascota/tablaMascota.php";
  $paginaMascotaEnAdopcion = "../mascotaAdopcion/tablamascotaAdopcion.php";
  $paginaAdotantes = "../adoptante/tablaAdoptante.php";
  $paginaSeguimientos = "../seguimiento/tablaSeguimiento.php";
  $paginaNotificaciones = "../notificacion/tablaNotificacion.php";
  $paginaReportes = "reporteAdopciones.php";
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
          <a href="../Administrador.php" class="nav-link">Volver</a>
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
        <img src="../img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Somos Tu Voz</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../img/user.png" class="img-circle elevation-2" alt="User Image">
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
                <i class="fa fa-paw"></i>
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
            <li class="nav-item">
              <a href=<?php echo $paginaReportes ?> class="nav-link">
                <i class="fa fa-file"></i>
                <p>
                  Reporte de Adopciones
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
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!--TERMINA LA LINEA GRAFICA-->


      <!--TABLA DE MASCOTAS-->

      <div class="container-fluid mt-1 p-5">
        <?php
        include('../config.php');

        $idPersona = $_SESSION["idPersona"];
        $sqlGetFunId = mysqli_fetch_assoc(mysqli_query($con, "SELECT id, nombre FROM fundacion WHERE persona_id = $idPersona"));
        $funId = $sqlGetFunId["id"];
        $funName = $sqlGetFunId["nombre"];

        $selectVoluntarios = (
            "SELECT p.id, p.nombre, p.apllpat, apllmat FROM voluntario v
            JOIN persona p ON v.persona_idPERSONA=p.id 
            WHERE v.estado=1 AND v.fundaciones_id=$funId ORDER BY p.apllpat");

        $queryVoluntarios = mysqli_query($con, $selectVoluntarios);

        $selectMascotas = (
            "SELECT m.id, m.nombre FROM mascota m
            INNER JOIN solicitudadopcion S ON m.id=S.mascota_id 
            WHERE S.aprobada=2 AND m.estado=1 AND m.fundaciones_id=$funId
            GROUP BY m.id
            ORDER BY m.nombre");
        $queryMascotas = mysqli_query($con, $selectMascotas);

        $where = array();
        $selectedMascota = "";
        $selectedVoluntario = "";
        $selectedFechaVisita = "";
        $startDate = "";
        $endDate = "";

        if (!isset($_POST["id"])) {
          $selectedMascota = "Todos";
          $selectedVoluntario = "Todos";
          $selectedFechaVisita = "Todos";
        }
        if (isset($_POST['mascota']) && $_POST['mascota'] != '' && $_POST['mascota'] != 'Todos') {
          $selectedMascota = $_POST['mascota'];
          $where[] = " S.mascota_id = '$selectedMascota'";
        }
        if (isset($_POST['voluntario']) && $_POST['voluntario'] != '' && $_POST['voluntario'] != 'Todos') {
          $selectedVoluntario = $_POST['voluntario'];
          $where[] = " M.idVoluntario = '$selectedVoluntario'";
        }
        if (isset($_POST['startdate_datepicker']) && $_POST['startdate_datepicker'] != '') {
            $startDate = $_POST['startdate_datepicker'];
        }
        if (isset($_POST['enddate_datepicker']) && $_POST['enddate_datepicker'] != '') {
            $endDate = $_POST['enddate_datepicker'];
        }
        if ($startDate != "" && $endDate != "") {
            $where[] = " SE.fechaVisita between '$startDate' AND '$endDate'";
        } else if ($startDate != "" && $endDate == "") {
            $where[] = " SE.fechaVisita between '$startDate' AND NOW()";
        } else if ($endDate != "" && $startDate == "") {
            $where[] = " SE.fechaVisita between '1800-01-01' AND '$endDate'";
        }

        ?>
        <form method="POST" action="reporteSeguimientos.php">
          <input type="hidden" name="id" value="1">
          <div class="row align-items-end mb-3">
            <div class="col-sm">
              <label for="startdate_datepicker"><strong>Fecha de Seguimiento:</strong></label>
              <div class="start_date input-group mb-2">
                <input class="form-control start_date" type="text" placeholder="Fecha Inicio" id="startdate_datepicker" name="startdate_datepicker" value="<?php echo $startDate ?>">
                <div class="input-group-append">
                  <span class="fa fa-calendar input-group-text start_date_calendar" aria-hidden="true "></span>
                </div>
              </div>
              <div class="end_date input-group">
                <input class="form-control end_date" type="text" placeholder="Fecha Fin" id="enddate_datepicker" name="enddate_datepicker" value="<?php echo $endDate ?>">
                <div class="input-group-append">
                  <span class="fa fa-calendar input-group-text end_date_calendar" aria-hidden="true "></span>
                </div>
              </div>
            </div>
            <div class="col-sm">
              <label for="fundacion"><strong>Mascota:</strong></label>
              <select class="form-select form-select-sm" name="mascota" id="mascota">
                <?php
                  echo "<option value='Todos'>Todos</option>";
                  while($mascotas = mysqli_fetch_array($queryMascotas)) {
                    $mascotaId = $mascotas['id'];
                    $mascotaName = $mascotas['nombre'];
                    $selected = ($mascotaId == $selectedMascota) ? "selected" : "";
                    echo "<option value='$mascotaId' $selected>$mascotaName</option>";
                  }
                ?>
              </select>
            </div>
            <div class="col-sm">
              <label for="fundacion"><strong>Voluntario:</strong></label>
              <select class="form-select form-select-sm" name="voluntario" id="voluntario">
                <?php
                  echo "<option value='Todos'>Todos</option>";
                  while($voluntarios = mysqli_fetch_array($queryVoluntarios)) {
                    $voluntarioId = $voluntarios['id'];
                    $voluntarioName = $voluntarios['apllpat'] . " " . $voluntarios['apllmat'] . " " . $voluntarios['nombre'];
                    $selected = ($voluntarioId == $selectedVoluntario) ? "selected" : "";
                    echo "<option value='$voluntarioId' $selected>$voluntarioName</option>";
                  }
                ?>
              </select>
            </div>
            <div class="col-sm">
              <button type="submit" class="btn btn-primary">Filtrar</button>
            </div>
          </div>
        </form>
        <?php
        
        $sqlCliente   =
            "SELECT S.id, CONCAT(S.nombre, ' ',S.apllpat, ' ', S.apllmat) as 'Adoptante', M.nombre as 'Mascota',
                M.idVoluntario, P.nombre as 'Voluntario', M.id as mascotaId, SE.fechaVisita, SE.reporte
            FROM solicitudadopcion S 
            INNER JOIN mascota M ON M.id=S.mascota_id 
            LEFT JOIN seguimiento SE ON SE.solicitud_fk=S.id 
            INNER JOIN persona P ON P.id=M.idVoluntario";
        
        $where[] = " S.aprobada=2 AND M.fundaciones_id=$funId";

        if (!empty($where)) {
          $sqlCliente .= ' WHERE ' . implode(' AND ', $where);
        }

        $sqlCliente .= " ORDER BY Mascota, SE.fechaVisita";

        $queryCliente = mysqli_query($con, $sqlCliente);
        $cantidad     = mysqli_num_rows($queryCliente);
        ?>
        <div class="row text-center" style="background-color: #ffc66c">
          <div class="col-md-11">
            <strong>Reporte de Seguimientos <span style="color: crimson"> ( <?php echo $cantidad; ?> )</span> </strong>
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
                              <th scope="col">Nombre Mascota</th>
                              <th scope="col">Adoptante</th>
                              <th scope="col">Voluntario</th>
                              <th scope="col">Fecha de Visita</th>
                              <th scope="col">Reporte</th>
                              <th scope="col">Fundación</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            while ($dataCliente = mysqli_fetch_array($queryCliente)) {
                            ?>
                              <tr>
                                <td><?php echo $dataCliente['Mascota']; ?></td>
                                <td><?php echo $dataCliente['Adoptante']; ?></td>
                                <td><?php echo $dataCliente['Voluntario']; ?></td>
                                <td><?php echo $dataCliente['fechaVisita']; ?></td>
                                <td><?php echo $dataCliente['reporte']; ?></td>
                                <td><?php echo $funName; ?></td>
                              </tr>
                            <?php } ?>

                        </table>
                      </div>
                      <div>
                        <form name="reportForm" id="reportForm" method="POST" target="_blank" action="reporteSeguimientosPDF.php">
                          <input type="hidden" name="rMascota" id="rMascota" value="">
                          <input type="hidden" name="rVoluntario" id="rVoluntario" value="">
                          <input type="hidden" name="rFechaInicio" id="rFechaInicio" value="">
                          <input type="hidden" name="rFechaFin" id="rFechaFin" value="">
                          <input type="hidden" name="rFundId" id="rFundId" value="">
                          <input type="hidden" name="rFundName" id="rFundName" value="">
                          <button type="submit" class="btn btn-primary">Exportar Reporte</button>
                        </form>
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

    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../plugins/jszip/jszip.min.js"></script>
    <script src="../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../js/demo.js"></script>
    <!-- Page specific script -->



    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function() {

        $(window).load(function() {
          $(".cargando").fadeOut(1000);
        });

        //Ocultar mensaje
        setTimeout(function() {
          $("#contenMsjs").fadeOut(1000);
        }, 3000);

        $("#reportForm").submit(function(event) {
          $("#rMascota").val($("#mascota").val());
          $("#rVoluntario").val($("#voluntario").val());
          $("#rFechaInicio").val($("#startdate_datepicker").val());
          $("#rFechaFin").val($("#enddate_datepicker").val());
          $("#rFundId").val(<?php echo $funId; ?>);
          $("#rFundName").val("<?php echo $funName; ?>");
          //event.preventDefault();
        });
      });
    </script>


</body>

</html>
