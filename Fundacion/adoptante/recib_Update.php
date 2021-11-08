
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

$update = ("INSERT INTO adoptante (depa, persona_id) VALUES ('Cochabamba', 32);");
$result_update = mysqli_query($con, $update);

echo "<script type='text/javascript'>
        window.location='tablaAdoptante.php';
    </script>";

?>
