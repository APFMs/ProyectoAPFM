<?php
include('config.php');
$fechaVisita  = $_REQUEST['fechaVisita'];


$QueryInsert = ("INSERT INTO seguimiento(
    fechaVisita
)
VALUES (
    '".$fechaVisita. "'
)");
$inserInmueble = mysqli_query($con, $QueryInsert);

header("location:tablaSeguimiento.php");
?>
