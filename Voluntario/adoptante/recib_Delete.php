<?php
include('config.php');
$idRegistros = $_REQUEST['id'];


$DeleteRegistro = ("DELETE FROM solicitudadopcion WHERE id= '".$idRegistros."' ");
$DeleteRegistro1 = ("UPDATE mascota set adoptable=0 WHERE id= '".$idRegistros."' ");
mysqli_query($con, $DeleteRegistro);
mysqli_query($con, $DeleteRegistro1);
?>