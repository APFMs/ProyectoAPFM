<?php
include('config.php');
session_start();
$nombre         = $_REQUEST['nombre'];
$apllpat        = $_REQUEST['apllpat'];
$apllmat        = $_REQUEST['apllmat'];
$sexo             = $_REQUEST['sexo'];
$ci                = $_REQUEST['ci'];
$fechaNac        = $_REQUEST['fechaNac'];
$idUsuarioMod   = $_SESSION['id'];
$depa   = $_REQUEST['depa'];
$casa   = $_REQUEST['casa'];
$fami   = $_REQUEST['fami'];
$num   = $_REQUEST['num'];
$direccion   = $_REQUEST['direccion'];
$id=    $_REQUEST['id'];
$mascota_id=    $_REQUEST['mascota_id'];

$QueryInsert = ("INSERT INTO persona(
    nombre,
    apllpat,
    apllmat,
    sexo,
    ci,
    fechaNac,
    idUsuarioMod
)
VALUES (
    '" . $nombre . "',
    '" . $apllpat . "',
    '" . $apllmat . "',
    '" . $sexo . "',
    '" . $ci . "',
    '" . $fechaNac . "',
    '" . $idUsuarioMod . "'
)");
$inserAdmin = mysqli_query($con, $QueryInsert);

//$datos=mysqli_fetch_array($inserAdmin);
$idPersona = mysqli_insert_id($con);

$QueryInsert = ("INSERT INTO adoptante (depa, casa, fami, num,direccion, persona_id) VALUES ('".$depa."', '".$casa."', '".$fami."',".$num.",'".$direccion."',".$idPersona.");");
$inserAdmin = mysqli_query($con, $QueryInsert);
$idAdoptante = mysqli_insert_id($con);
/*
UPDATE solicitudadopcion SET adoptante_id = '12' WHERE (id = '21') and (mascota_id = '66');
*/

$QueryInsert = ("UPDATE solicitudadopcion SET adoptante_id = ".$idAdoptante." WHERE (id = ".$id.") and (mascota_id = ".$mascota_id.");");
$inserAdmin = mysqli_query($con, $QueryInsert);

header("location:tablaAdoptante.php");
