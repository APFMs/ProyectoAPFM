
<?php
include('config.php');
$idRegistros = $_REQUEST['id'];
$nombre  = $_REQUEST['nombre'];
$apllpat = $_REQUEST['apllpat'];
$apllmat = $_REQUEST['apllmat'];
$edad    = $_REQUEST['edad'];
$sexo 	 = $_REQUEST['sexo'];
$num	 = $_REQUEST['num'];
$depa    = $_REQUEST['depa'];
$casa    = $_REQUEST['casa'];
$fami    = $_REQUEST['fami'];
$ci      = $_REQUEST['ci'];
$recibo  = $_REQUEST['recibo'];

$update = ("UPDATE adoptante 
	SET 
	nombre  ='" .$nombre. "',
	apllpat  ='" .$especie. "',
	apllmat ='" .$edad. "', 
	edad ='" .$sexo. "', 
	sexo ='" .$color. "', 
	num='" .$tam. "', 
	depa='" .$depa. "',
	casa='" .$casa. "',
	fami='" .$fami. "',
	ci='" .$ci."',
	recibo='" .$recibo. "'



WHERE id='" .$idRegistros. "'
");
$result_update = mysqli_query($con, $update);

echo "<script type='text/javascript'>
        window.location='tablaAdoptante.php';
    </script>";

?>
