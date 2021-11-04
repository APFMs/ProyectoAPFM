<!--ventana para Update--->
<div class="modal fade" id="insertChildresn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #f39c12 !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
          Agregar Nuevo Registro
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="recibCliente.php">
        <input type="hidden" name="id" value="">

        <div class="modal-body" id="cont_modal">

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nombre :</label>
            <input type="text" name="nombre" class="form-control" required="true">
          </div>
          <br>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Apellido Paterno :</label>
            <input type="text" name="apllpat" class="form-control" required="true">
          </div>
          <br>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Apellido Materno :</label>
            <input type="text" name="apllmat" class="form-control" required="true">
          </div>
          <br>


          <div class="col-md-12 mt-2">
            <label for="celular" class="form-label">Edad</label>
            <input type="number" class="form-control" name="edad" required='true'>
          </div>
          <br>

          <div class="from-group" data-validate="Usuario incorrecto">
            <label for="">Sexo:</label>
            <select class="input100" name="sexo" id="tam">
              <option value="Femenino">Femenino</option>
              <option value="masculino">Masculino</option>
            </select>
          </div>
          <br>

          
          <div class="col-md-12 mt-2">
            <label for="celular" class="form-label">Teléfono</label>
            <input type="number" class="form-control" name="num" required='true'>
          </div>
          <br>

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
                <br>



                <div class="from-group" data-validate = "Usuario incorrecto">
                    <label for="">La familia esta de acuerdo con la adopción:</label>
                    <select class="input100" name="fami" id="tam">
                    <option value="Si">si</option>
                    <option value="No">No</option>
    
                
              
                  </select>
                
                </div>
                <br>



                <div class="wrap-input100" data-validate = "Usuario incorrecto">
                    <label for="">Fotocopia CI:</label>
                    <input class="input100" type="text" id="nombre" name="ci" placeholder="Apellido Materno">
                    <span class="focus-efecto"></span>
                </div>
                <br>


                <div class="wrap-input100" data-validate = "Usuario incorrecto">
                    <label for="">Fotocopia de Recibo de Luz:</label>
                    <input class="input100" type="text" id="nombre" name="recibo" placeholder="Apellido Materno">
                    <span class="focus-efecto"></span>
                </div>

        </div>
        <br>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </div>
      </form>

    </div>
  </div>
</div>
<!---fin ventana Update --->