<!--ventana para Update--->
<div class="modal fade" id="editChildresn<?php echo $dataCliente['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #f39c12 !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
          Actualizar Mis Datos
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form method="POST" action="recib_Update.php">
        <input type="hidden" name="id" value="<?php echo $dataCliente['id']; ?>">

        <div class="modal-body" id="cont_modal">

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nombre :</label>
            <input type="text" name="nombre" class="form-control" value="<?php echo $dataCliente['nombre']; ?>" required="true">
          </div>
          <br>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Apellido Paterno :</label>
            <input type="text" name="apllpat" class="form-control" value="<?php echo $dataCliente['apllpat']; ?>" required="true">
          </div>
          <br>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Apellido Materno :</label>
            <input type="text" name="apllmat" class="form-control" value="<?php echo $dataCliente['apllmat']; ?>" required="true">
          </div>
          <br>

          <div class="col-md-12 mt-2">
            <label for="celular" class="form-label">Edad</label>
            <input type="number" class="form-control" name="edad" value="<?php echo $dataCliente['edad']; ?>" required='true'>
          </div>
          <br>

          <div class="from-group" data-validate="Usuario incorrecto">
            <label for="">Sexo:</label>
            <select class="input100" name="sexo" value="<?php echo $dataCliente['sexo']; ?>" id="sexo">
              <?php
              if ($dataCliente['sexo'] == "Masculino") {
              ?>
                <option value="Masculino" selected>Masculino</option>
              <?php
              } else {
              ?>
                <option value="Masculino">Masculino</option>
              <?php
              }
              ?>
              <?php
              if ($dataCliente['sexo'] == "Femenino") {
              ?>
                <option value="Femenino" selected>Femenino</option>
              <?php
              } else {
              ?>
                <option value="Femenino">Femenino</option>
              <?php
              }
              ?>
           </select>
          </div>
          <br>
          
          <div class="col-md-12 mt-2">
            <label for="celular" class="form-label">CI</label>
            <input type="number" class="form-control" name="ci" value="<?php echo $dataCliente['ci']; ?>" required='true'>
          </div>
          <br>

       <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nombre de Usuario :</label>
            <input type="text" name="nomusu" class="form-control" value="<?php echo $dataCliente['nomusu']; ?>" required="true">
          </div>
          <br>

          
          <div class="wrap-input100" data-validate="Password incorrecto">
                    <label for="">Contraseña:</label>
                    <input class="input100" type="password" id="password" name="contr" placeholder="Password" value="<?php echo $dataCliente['contr']; ?>">
                    <span class="focus-efecto"></span>
                </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </div>
      </form>

    </div>
  </div>
</div>
<!---fin ventana Update --->