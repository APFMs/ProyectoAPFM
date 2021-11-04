<?php
include('config.php');

if(isset($_POST['Guardar'])){
    $imagen = $_FILES['imagen']['name'];
    $nombre = $_POST['titulo'];

    if(isset($imagen) && $imagen != ""){
        $tipo = $_FILES['imagen']['type'];
        $temp  = $_FILES['imagen']['tmp_name'];

       if( !((strpos($tipo,'gif') || strpos($tipo,'jpeg') ))){
          $_SESSION['mensaje'] = 'solo se permite archivos jpeg, gif';
          $_SESSION['tipo'] = 'danger';
          header("location:tablaMascota.php");
       }else{
         $query = "INSERT INTO imagenes(imagen,idMascota) values('$imagen','$nombre')";
         $resultado = mysqli_query($con,$query);
         if($resultado){
              move_uploaded_file($temp,'img/'.$imagen);   
             $_SESSION['mensaje'] = 'se ha subido correctamente';
             $_SESSION['tipo'] = 'success';
             header("location:tablaMascota.php");
         }else{
             $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
             $_SESSION['tipo'] = 'danger';
         }
       }
    }
}

header("location:tablaMascota.php");
?>