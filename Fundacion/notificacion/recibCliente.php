<?php
include('config.php');
$nombre      = $_REQUEST['nombre'];
$celular =$_REQUEST['celular'];
$edad =$_REQUEST['edad'];
$motivo =$_REQUEST['motivo'];

$QueryInsert = ("INSERT INTO solicitudadopcion(
    nombre,
    celular,
    edad,
    motivo
)
VALUES (
    '".$nombre. "',
    '".$celular. "',
    '".$edad."',
    '".$motivo."'
)");
$inserInmueble = mysqli_query($con, $QueryInsert);

header("location:tablaNotificacion.php");
?>
