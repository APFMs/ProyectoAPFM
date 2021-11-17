<?php
include('config.php');

$fechaVisita  = $_REQUEST['fechaVisita'];
$reporte = $_REQUEST['reporte'];
$fotoVisita;




if (isset($_POST['Guardar'])) {
    $imagen = $_FILES['imagen']['name'];
    $id = $_REQUEST['id'];
    // $idMascota=$_REQUEST['mascota_id'];


    if (isset($imagen) && $imagen != "") {
        $tipo = $_FILES['imagen']['type'];
        $temp  = $_FILES['imagen']['tmp_name'];

        if (!((strpos($tipo, 'gif') || strpos($tipo, 'jpeg')))) {
            $_SESSION['mensaje'] = 'solo se permite archivos jpeg, gif';
            $_SESSION['tipo'] = 'danger';
            header("location:tablaAdoptante.php");
        } else {
            //$query = "UPDATE adoptante SET fotoCi='" . $imagen."' WHERE id=".$adoptante_id.";";
            //$queryM="SELECT mascota_id FROM solicitudadopcion WHERE id = ".$id.";";
            //$resultadoMascota = mysqli_query($con, $queryM);

            //$query = "UPDATE solicitudadopcion SET fotoCi = '" . $imagen . "' WHERE id = " . $id . ";";
            $fotoVisita = $imagen;
            move_uploaded_file($temp, 'img/' . $imagen);
            //$resultado = mysqli_query($con, $query);            
            $QueryInsert = ("INSERT INTO seguimiento (fechaVisita, reporte,fotoVisita,calificacion, solicitud_fk ) values ('".$fechaVisita."','".$reporte."','".$fotoVisita."', 1,".$id.") ;");
            $insert = mysqli_query($con, $QueryInsert);
        }
    }
}

header("location:tablaSeguimiento.php");
