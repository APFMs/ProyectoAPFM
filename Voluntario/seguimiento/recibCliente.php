<?php
include('config.php');
$nombre  = $_REQUEST['nombre'];
$especie = $_REQUEST['especie'];
$edad 	 = $_REQUEST['edad'];
$sexo 	 = $_REQUEST['sexo'];
$color 	 = $_REQUEST['color'];
$tam 	 = $_REQUEST['tam'];
$descripcion = $_REQUEST['descripcion'];

$QueryInsert = ("INSERT INTO mascotas1(
    nombre,
    especie,
    edad,
    sexo,
    color,
    tam,
    descripcion
)
VALUES (
    '".$nombre. "',
    '".$especie. "',
    '".$edad."',
    '".$sexo."',
    '".$color."',
    '".$tam."',
    '".$descripcion."'
)");
$inserInmueble = mysqli_query($con, $QueryInsert);

header("location:tablaMascota.php");
?>
