<?php

include "conexiones/conexionbd.php";
conectarbd();

    //OBTENIENDO VALORES

    $correo = $_POST['valor1'];
    $contra = $_POST['valor2'];

    /**consulta */
    $sql = "select nombreUsuario,contrasenia, rol from usuario where 
    nombreUsuario='$correo' and contrasenia='$contra'";

    //ejecutando consulta
    //$consulta = mysqli_query($conex,$sql);
    $consulta = $conex->query($sql);
    $num_row = $consulta->rowcount();

    //if(mysqli_num_rows($consulta)>0){
    if($num_row > 0){
        $row = $consulta->fetch();
        $usuario==$row['nombreUsuario'];
        ?>
            <script>
                window.alert("".$usuario)                
            </script>
        <?php
        ?>                    
            <script>
                window.location.href="tablas/Adopcion/adopcion.php";
            </script>   
        <?php
    }else{

        echo "<div id='datosnoencontrados'>Correo o contraseña incorrecta. Por favor vuelva a ingresar sus datos</div>";
    }
   
    
?>