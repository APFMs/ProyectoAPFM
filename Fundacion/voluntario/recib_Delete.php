<?php
include('config.php');
$idRegistros = $_REQUEST['id'];
$idUsuario = $_REQUEST['idUsuario'];

$DeleteRegistro = ("UPDATE persona set estado=0 WHERE id= '".$idRegistros."' ");
mysqli_query($con, $DeleteRegistro);
$DeleteRegistro2 = ("UPDATE usuario set estado=0 WHERE id= '".$idUsuario."' ");
mysqli_query($con, $DeleteRegistro2);
?>