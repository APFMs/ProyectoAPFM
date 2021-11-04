
<form name="form-data" action="recibCliente.php" method="POST">

    <div class="row">
      <div class="col-md-12">
          <label for="name" class="form-label">Nombre </label>
          <input type="text" class="form-control" name="nombre" required='true' autofocus>
      </div>

      <div class="from-group" data-validate = "Usuario incorrecto">
                    <label for="">Especie:</label>
                    <select class="input100" name="especie" id="especie">
                    <option value="Perro">Perro</option>
                    <option value="Gato">Gato</option>
                    <option value="Otro">Otro</option> 
                  </select>
                
                </div>


      <div class="col-md-12 mt-2">
          <label for="celular" class="form-label">Edad</label>
          <input type="number" class="form-control" name="edad" required='true'>
      </div>


      <div class="from-group" data-validate = "Usuario incorrecto">
                    <label for="">Sexo:</label>
                    <select class="input100" name="sexo" id="tam">
                    <option value="Macho">Macho</option>
                    <option value="Hembra">Hembra</option>
    
                
              
                  </select>
                
                </div>
                <div class="from-group" data-validate = "Usuario incorrecto">
                    <label for="">Color:</label>
                    <select class="input100" name="color" id="color">
                    <option  value="Negro">Negro</option>
                    <option value="Blanco">Blanco</option>
                    <option value="Café">Café</option>
                    <option value="Plomo">Plomo</option>
                    <option value="Naranja">Naranja</option>
                    <option value="Blanco con Negro">Blanco con Negro</option>
                    <option value="Blanco con café">Blanco con café</option>
                    <option value="Otro">Otro</option>
              
                  </select>
                
                </div>


                <div class="from-group" data-validate = "Usuario incorrecto">
                    <label for="">Tamaño:</label>
                    <select class="input100" name="tam" id="tam">
                    <option value="Grande">Grande</option>
                    <option value="Mediano">Mediano</option>
                    <option value="Pequeño">Pequeño</option>
                
              
                  </select>
                
                </div>


      <div class="col-md-12 mt-2">
          <label for="" class="form-label">Descripción</label>
          <input type="text" class="form-control" name="descripcion" required='true'>
      </div>


    </div>
      <div class="row justify-content-start text-center mt-5">
          <div class="col-12">
              <button class="btn btn-primary btn-block" id="btnEnviar">
                  Registrar Cliente
              </button>
          </div>
      </div>
</form>
