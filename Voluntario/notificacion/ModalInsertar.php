<!--ventana para Update--->
<div class="modal fade" id="infoChildresn<?php echo $dataCliente['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #f39c12 !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
          Solicitud del adoptante
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form method="POST" action="recib_Update.php">
        <label type="hidden" name="id" value="<?php echo $dataCliente['id']; ?>">
        <label type="hidden" name="mascota_id" value="<?php echo $dataCliente['mascota_id']; ?>">

          <div class="modal-body" id="cont_modal">
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Nombre : <?php echo $dataCliente['nombreSolicitante']; ?> </label>
              <br>
              <label for="">Teléfono:<?php echo $dataCliente['celular']; ?></label>
              <br>
              <label for="" class="form-label">Edad: <?php echo $dataCliente['edad']; ?></label>
              <br>
              <label for="">Motivo para la adopción: <?php echo $dataCliente['motivo']; ?></label>
              <br>              
            </div>

            <div class="col-md-12 mt-2">
            <label for="" class="form-label">Información</label>
            <input type="text" class="form-control" name="info" required='true'>
          </div>

          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
      </form>

    </div>
  </div>
</div>
<!---fin ventana Update --->