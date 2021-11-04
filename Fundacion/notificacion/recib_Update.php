
<?php
include('config.php');
$idRegistros = $_REQUEST['id'];
$nombreSolicitante      = $_REQUEST['nombreSolicitante'];
$celular =$_REQUEST['celular'];
$edad =$_REQUEST['edad'];
$motivo =$_REQUEST['motivo'];

$update = ("UPDATE solicitudadopcion
	SET 
	nombreSolicitante  ='" .$nombreSolicitante. "',
	celular  ='" .$celular. "',
	edad ='" .$edad. "', 
	motivo ='" .$motivo. "'

WHERE id='" .$idRegistros. "'
");
$result_update = mysqli_query($con, $update);

echo "<script type='text/javascript'> 
        window.location='tablaNotificacion.php';
    </script>";

?>
