<?php
include('config.php');



if (isset($_POST['Guardar'])) {
    $imagen = $_FILES['imagen']['name'];
    $id=$_REQUEST['id'];
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

            $query="UPDATE solicitudadopcion SET fotoCi = '".$imagen."' WHERE id = ".$id.";";

            $resultado = mysqli_query($con, $query);
            if ($resultado) {
                move_uploaded_file($temp, '../../Fundacion/adoptante/img/' . $imagen);
                $_SESSION['mensaje'] = 'se ha subido correctamente';
                $_SESSION['tipo'] = 'success';
                header("location:tablaMascota.php");
            } else {
                $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
                $_SESSION['tipo'] = 'danger';
            }
        }
    }
}

header("location:tablaAdoptante.php");