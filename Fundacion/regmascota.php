<?php

include "conexiones/conexionbd.php";
conectarbd();

    //OBTENIENDO VALORES

    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $sexo = $_POST['sexo'];
    $color = $_POST['color'];
    $tamanio = $_POST['tamanio'];
    $acerca = $_POST['acerca'];
    $fono = $_POST['fono'];




    

    $sql = "insert into mascotas (idmascota,idusu, nombre, edad, sexo, color, tam, acerca, fono) values (NULL, '1', '$nombre', '$edad', '$sexo', '$color', '$tamanio', '$acerca', '$fono')";

    //ejecutando consulta
    $consulta = mysqli_query($conex,$sql);

    ?>
    <div class="alert alert-success">
        <strong>Registro Exitoso!</strong> Gracias por registrar los datos.
    </div>
    <?php

    
?>