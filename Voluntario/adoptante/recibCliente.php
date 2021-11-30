<?php
include('config.php');
$nombre  = $_REQUEST['nombre'];
$apllpat = $_REQUEST['apllpat'];
$apllmat = $_REQUEST['apllmat'];
$edad    = $_REQUEST['edad'];
$sexo 	 = $_REQUEST['sexo'];
$num	 = $_REQUEST['num'];
$casa    = $_REQUEST['casa'];
$fami    = $_REQUEST['fami'];
$ci      = $_REQUEST['ci'];
$recibo  = $_REQUEST['recibo'];

$QueryInsert = ("INSERT INTO adoptante(
    nombre,
    apllpat,
    apllmat,
    edad,
    sexo,
    num,
    casa,
    fami,
    ci,
    recibo
)
VALUES (
    '".$nombre. "',
    '".$apllpat. "',
    '".$apllmat."',
    '".$edad."',
    '".$sexo."',
    '".$num."',
    '".$casa."',
    '".$fami."',
    '".$ci."',
    '".$recibo."'
)");
$inserInmueble = mysqli_query($con, $QueryInsert);

header("location:tablaAdoptante.php");
?>
