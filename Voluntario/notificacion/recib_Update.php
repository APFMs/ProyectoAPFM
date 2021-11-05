
<?php
include('config.php');
$id = $_REQUEST['id'];
$mascota_id      = $_REQUEST['mascota_id'];
$info 	 = $_REQUEST['info'];

$update = ("UPDATE solicitudadopcion
	SET 
	info ='hola'
WHERE id=11 and mascota_id=43
");
$result_update = mysqli_query($con, $update);

echo "<script type='text/javascript'> 
        window.location='tablaMascota.php';
    </script>";

?>
