<?php 
include_once 'conexiones/conexion.php';
//error_reporting(0);

if(isset($_POST['guardar'])){
    $nombre=$_POST['nombre'];
    $apllpat=$_POST['apllpat'];
    $apllmat=$_POST['apllmat'];
    $edad=$_POST['edad'];
    $sexo=$_POST['sexo'];
    $num=$_POST['num'];    
    $depa=$_POST['depa'];
    $casa=$_POST['casa'];    
    $fami=$_POST['fami'];
    $ci=$_POST['ci'];
    $recibo=$_POST['recibo'];    


    if(!empty($nombre) && !empty($apllpat) && !empty($apllmat) && !empty($edad) &&!empty($sexo) && !empty($num) &&!empty($depa) && !empty($casa) && !empty($fami)&& !empty($ci) && !empty($recibo) ){

            $consulta_insert=$con->prepare('INSERT INTO adoptante(nombre,apllpat,apllmat,edad,sexo,num,depa,casa,fami,ci,recibo) VALUES(:nombre,:apllpat,:apllmat,:edad,:sexo,:num,:depa,:casa,:fami,:ci,:recibo);');
            $consulta_insert->execute(array(
                ':nombre' =>$nombre,
                ':apllpat' =>$apllpat,
                ':apllmat' =>$apllmat,
                ':edad' =>$edad,
                ':sexo' =>$sexo,
                ':num' =>$num,
                ':depa' =>$depa,
                ':casa' =>$casa,
                ':fami' =>$fami,
                ':ci' =>$ci,
                ':recibo' =>$recibo

            ));
            header('Location: tablaAdoptante.php');
        
    }else{
        echo "<script> alert('Los campos estan vacios');</script>";
    }
}


?>



<!doctype html>
<html>
    <head>
        <link rel="shortcut icon" href="#" />
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>SomosTuVos-Registro</title>

        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="estilos.css">
        <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">        
        
        <link rel="stylesheet" type="text/css" href="fuentes/iconic/css/material-design-iconic-font.min.css">
        
    </head>
    
    <body>
     
      <div class="container-login">
        <div class="wrap-login">
            <form class="login-form validate-form" id="formLogin" action="" method="post">
                <span class="login-form-title">REGISTRO DEL ADOPTANTE</span>
                <br>
                <div class="wrap-input100" data-validate = "Usuario incorrecto">
                    <label for="">Nombre:</label>
                    <input class="input100" type="text" id="nombre" name="nombre" placeholder="Tu nombre completo" pattern="[A-Za-z]{3,}" title="Nombre incorrecto" tabindex="1" required="required">
                    <span class="focus-efecto"></span>
                </div>

                <div class="wrap-input100" data-validate = "Usuario incorrecto">
                    <label for="">Apellido Paterno:</label>
                    <input class="input100" type="text" id="nombre" name="apllpat" placeholder="Apellido Paterno" pattern="[A-Za-z]{2,}" title="Apellido incorrecto" tabindex="1" required="required">
                    <span class="focus-efecto"></span>
                </div>


                <div class="wrap-input100" data-validate = "Usuario incorrecto">
                    <label for="">Apellido Materno:</label>
                    <input class="input100" type="text" id="nombre" name="apllmat" placeholder="Apellido Materno" pattern="[A-Za-z]{2,}" title="Apellido incorrecto" tabindex="1" >
                    <span class="focus-efecto"></span>
                </div>
                
                

                <div class="wrap-input100" data-validate = "Usuario incorrecto">
                    <label for="">Edad:</label>
                    <input class="input100" type="number" id="numero" name="edad" placeholder="Edad" required="required">
                    <span class="focus-efecto"></span>
                </div>

                <div class="from-group" data-validate = "Usuario incorrecto">
                    <label for="">Sexo:</label>
                    <select class="input100" name="sexo" id="tam">
                    <option value="Hombre">Hombre</option>
                    <option value="Mujer">Mujer</option>
    
                
              
                  </select>
                
                </div>





                <div class="wrap-input100" data-validate = "Usuario incorrecto">
                    <label for="">Número Telefono/Celular:</label>
                    <input class="input100" type="number" id="numero" name="num" placeholder="Telefono/Celular">
                    <span class="focus-efecto"></span>
                </div>

                <div class="from-group" data-validate = "Usuario incorrecto">
                    <label for="">Departamento:</label>
                    <select class="input100" name="depa" id="">
                    <option value="Cochabamba">Cochabamba</option>
                    <option value="La Paz">La Paz</option>
                    <option value="Santa Cruz">Santa Cruz</option>
                    <option value="Oruro">Oruro</option>
                    <option value="Sucre">Sucre</option>
                    <option value="Tarija">Tarija</option>
                    <option value="Potosí">Potosí</option>
                    <option value="Pando">Pando</option>
                    <option value="Beni">Beni</option>
                  </select>
                
                </div>
                <br>


                <div class="from-group" data-validate = "Usuario incorrecto">
                    <label for="">Tiene casa propia:</label>
                    <select class="input100" name="casa" id="tam">
                    <option value="Si">si</option>
                    <option value="No">No</option>
    
                
              
                  </select>
                
                </div>



                <div class="from-group" data-validate = "Usuario incorrecto">
                    <label for="">La familia esta de acuerdo con la adopción:</label>
                    <select class="input100" name="fami" id="tam">
                    <option value="Si">si</option>
                    <option value="No">No</option>
    
                
              
                  </select>
                
                </div>



                <div class="wrap-input100" data-validate = "Usuario incorrecto">
                    <label for="">Fotocopia CI:</label>
                    <input class="input100" type="text" id="nombre" name="ci" placeholder="Apellido Materno">
                    <span class="focus-efecto"></span>
                </div>


                <div class="wrap-input100" data-validate = "Usuario incorrecto">
                    <label for="">Fotocopia de Recibo de Luz:</label>
                    <input class="input100" type="text" id="nombre" name="recibo" placeholder="Apellido Materno">
                    <span class="focus-efecto"></span>
                </div>
                

                <div class="container-login-form-btn">
                    <div class="wrap-login-form-btn">
                        <div class="login-form-bgbtn"></div>
                        <button type="submit" name="guardar" class="login-form-btn">Registrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>     
        
        
     <script src="jquery/jquery-3.3.1.min.js"></script>    
     <script src="bootstrap/js/bootstrap.min.js"></script>    
     <script src="popper/popper.min.js"></script>    
        
     <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>    
     <script src="codigo.js"></script>    
    </body>
</html>