<!--ventana para Update--->
<div class="modal fade" id="solicitudChildresn<?php echo $dataCliente['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #f39c12 !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
          Solicitud del voluntario
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form method="POST" action="recib_Update.php">
        <label type="hidden" name="id" value="<?php echo $dataCliente['id']; ?>">

          <div class="modal-body" id="cont_modal">
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Nombre : <?php echo $dataCliente['nombreSolicitante']; ?> </label>
              <br>
              <label for="">Mascota:<?php echo $dataCliente['nombreMascota']; ?></label>
              <br>
              <label for="" class="form-label">Voluntario: <?php echo $dataCliente['nombreSolicitante']; ?></label>
              <br>
              <label for="">Información: <?php echo $dataCliente['nombreSolicitante']; ?></label>
              <br>
            </div>

 

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Aprobar</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Rechazar</button>
          </div>
      </form>

    </div>
  </div>
</div>
<!---fin ventana Update --->