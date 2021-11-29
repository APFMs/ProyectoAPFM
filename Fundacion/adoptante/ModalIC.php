<!-- Ventana modal para eliminar -->
<div class="modal fade" id="foto2Childresn<?php echo $dataCliente['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 style="color:#ec4c4c;"class="modal-title">
        Agregar foto de C.I del adoptante
        </h4>
      </div>

      <div class="modal-body">
        <strong style="text-align: center !important">

          <form action="subir.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="my-input">Seleccione una Imagen</label>
              <input id="my-input" type="file" name="imagen">
              <input type="hidden" name="id" value="<?php echo $dataCliente['id']; ?>">
            </div>
            <input type="submit" value="Guardar" class="btn btn-primary" name="Guardar">
          </form>
        </strong>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!---fin ventana eliminar--->