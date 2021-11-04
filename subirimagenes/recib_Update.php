
<?php
include('conexion.php');
$idRegistros = $_REQUEST['id'];
$nombre      = $_REQUEST['nombre'];
$celular 	 = $_REQUEST['celular'];
$edad 	 = $_REQUEST['edad'];
$motivo 	 = $_REQUEST['motivo'];


$insertar = ("INSERT INTO solicitudadopcion (nombre, celular, edad, motivo, mascota_id) VALUES ('$nombre ', '$celular', '$edad ', '$motivo', '$idRegistros');");

$result_insertar = mysqli_query($con, $insertar);

echo "<script type='text/javascript'> 
        window.location='galeria.php';
    </script>";

?>
