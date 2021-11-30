<?php
include('config.php');
$idRegistros = $_REQUEST['id'];
$idMascota = $_REQUEST['mascota_id'];

$DeleteRegistro = ("UPDATE solicitudadopcion SET estado=1 WHERE id= '".$idRegistros."' ");
mysqli_query($con, $DeleteRegistro);
$DeleteRegistro = ("UPDATE mascota SET adoptable=1 WHERE id= '".$idRegistros."' ");
mysqli_query($con, $DeleteRegistro);
?>