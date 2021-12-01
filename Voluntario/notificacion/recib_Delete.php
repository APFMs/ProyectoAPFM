<?php
include('config.php');
$idRegistros = $_REQUEST['id'];

$DeleteRegistro = ("UPDATE solicitudadopcion SET estado=1 WHERE id= '".$idRegistros."' ");
mysqli_query($con, $DeleteRegistro);

$sqlGetMascotaId = mysqli_fetch_assoc(mysqli_query($con, "SELECT mascota_id FROM solicitudadopcion WHERE id = $idRegistros"));
$mascotaId = $sqlGetMascotaId["mascota_id"];

$updateMascota = ("UPDATE mascota SET adoptable=1 WHERE id= '".$mascotaId."' ");
mysqli_query($con, $updateMascota);
?>