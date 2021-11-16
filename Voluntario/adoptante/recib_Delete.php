<?php
include('config.php');
$idRegistros = $_REQUEST['id'];

$DeleteRegistro = ("DELETE FROM solicitudadopcion WHERE id= '".$idRegistros."' ");
mysqli_query($con, $DeleteRegistro);
?>