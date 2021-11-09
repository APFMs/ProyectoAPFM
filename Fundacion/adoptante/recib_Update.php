
<?php
include('config.php');
session_start();
$idRegistros = $_REQUEST['id'];
$nombre  = $_REQUEST['nombre'];
$apllpat = $_REQUEST['apllpat'];
$apllmat = $_REQUEST['apllmat'];
$sexo 	 = $_REQUEST['sexo'];
$ci	     = $_REQUEST['ci'];
$fechaNac	 = $_REQUEST['fechaNac'];

$update = ("UPDATE persona
	SET 
	nombre  ='" .$nombre. "',
	apllpat  ='" .$apllpat. "',
	apllmat ='" .$apllmat. "', 
	sexo ='" .$sexo. "',
	ci ='" .$ci. "',
	fechaNac ='" .$fechaNac. "'

WHERE id='" .$idRegistros. "'
");
$result_update = mysqli_query($con, $update);

echo "<script type='text/javascript'> 
        window.location='tablaVoluntario.php';
    </script>";

?>