<?php
include('config.php');
$nombre  = $_REQUEST['nombre'];
$direccion = $_REQUEST['direccion'];
$num 	 = $_REQUEST['num'];
$acercaDe 	 = $_REQUEST['acercaDe'];

$QueryInsert = ("INSERT INTO fundacion(
    nombre,
    direccion,
    num,
    acercaDe
)
VALUES (
    '".$nombre. "',
    '".$direccion. "',
    '".$num."',
    '".$acercaDe."'

)");
$inserInmueble = mysqli_query($con, $QueryInsert);

header("location:tablaFundacion.php");
?>
