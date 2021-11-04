<!--ventana para Update--->
<div class="modal fade" id="editChildresn<?php echo $dataCliente['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #f39c12 !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
          Actualizar Información
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form method="POST" action="recib_Update.php">
        <input type="hidden" name="id" value="<?php echo $dataCliente['id']; ?>">

        <div class="modal-body" id="cont_modal">

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nombre :</label>
            <input type="text" name="nombreSolicitante" class="form-control" value="<?php echo $dataCliente['nombreSolicitante']; ?>" required="true">
          </div>
          <br>

          <div class="col-md-12 mt-2">
            <label for="celular" class="form-label">Telefono</label>
            <input type="number" class="form-control" name="celular" value="<?php echo $dataCliente['celular']; ?>" required='true'>
          </div>
          <br>


          <div class="col-md-12 mt-2">
            <label for="edad" class="form-label">Edad</label>
            <input type="number" class="form-control" name="edad" value="<?php echo $dataCliente['edad']; ?>" required='true'>
          </div>
          <br>


          <div class="col-md-12 mt-2">
            <label for="" class="form-label">Descripción</label>
            <input type="text" class="form-control" name="motivo" value="<?php echo $dataCliente['motivo']; ?>"required='true'>
          </div>
    

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </div>
      </form>

    </div>
  </div>
</div>
<!---fin ventana Update --->