<!--ventana para Update--->
<div class="modal fade" id="Formulario<?php echo $dataCliente['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #f39c12 !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
          Llenar Solicitud de Adopción
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form method="POST" action="recib_Update.php">
        <input type="hidden" name="id" value="<?php echo $dataCliente['id']; ?>">

        <div class="modal-body" id="cont_modal">


        <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nombre del solicitante:</label>
            <input type="text" name="nombre" class="form-control" required="true">
          </div>


          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Primer Apellido :</label>
            <input type="text" name="apllpat" class="form-control" required="true">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label"> Segundo Apellido :</label>
            <input type="text" name="apllmat" class="form-control">
          </div>

          <div class="from-group" data-validate="Usuario incorrecto">
            <label for="">Sexo:</label>
            <select class="input100" name="sexo" id="tam">
              <option value="Masculino">Masculino</option>
              <option value="Femenino">Femenino</option>
            </select>
          </div>

          <div class="col-md-12 mt-2">
            <label for="ci" class="form-label">CI:</label>
            <input type="number" class="form-control" name="ci" required='true'>
          </div>
          <br>

          <div>
            <label for="start">Fecha de Nacimiento:</label>
            <input type="date" id="start" name="fechaNac" value="2003-07-22" min="1960-01-01" max="2003-12-31">
          </div>

          <div class="col-md-12 mt-2">
            <label for="celular" class="form-label">Teléfono</label>
            <input type="number" class="form-control" name="num" required='true'>
          </div>
          <br>


          <div class="from-group" data-validate="Usuario incorrecto">
            <label for="">Tiene casa propia:</label>
            <select class="input100" name="casa" id="casa">
              <option value="Si">si</option>
              <option value="No">No</option>
            </select>
          </div>
          <br>

          <div class="col-md-12 mt-2">
            <label for="" class="form-label">Dirección :</label>
            <input type="text" class="form-control" name="direccion" required='true'>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Enviar Solicitud</button>
        </div>
      </form>

    </div>
  </div>
</div>
<!---fin ventana Update --->