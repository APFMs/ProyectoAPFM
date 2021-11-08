<?php
include('config.php');
$idSolicitud = $_REQUEST['id'];
$idMascota      = $_REQUEST['mascota_id'];
$fundaciones_id      = $_REQUEST['fundaciones_id'];
$opcion = $_REQUEST['opcion'];

if ($opcion == 2) {
    $update = ("UPDATE solicitudadopcion SET aprobada = 2 WHERE (id = " . $idSolicitud . ") and (mascota_id = " . $idMascota . ");");
    $result_update = mysqli_query($con, $update);

    $update2 = ("UPDATE mascota SET adoptable = 2 WHERE (id = " . $idMascota . ") and (fundaciones_id = " . $fundaciones_id . ");");
    $result_update2 = mysqli_query($con, $update2);
} else {
    if ($opcion == 3) {
        $update = ("UPDATE solicitudadopcion SET aprobada = 3 WHERE (id = " . $idSolicitud . ") and (mascota_id = " . $idMascota . ");");
        $result_update = mysqli_query($con, $update);
    }
}

echo "<script type='text/javascript'> 
        window.location='tablaNotificacion.php';
    </script>";
