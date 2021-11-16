
<?php
include('config.php');
$idRegistros = $_REQUEST['id'];
$nombre  = $_REQUEST['nombre'];
$apllpat = $_REQUEST['apllpat'];
$apllmat = $_REQUEST['apllmat'];
$fechaNac    = $_REQUEST['fechaNac'];
$sexo 	 = $_REQUEST['sexo'];
$ci      = $_REQUEST['ci'];
$num	 = $_REQUEST['num'];
$depa    = $_REQUEST['depa'];
$casa    = $_REQUEST['casa'];
$direccion    = $_REQUEST['direccion'];


$update = ("UPDATE solicitudadopcion 
	SET 
	nombre  ='" .$nombre. "',
	apllpat  ='" .$apllpat. "',
	apllmat ='" .$apllmat. "', 
	fechaNac ='" .$fechaNac. "', 
	sexo ='" .$sexo. "', 
	ci='" .$ci."',
	num='" .$num. "', 
	depa='" .$depa. "',
	casa='" .$casa. "',
	direccion='" .$direccion. "'

WHERE id='" .$idRegistros. "'
");
$result_update = mysqli_query($con, $update);

echo "<script type='text/javascript'> 
        window.location='tablaAdoptante.php';
    </script>";

?>