<!doctype html>
<html>
    <head>
        <link rel="shortcut icon" href="#" />
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>SomosTuVos-Registro</title>

        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="estilos1.css">
        <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.css">        
        
        <link rel="stylesheet" type="text/css" href="fuentes/iconic/css/material-design-iconic-font.css">
        
    </head>
    
    <body>
     
      <div class="container-login">
        <div class="wrap-login">
            <form class="login-form validate-form" id="formLogin" action="" method="post">
                <span class="login-form-title">REGISTRO DEL ADMINISTRADORS</span>
                <br>
                <div class="wrap-input100" data-validate = "Usuario incorrecto">
                    <label for="">Nombre:</label>
                    <input class="input100" type="text" id="nombre" name="Nombre" placeholder="Tu nombre completo" pattern="[A-Za-z]{3,}" title="Nombre incorrecto" tabindex="1" required="required">
                    <span class="focus-efecto"></span>
                </div>

                <div class="wrap-input100" data-validate = "Usuario incorrecto">
                    <label for="">Apellido Paterno:</label>
                    <input class="input100" type="text" id="nombre" name="Nombre" placeholder="Apellido Paterno" pattern="[A-Za-z]{2,}" title="Apellido incorrecto" tabindex="1" required="required">
                    <span class="focus-efecto"></span>
                </div>


                <div class="wrap-input100" data-validate = "Usuario incorrecto">
                    <label for="">Apellido Materno:</label>
                    <input class="input100" type="text" id="nombre" name="Nombre" placeholder="Apellido Materno" pattern="[A-Za-z]{2,}" title="Apellido incorrecto" tabindex="1" >
                    <span class="focus-efecto"></span>
                </div>
                
                

                <div class="wrap-input100" data-validate = "Usuario incorrecto">
                    <label for="">Edad:</label>
                    <input class="input100" type="number" id="numero" name="Numero" placeholder="Edad" required="required">
                    <span class="focus-efecto"></span>
                </div>

                <div class="form-check" data-validate="Usuario incorrecto">
                    <label for="">Sexo:</label>
                    <br>
                    <br>
                    <label class="input100">
                    <input type="radio" class="form-check-input" name="sexo" id="sexo" value="checkedValue" checked>
                  Hombre
                  <input type="radio" class="form-check-input" name="sexo" id="sexo" value="checkedValue" checked>
                  Mujer
                  </label>
                </div>

                <div class="wrap-input100" data-validate="Password incorrecto">
                    <label for="">Contraseña</label>
                    <input class="input100" type="password" id="password" name="password" placeholder="Password">
                    <span class="focus-efecto"></span>
                </div>


                <div class="wrap-input100" data-validate="Password incorrecto">
                    <label for="">Confirmar Contraseña</label>
                    <input class="input100" type="password" id="password" name="password" placeholder="Password">
                    <span class="focus-efecto"></span>
                </div>

                <div class="container-login-form-btn">
                    <div class="wrap-login-form-btn">
                        <div class="login-form-bgbtn"></div>
                        <button type="submit" name="submit" class="login-form-btn">Registrar</button>
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