
<?php
include('config.php');
$idRegistros = $_REQUEST['id'];
$nombre      = $_REQUEST['nombre'];
$especie 	 = $_REQUEST['especie'];
$edad 	 = $_REQUEST['edad'];
$sexo 	 = $_REQUEST['sexo'];
$color 	 = $_REQUEST['color'];
$tam 	 = $_REQUEST['tam'];
$descripcion 	 = $_REQUEST['descripcion'];

$update = ("UPDATE mascotas1 
	SET 
	nombre  ='" .$nombre. "',
	especie  ='" .$especie. "',
	edad ='" .$edad. "', 
	sexo ='" .$sexo. "', 
	color ='" .$color. "', 
	tam='" .$tam. "', 
	descripcion ='" .$descripcion. "'



WHERE id='" .$idRegistros. "'
");
$result_update = mysqli_query($con, $update);

echo "<script type='text/javascript'> 
        window.location='tablamascotaAdopcion.php';
    </script>";

?>
