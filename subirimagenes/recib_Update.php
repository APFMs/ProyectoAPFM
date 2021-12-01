
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
$casa	 = $_REQUEST['casa'];
$direccion	 = $_REQUEST['direccion'];

echo "IDMASCOTA: " . $idRegistros;
$insertar = ("INSERT INTO solicitudadopcion (nombre, apllpat, apllmat, fechaNac, sexo, ci, num, casa, direccion, mascota_id) 
    VALUES ('$nombre ', '$apllpat', '$apllmat ', '$fechaNac', '$sexo', '$ci', '$num ', '$casa ', '$direccion', '$idRegistros');");
$result_insertar = mysqli_query($con, $insertar);

$updateMascota = ("UPDATE mascota SET adoptable=3 WHERE id='$idRegistros'");
$result_update = mysqli_query($con, $updateMascota);

echo "<script type='text/javascript'> 
        window.location='galeria.php';
    </script>";

?>
