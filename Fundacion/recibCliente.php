<?php
include('config.php');
$nombre  = $_REQUEST['nombre'];
$direccion = $_REQUEST['especie'];
$num 	 = $_REQUEST['edad'];
$acercaDe 	 = $_REQUEST['sexo'];

$QueryInsert = ("INSERT INTO fundaciones(
    nombre,
    direcion,
    num,
    acercaDe
)
VALUES (
    '".$nombre. "',
    '".$direccion. "',
    '".$num."',
    '".$acercaDe."',

)");
$inserInmueble = mysqli_query($con, $QueryInsert);

header("location:Administrador.php");
?>
