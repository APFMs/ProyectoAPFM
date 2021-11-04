<?php
include('config.php');
session_start();
$idRegistros = $_REQUEST['id'];
$nombre  = $_REQUEST['nombre'];
$direccion = $_REQUEST['direccion'];
$num 	 = $_REQUEST['num'];
$acercaDe 	 = $_REQUEST['acercaDe'];

$update = ("UPDATE fundacion
	SET 
	nombre  ='" .$nombre. "',
	direccion  ='" .$direccion. "',
	num ='" .$num. "', 
	acercaDe ='" .$acercaDe. "'

WHERE id='" .$idRegistros. "'
");
$result_update = mysqli_query($con, $update);

echo "<script type='text/javascript'> 
        window.location='tablaFundacion.php';
    </script>";

?>
