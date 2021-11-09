
<?php
include('config.php');

$idRegistros = $_REQUEST['id'];
$nombre  = $_REQUEST['nombre'];
$apllpat = $_REQUEST['apllpat'];
$apllmat = $_REQUEST['apllmat'];
$sexo 	 = $_REQUEST['sexo'];
$ci	     = $_REQUEST['ci'];
$fechaNac	 = $_REQUEST['fechaNac'];
$nombreUsuario  = $_REQUEST['nombreUsuario'];
$contrasenia    = $_REQUEST['contrasenia'];
$idUsuario	 = $_REQUEST['idUsuario'];
session_start();
$idUsuarioMod	 = $_SESSION['id'];


$update = ("UPDATE persona
	SET	
	nombre  ='" . $nombre . "',
	apllpat  ='" . $apllpat . "',
	apllmat ='" . $apllmat . "', 
	sexo ='" . $sexo . "',
	ci ='" . $ci . "',
	fechaNac ='" . $fechaNac . "',
    idUsuarioMod='" . $idUsuarioMod . "'
	)
WHERE id='" . $idRegistros . "'
");
$result_update = mysqli_query($con, $update);

if ($contrasenia != "") {
	$update = ("UPDATE usuario
	SET		
    contrasenia ='" . md5($contrasenia) . "',
    idUsuarioMod='" . $idUsuarioMod . "'
	WHERE id='" . $idUsuario . "'
	");
	$result_update2 = mysqli_query($con, $update);
}
else{
	$update = ("UPDATE usuario
	SET		
    idUsuarioMod='" . $idUsuarioMod . "'
	WHERE id='" . $idUsuario . "'
	");
	$result_update2 = mysqli_query($con, $update);
}

if ($nombreUsuario != "") {
	$update = ("UPDATE usuario
	SET	
	nombreUsuario ='" . $nombreUsuario . "',    
    idUsuarioMod='" . $idUsuarioMod . "'
	WHERE id='" . $idUsuario . "'
	");
	$result_update2 = mysqli_query($con, $update);
}
else{
	$update = ("UPDATE usuario
	SET	
	nombreUsuario ='" . $nombreUsuario . "',        
	WHERE id='" . $idUsuario . "'
	");
	$result_update2 = mysqli_query($con, $update);
}


echo "<script type='text/javascript'> 
        window.location='Fundacion.php';
    </script>";

?>