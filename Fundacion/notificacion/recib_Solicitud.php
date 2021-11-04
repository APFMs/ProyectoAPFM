
<?php
include('config.php');
//$idSolicitud = $_REQUEST['id'];
//$idMascota      = $_REQUEST['mascota_id'];
//$tipo      = 5;// $_REQUEST['tipo'];

$update = ("UPDATE `adop`.`solicitudadopcion` SET `aprobada` = '5' WHERE (`id` = '14') and (`mascota_id` = '58');");

$result_update = mysqli_query($con, $update);

echo "<script type='text/javascript'> 
        window.location='tablaMascota.php';
    </script>";

?>
