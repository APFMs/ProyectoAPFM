<!--ventana para Update--->
<div class="modal fade" id="detalleChildresn<?php echo $dataCliente['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #f39c12 !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
          Datos del Adoptante
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form method="POST" action="recib_Update.php">
        <label type="hidden" name="id" value="<?php echo $dataCliente['id']; ?>">

        <div class="modal-body" id="cont_modal">
            <div class="form-group">
              <label style="color:#ec4c4c;"for="recipient-name" class="col-form-label">Nombre :<label style="color:#115293;"> <?php echo $dataCliente['nombreSolicitante']; ?> </label>
              <br>
              <label style="color:#ec4c4c;"for="">Apellido Paterno :<label style="color:#115293;"><?php echo $dataCliente['apllpat']; ?></label>
              <br>
              <label style="color:#ec4c4c;"for="">Apellido Materno :<label style="color:#115293;"><?php echo $dataCliente['apllmat']; ?></label>
              <br>
              <label style="color:#ec4c4c;"for="" class="form-label">Fecha de Nacimiento :<label style="color:#115293;"> <?php echo $dataCliente['fechaNac']; ?></label>
              <br>
              <label style="color:#ec4c4c;"for="">Sexo :<label style="color:#115293;"><?php echo $dataCliente['sexo']; ?></label>
              <br>
              <label style="color:#ec4c4c;"for="">CI :<label style="color:#115293;"><?php echo $dataCliente['ci']; ?></label>
              <br>
              <label style="color:#ec4c4c;"for="">Teléfono :<label style="color:#115293;"><?php echo $dataCliente['num']; ?></label>
              <br>
              <label style="color:#ec4c4c;"for="">Departamento :<label style="color:#115293;"><?php echo $dataCliente['depa']; ?></label>
              <br>
              <label style="color:#ec4c4c;"for="">¿Cuenta con casa propia? :<label style="color:#115293;"><?php echo $dataCliente['casa']; ?></label>
              <br>
              <label style="color:#ec4c4c;"for="">Dirección :<label style="color:#115293;"> <?php echo $dataCliente['direccion']; ?></label>
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