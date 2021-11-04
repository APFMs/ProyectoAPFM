<?php
include('config.php');
$idRegistros = $_REQUEST['id'];

$actualizar = ("UPDATE mascotas1 SET adoptable = '1' WHERE id= '".$idRegistros."' ");
mysqli_query($con, $actualizar);
?>