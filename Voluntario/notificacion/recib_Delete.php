<?php
include('config.php');
$idRegistros = $_REQUEST['id'];

$DeleteRegistro = ("UPDATE solicitudadopcion SET estado=1 WHERE id= '".$idRegistros."' ");
mysqli_query($con, $DeleteRegistro);
?>