<!-- Ventana modal para eliminar -->
<div class="modal fade" id="fotoChildresn<?php echo $dataCliente['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
          <form action="subir.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="my-input">Seleccione una Imagen</label>
              <input id="my-input" type="file" name="imagen">
            </div>

            <div class="form-group">              
              <input id="my-input" class="form-control" type="hidden" name="titulo" value="<?php echo $dataCliente['id']?>">
            </div>
            
            <?php if (isset($_SESSION['mensaje'])) { ?>
              <div class="alert alert-<?php echo $_SESSION['tipo'] ?> alert-dismissible fade show" role="alert">
                <strong><?php echo $_SESSION['mensaje']; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <?php session_unset();
            } ?>
            <input type="submit" value="Guardar" class="btn btn-primary" name="Guardar">
          </form>
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