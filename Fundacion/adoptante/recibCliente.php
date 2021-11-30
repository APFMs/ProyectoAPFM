<?php
include('config.php');
session_start();
$nombre         = $_REQUEST['nombre'];
$apllpat        = $_REQUEST['apllpat'];
$apllmat        = $_REQUEST['apllmat'];
$sexo           = $_REQUEST['sexo'];
$ci             = $_REQUEST['ci'];
$fechaNac       = $_REQUEST['fechaNac'];
$idUsuarioMod   = $_SESSION['id'];
$casa           = $_REQUEST['casa'];
$fami           = $_REQUEST['fami'];
$num            = $_REQUEST['num'];
$direccion      = $_REQUEST['direccion'];
$id             =$_REQUEST['id'];


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
$_SESSION['idPersonaAdop']=$idPersona;

$QueryInsert = ("INSERT INTO adoptante (

    casa, 
    fami, 
    num,
    direccion, 
    persona_id
    ) 
    VALUES (
   
        '".$casa."', 
        '".$fami."',
        ".$num.",
        '".$direccion."',
        ".$idPersona."
    );");
$inserAdmin = mysqli_query($con, $QueryInsert);
$idAdoptante = mysqli_insert_id($con);
/*
UPDATE solicitudadopcion SET adoptante_id = '12' WHERE (id = '21') and (mascota_id = '66');
*/

$QueryInsert = ("UPDATE solicitudadopcion SET adoptante_id = ".$idAdoptante." WHERE (id = ".$id.") and (mascota_id = ".$mascota_id.");");
$inserAdmin = mysqli_query($con, $QueryInsert);

$_SESSION['adoptante_id']=$idAdoptante;

header("location:tablaAdoptante.php");
