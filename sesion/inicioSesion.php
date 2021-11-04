<!doctype html>
<html>
    <head>
        <link rel="shortcut icon" href="#" />
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>SomosTuVos-Registro</title>

        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../fundaciones/estilos.css">
        <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">        
        <link rel="stylesheet" type="text/css" href="fuentes/iconic/css/material-design-iconic-font.min.css">
        
    </head>
    
    <body>
     
      <div class="container-login">
        <div class="wrap-login">

            <form class="login-form validate-form"  action="" method="post">
                <span class="login-form-title">INICIO DE SESION </span>
                <br>
                <div class="wrap-input100" data-validate = "Usuario incorrecto">
                    <label for="">NOMBRE DE USUARIO:</label>
                    <input class="input100" type="text" id="nombre" name="usuario" placeholder="Nombre" pattern="[A-Za-z]{2,}" title="Nombre incorrecto" tabindex="1" required="required">
                    <span class="focus-efecto"></span>
                </div>

                <div class="wrap-input100" data-validate = "Usuario incorrecto">
                    <label for="">CLAVE:</label>
                    <input class="input100" type="text" id="direccion" name="clave" placeholder="Contraseña" pattern="[A-Za-z]{2,}" title="Nombre incorrecto" tabindex="1" required="required">
                    <span class="focus-efecto"></span>
                </div>

                <div class="container-login-form-btn">
                    <div class="wrap-login-form-btn">
                        <div class="login-form-bgbtn"></div>
                        <button type="submit" name="guardar" class="login-form-btn">Ingresar</button> 
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