<!--ventana para Update--->
<div class="modal fade" id="detalleChildresn<?php echo $dataCliente['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #f39c12 !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
          Datos Personales
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form method="POST" action="recib_Update.php">
        <label type="hidden" name="id" value="<?php echo $dataCliente['id']; ?>">

          <div class="modal-body" id="cont_modal">
            <div class="form-group">
              <label style="color:#ec4c4c;" for="recipient-name" class="col-form-label">Nombre :</label> <label style="color:#115293;"> <?php echo $dataCliente['nombre']; ?> </label>
              <br>
              <label style="color:#ec4c4c;" for="">Apellido Paterno:</label> <label style="color:#115293;"><?php echo $dataCliente['apllpat']; ?></label>
              <br>
              <label style="color:#ec4c4c;" for="">Apellido Materno:</label> <label style="color:#115293;"><?php echo $dataCliente['apllmat']; ?></label>
              <br>
              <label style="color:#ec4c4c;" for="">Fecha de Nacimiento:</label> <label style="color:#115293;"> <?php echo $dataCliente['fechaNac']; ?></label>
              <br>
              <label style="color:#ec4c4c;" for="">CI:</label> <label style="color:#115293;"> <?php echo $dataCliente['ci']; ?></label>
              <br>
              <label style="color:#ec4c4c;" for="">Sexo: </label> <label style="color:#115293;"><?php echo $dataCliente['sexo']; ?></label>
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



<!--ventana para Update--->
<div class="modal fade" id="detalle1Childresn<?php echo $dataCliente['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #f39c12 !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
          Datos sobre la fundación
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form method="POST" action="recib_Update1.php">
        <label type="hidden" name="id" value="<?php echo $dataCliente['id']; ?>">

          <div class="modal-body" id="cont_modal">
            <div class="form-group">
              <label style="color:#ec4c4c;" for="recipient-name" class="col-form-label">Nombre : </label> <label style="color:#115293;"> <?php echo $dataCliente['nombre']; ?> </label>
              <br>
              <label style="color:#ec4c4c;" for="">Dirección :</label> <label style="color:#115293;"> <?php echo $dataCliente['direccion']; ?></label>
              <br>
              <label style="color:#ec4c4c;" for="" class="form-label">Numero de Teléfono :</label> <label style="color:#115293;"><?php echo $dataCliente['num']; ?></label>
              <br>
              <label style="color:#ec4c4c;" for="">Acerca de la Fundación :</label><label style="color:#115293;"><?php echo $dataCliente['acercaDe']; ?></label>
            </div>


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
      </form>

    </div>
  </div>
</div>