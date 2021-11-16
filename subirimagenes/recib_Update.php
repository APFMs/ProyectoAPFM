
<?php
include('conexion.php');
$idRegistros = $_REQUEST['id'];
$nombre  = $_REQUEST['nombre'];
$apllpat = $_REQUEST['apllpat'];
$apllmat = $_REQUEST['apllmat'];
$fechaNac	 = $_REQUEST['fechaNac'];
$sexo 	 = $_REQUEST['sexo'];
$ci	     = $_REQUEST['ci'];
$num	 = $_REQUEST['num'];
$depa	 = $_REQUEST['depa'];
$casa	 = $_REQUEST['casa'];
$direccion	 = $_REQUEST['direccion'];


$insertar = ("INSERT INTO solicitudadopcion (nombre, apllpat, apllmat, fechaNac, sexo, ci, num, depa, casa, direccion, mascota_id) VALUES ('$nombre ', '$apllpat', '$apllmat ', '$fechaNac', '$sexo', '$ci', '$num ', '$depa', '$casa ', '$direccion', '$idRegistros');");

$result_insertar = mysqli_query($con, $insertar);

echo "<script type='text/javascript'> 
        window.location='galeria.php';
    </script>";

?>
