<?php
include('config.php');
$idRegistros = $_REQUEST['id'];

$DeleteRegistro = ("UPDATE solicitudadopcion SET estado=1 WHERE id= '".$idRegistros."' ");
mysqli_query($con, $DeleteRegistro);

$sqlGetMascota = mysqli_fetch_assoc(mysqli_query($con, 
    "SELECT SA.mascota_id, M.adoptable FROM solicitudadopcion SA 
    INNER JOIN Mascota M on M.id=SA.mascota_id 
    WHERE SA.id=$idRegistros"));

$mascotaId = $sqlGetMascota["mascota_id"];
$adoptable = $sqlGetMascota["adoptable"];

if ($adoptable != 2) {
    $updateMascota = ("UPDATE mascota SET adoptable=1 WHERE id=$mascotaId");
    mysqli_query($con, $updateMascota);
}
?>