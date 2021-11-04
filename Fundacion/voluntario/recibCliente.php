<?php
include('config.php');
session_start();
$nombre         = $_REQUEST['nombre'];
$apllpat        = $_REQUEST['apllpat'];
$apllmat        = $_REQUEST['apllmat'];
$sexo             = $_REQUEST['sexo'];
$ci                = $_REQUEST['ci'];
$fechaNac        = $_REQUEST['fechaNac'];
$nombreUsuario  = substr($nombre, 0, 2) . substr($apllpat, 0, 2).$ci;
$contrasenia    = MD5($ci);
$rol    = "voluntario";
$idFundacion=$_SESSION['idFundacion'];
$idUsuarioMod   = $_SESSION['id'];


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
$idPersona=mysqli_insert_id($con);


$QueryInsert2 = ("INSERT INTO usuario (
    nombreUsuario, 
    contrasenia,
    rol, 
    idUsuarioMod, 
    persona_id
    )
VALUES ( 
    '" . $nombreUsuario. "', 
    '" . $contrasenia. "', 
    '" . $rol.  "', 
    '" . $idUsuarioMod. "', 
    '" . $idPersona. "'
    );");
$resultado2 = mysqli_query($con, $QueryInsert2);




$QueryInsert3 = ("INSERT INTO voluntario(
    persona_idPERSONA,
    idUsuarioMod,
    fundaciones_id
    )
VALUES ( 
    '" . $idPersona. "', 
    '" . $idUsuarioMod. "', 
    '" . $idFundacion.  "'
    );");
$resultado3 = mysqli_query($con, $QueryInsert3);




header("location:tablaVoluntario.php");
