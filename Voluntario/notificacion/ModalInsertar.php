<!--ventana para Update--->
<div class="modal fade" id="infoChildresn<?php echo $dataCliente['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #f39c12 !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
          Enviar Solicitud del Adoptante
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form method="POST" action="recib_Update.php">
        <input type="hidden" name="id" value="<?php echo $dataCliente['id']; ?>">     
        <input type="hidden" name="mascota_id" value="<?php echo $dataCliente['mascota_id']; ?>">     
        <input type="hidden" name="info" value="<?php echo $dataCliente['info']; ?>">

          <div class="modal-body" id="cont_modal">
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Nombre : <?php echo $dataCliente['nombreSolicitante']; ?> </label>
              <br>
              <label for="">Macota:<?php echo $dataCliente['nombreMascota']; ?></label>
              <br>
            </div>

            <div class="col-md-12 mt-2">
              <label for="" class="form-label">Información</label>
              <input type="text" class="form-control" name="info" required='true'>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Enviar</button>
          </div>
      </form>

    </div>
  </div>
</div>
<!---fin ventana Update --->