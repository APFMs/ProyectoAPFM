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
            <input type="text" name="nombre" class="form-control" value="<?php echo $dataCliente['nombre']; ?>" required="true">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Dirección :</label>
            <input type="text" name="direccion" class="form-control" value="<?php echo $dataCliente['direccion']; ?>" required="true">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Teléfono :</label>
            <input type="number" name="num" class="form-control" value="<?php echo $dataCliente['num']; ?>" required="true">
          </div>
          <div class="col-md-12 mt-2">
            <label for="" class="form-label">Acerca de la Fundación</label>
            <input type="text" class="form-control" name="acercaDe" value="<?php echo $dataCliente['acercaDe']; ?>"required='true'>
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