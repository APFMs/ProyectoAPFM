
<?php
include('config.php');
session_start();
$idRegistros = $_REQUEST['id'];
$idVoluntario      = $_REQUEST['voluntario'];

$update = ("UPDATE mascota 
	SET 
	idVoluntario='" .$idVoluntario. "'
WHERE id='" .$idRegistros. "'
");

$result_update = mysqli_query($con, $update);

echo "<script type='text/javascript'> 
        window.location='tablaMascota.php';
    </script>";

?>
