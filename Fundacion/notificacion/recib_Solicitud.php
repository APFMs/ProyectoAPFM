<?php
include('config.php');
$idSolicitud = $_REQUEST['id'];
$idMascota      = $_REQUEST['mascota_id'];
$fundaciones_id      = $_REQUEST['fundaciones_id'];
$opcion = $_REQUEST['opcion'];

$update = ("SELECT aprobada FROM solicitudadopcion WHERE (mascota_id = " . $idMascota . ");");
$result_update = mysqli_query($con, $update);
$data = mysqli_fetch_array($result_update);
if ($data['aprobada'] != 2) {

    if ($opcion == 2) {
        $update = ("UPDATE solicitudadopcion SET aprobada = 2 WHERE (id = " . $idSolicitud . ") and (mascota_id = " . $idMascota . ");");
        $result_update = mysqli_query($con, $update);

        $fechaAdopcion = date_create('now')->format('Y-m-d');
        $update2 = ("UPDATE mascota SET adoptable = 2, fechaAdopcion='$fechaAdopcion' WHERE (id = " . $idMascota . ") and (fundaciones_id = " . $fundaciones_id . ");");
        $result_update2 = mysqli_query($con, $update2);
    } else if ($opcion == 3) {
            $update = ("UPDATE solicitudadopcion SET aprobada = 3 WHERE (id = " . $idSolicitud . ") and (mascota_id = " . $idMascota . ");");
            $result_update = mysqli_query($con, $update);

            $updateMascota = ("UPDATE mascota SET adoptable=1 WHERE id='$idMascota'");
            $result_update = mysqli_query($con, $updateMascota);
    }
}




echo "<script type='text/javascript'> 
        window.location='tablaNotificacion.php';
    </script>";
