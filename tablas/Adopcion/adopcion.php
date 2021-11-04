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
                <span class="login-form-title">FORMULARIO DE ADOPCIÓN </span>
                <br>
                <div class="wrap-input100" data-validate = "Usuario incorrecto">
                    <label for="">Nombre:</label>
                    <input class="input100" type="text" id="nombre" name="Nombre" placeholder="Tu nombre completo" pattern="[A-Za-z]{2,}" title="Nombre incorrecto" tabindex="1" required="required">
                    <span class="focus-efecto"></span>
                </div>
                

                <div class="wrap-input100" data-validate = "Usuario incorrecto">
                    <label for="">Número Telefono/Celular:</label>
                    <input class="input100" type="number" id="numero" name="Numero" placeholder="Tu número de teléfono">
                    <span class="focus-efecto"></span>
                </div>

                <div class="wrap-input100" data-validate = "Usuario incorrecto">
                    <label for="">Edad:</label>
                    <input class="input100" type="number" id="nombre" name="Nombre" placeholder="Ingresa tu edad" required="required">
                    <span class="focus-efecto"></span>
                </div>


                <div class="wrap-input100" data-validate = "Usuario incorrecto">
                    <label for="">Motivo de Adopción:</label>
                    <input class="input100" type="text" id="descripcion" name="Descripcion" placeholder="¿Cual es el motivo de querer adoptar una mascota?" pattern="[A-Za-z]{2,}" title="Motivo incorrecto" tabindex="1" required="required">
                    <span class="focus-efecto"></span>
                </div>
                 
                <div class="wrap-input100" data-validate = "Usuario incorrecto">
                    <label for="">Fecha de visita a la Fundación:</label>
                    <input class="input100" type="date" id="nombre" name="Nombre" placeholder="Apellido Paterno">
                    <span class="focus-efecto"></span>
                </div>


                <div class="container-login-form-btn">
                    <div class="wrap-login-form-btn">
                        <div class="login-form-bgbtn"></div>
                        <button type="submit" name="submit" class="login-form-btn">Solicitar Adopción</button>
                    </div>
                </div>
            </form>
        </div>
    </div>     
        

    
        
     <script src="jquery/jquery-3.3.1.min.js"></script>    
     <ipt src="bootstrap/js/bootstrap.min.js"></script>
     <script src="popper/popper.min.js"></script>    
        
     <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>    
     <script src="codigo.js"></script>    
    </body>
</html>