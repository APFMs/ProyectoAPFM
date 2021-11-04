
<?php
include('config.php');
$idRegistros = $_REQUEST['id'];
$nombre      = $_REQUEST['nombre'];
$apllpat 	 = $_REQUEST['apllpat'];
$apllmat 	 = $_REQUEST['apllmat'];
$edad 	 = $_REQUEST['edad'];
$sexo 	 = $_REQUEST['sexo'];
$ci 	 = $_REQUEST['ci'];
$nomusu 	 = $_REQUEST['nomusu'];
$contr 	 = $_REQUEST['contr'];

$update = ("UPDATE voluntarios 
	SET 
	nombre  ='" .$nombre. "',
	apllpat  ='" .$apllpat. "',
	apllmat ='" .$apllmat. "', 
	edad ='" .$edad. "', 
	sexo ='" .$sexo. "', 
	ci ='" .$ci. "', 
	nomusu='" .$nomusu. "', 
	contr ='" .$contr. "'



WHERE id='" .$idRegistros. "'
");
$result_update = mysqli_query($con, $update);

echo "<script type='text/javascript'> 
        window.location='Voluntario.php';
    </script>";

?>
