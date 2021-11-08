
<?php
include('config.php');
$idRegistros = $_REQUEST['id'];
$mascota_id      = $_REQUEST['mascota_id'];
$info 	 = $_REQUEST['info'];




$update = ("UPDATE solicitudadopcion SET info = '".$info."', aprobada= 1 WHERE (id = ".$idRegistros.") and (mascota_id = ".$mascota_id.");");
$result_update = mysqli_query($con, $update);

echo "<script type='text/javascript'> 
        window.location='tablaNotificacion.php';
    </script>";

?>
