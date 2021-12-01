
<?php
include('config.php');
$idRegistros = $_REQUEST['id'];
$mascota_id      = $_REQUEST['mascota_id'];
$info 	 = $_REQUEST['info'];
$tieneCasa 	 = isset($_REQUEST['TieneCasa']) ? 1 : 0;
$verificacion 	 = isset($_REQUEST['Verificacion']) ? 1 : 0;
$tieneCi 	 = isset($_REQUEST['TieneCi']) ? 1 : 0;
$tieneBoleta 	 = isset($_REQUEST['TieneBoleta']) ? 1 : 0;
$seguimiento 	 = isset($_REQUEST['Seguimiento']) ? 1 : 0;

$update = ("UPDATE solicitudadopcion SET info = '".$info."', aprobada=1, TieneBoleta=$tieneBoleta, TieneCasa=$tieneCasa,Verificacion=$verificacion,TieneCi=$tieneCi, Seguimiento=$seguimiento WHERE (id = ".$idRegistros.") and (mascota_id = ".$mascota_id.");");
$result_update = mysqli_query($con, $update);

echo "<script type='text/javascript'> 
        window.location='tablaNotificacion.php';
    </script>";

?>
