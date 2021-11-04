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
            <label for="recipient-name" class="col-form-label">Nombre :</label>
            <input type="text" name="nombre" class="form-control" required="true">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Teléfono :</label>
            <input type="number" name="celular" class="form-control" required="true">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Edad :</label>
            <input type="number" name="edad" class="form-control" required="true">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Motivo para la Adopción :</label>
            <input type="text" name="motivo" class="form-control" required="true">
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