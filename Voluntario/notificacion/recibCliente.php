<?php
include('config.php');
$id  = $_REQUEST['id'];
$mascota = $_REQUEST['mascota_id'];
$info 	 = $_REQUEST['info'];


  


$QueryInsert = ("UPDATE solicitudadopcion 
SET info ='".$info."' WHERE (id = ".$id.") and (mascota_id = ".$mascota.")");

$inserInmueble = mysqli_query($con, $QueryInsert);

header("location:tablaNotificacion.php");
?>
