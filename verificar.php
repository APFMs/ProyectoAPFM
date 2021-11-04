<?php

include "conexiones/conexion.php";
//conectarbd();

//OBTENIENDO VALORES

$nombre_de_usuario = $_POST['valor1'];
//encriptacion a MD5
$contrasenia = MD5($_POST['valor2']);

/**consulta */
$sql = "select id,nombreUsuario,contrasenia, rol, persona_id, estado from usuario where 
    nombreUsuario='$nombre_de_usuario' and contrasenia='$contrasenia' and estado=1";

//ejecutando consulta
//$consulta = mysqli_query($conex,$sql);
$consulta = $conex->query($sql);
$num_row = $consulta->rowcount();

//if(mysqli_num_rows($consulta)>0){
if ($num_row > 0) {
    $row = $consulta->fetch(PDO::FETCH_ASSOC);

    $id = $row['id'];
    $nombre = $row['nombreUsuario'];
    $rol = $row['rol'];
    $idPersona = $row['persona_id'];

    session_start();
    $_SESSION["id"] = $id;
    $_SESSION["nombreUsuario"] = $nombre;
    $_SESSION["rol"] = $rol;
    $_SESSION["idPersona"] = $idPersona;

    echo "<div id='datosnoencontrados'>Bienvenido " . $nombre . "</div>";
    if ($rol == 'administrador') {
?>
        <script>
            window.location.href = "administrador/administrador.php";
        </script>
    <?php
    }
    if ($rol == 'fundacion') {
        //echo "<div id='datosnoencontrados'>Tu no eres administador " . $nombre . "</div>";
    ?>
        <script>
            window.location.href = "Fundacion/Fundacion.php";
        </script>
    <?php
    }

    if ($rol == 'voluntario') {
        // echo "<div id='datosnoencontrados'>Tu no eres administador " . $nombre . "</div>";
    ?>
        <script>
            window.location.href = "Voluntario/Voluntario.php";
        </script>
<?php
    }
} else {

    echo "<div id='datosnoencontrados'>Usuario o Contraseña incorrectos. <br> Por favor vuelva a ingresar sus datos</div>";
}


?>