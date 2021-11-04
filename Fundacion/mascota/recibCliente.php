<?php
include('config.php');
session_start();
$nombre  = $_REQUEST['nombre'];
$especie = $_REQUEST['especie'];
$edad      = $_REQUEST['edad'];
$sexo      = $_REQUEST['sexo'];
$color      = $_REQUEST['color'];
$tam      = $_REQUEST['tam'];
$descripcion = $_REQUEST['descripcion'];
$idUsuarioMod   = $_SESSION['id'];
//$idFundacion = $_REQUEST['idFundacion'];
$idFundacion = $_SESSION['idFundacion'];


$QueryInsert = ("INSERT INTO mascota (
    nombre, 
    especie, 
    edad,
    sexo, 
    color, 
    tam, 
    descripcion,     
    idUsuarioMod, 
    fundaciones_id
    ) 
    VALUES (
        '" . $nombre . "',
        '" . $especie . "', 
        '" . $edad . "', 
        '" . $sexo . "',
        '" . $color . "',  
        '" . $tam. "',  
        '" . $descripcion . "',         
        '" . $idUsuarioMod . "', 
        '" . $idFundacion . "'
        );");

$inserInmueble = mysqli_query($con, $QueryInsert);


header("location:tablaMascota.php");
