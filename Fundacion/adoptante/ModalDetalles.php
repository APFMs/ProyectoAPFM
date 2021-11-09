<!--ventana para Update--->
<div class="modal fade" id="detalleChildresn<?php echo $dataCliente['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
        <label type="hidden" name="id" value="<?php echo $dataCliente['id']; ?>">

          <div class="modal-body" id="cont_modal">
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Nombre : <?php echo $dataCliente['nombre']; ?> </label>
              <br>
              <label for="">Apellido Paterno : <?php echo $dataCliente['apllpat']; ?></label>
              <br>
              <label for="">Apellido Materno : <?php echo $dataCliente['apllmat']; ?></label>
              <br>
              <label for="">Sexo : <?php echo $dataCliente['sexo']; ?></label>
              <br>
              <label for="">CI : <?php echo $dataCliente['ci']; ?></label>
              <br>
              <label for="">Fecha de Nacimiento : <?php echo $dataCliente['fechaNac']; ?></label>
              <br>             
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
      </form>

    </div>
  </div>
</div>
<!---fin ventana Update --->