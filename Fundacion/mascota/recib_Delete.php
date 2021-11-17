<?php
include('config.php');
$idRegistros = $_REQUEST['id'];

$DeleteRegistro = ("DELETE FROM mascota set estado=0 WHERE id= '".$idRegistros."' ");
mysqli_query($con, $DeleteRegistro);
?>