<!-- Ventana modal para eliminar -->
<div class="modal fade" id="adopChildresn<?php echo $dataCliente['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">
          ¿La mascota esta lista para la adopción?
        </h4>
      </div>

      <div class="modal-body">
        <strong style="text-align: center !important">
          <?php echo $dataCliente['nombre']; ?>

        </strong>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-danger btnActualizar" data-dismiss="modal" id="<?php echo $dataCliente['id']; ?>">Listo</button>
      </div>
    </div>
  </div>
</div>
<!---fin ventana eliminar--->