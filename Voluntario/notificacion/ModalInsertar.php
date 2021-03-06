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
            <label style="color:#ec4c4c;"for="recipient-name" class="col-form-label">Nombre : <label style="color:#115293;"> <?php echo $dataCliente['nombreSolicitante']; ?> </label>
            <br>
            <label style="color:#ec4c4c;"for="">Macota: <label style="color:#115293;"> <?php echo $dataCliente['nombreMascota']; ?></label>
            <br>
          </div>

          <h4 style="color:#ec4c4c;">Información Adicional</h4>
          <br/>
          <input type="checkbox" id="Verificacion" name="Verificacion"> <label style="color:#0b932a;"for="Verificacion">¿Se hizo la verificación del domicilio?</label><br/>
          <input type="checkbox" id="TieneCasa" name="TieneCasa"> <label style="color:#0b932a;"for="TieneCasa">¿Cuenta con casa propia?</label><br/>
          <input type="checkbox" id="TieneBoleta" name="TieneBoleta"> <label style="color:#0b932a;"for="TieneBoleta">¿Cuenta con boleta de luz?</label><br/>
          <input type="checkbox" id="TieneCi" name="TieneCi"> <label style="color:#0b932a;"for="TieneCi">¿Cuenta con C.I.?</label><br/>
          <input type="checkbox" id="Seguimiento" name="Seguimiento"> <label style="color:#0b932a;"for="Seguimiento">¿Está de acuerdo con el seguimiento a seguir?</label>
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