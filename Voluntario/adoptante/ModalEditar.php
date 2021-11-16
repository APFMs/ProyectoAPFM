<!--ventana para Update--->
<div class="modal fade" id="editChildresn<?php echo $dataCliente['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
        <input type="hidden" name="id" value="<?php echo $dataCliente['id']; ?>">

        <div class="modal-body" id="cont_modal">

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nombre :</label>
            <input type="text" name="nombre" class="form-control" value="<?php echo $dataCliente['nombreSolicitante']; ?>" required="true">
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

          <div class="form-group">
            <label for="start" class="col-form-label">Fecha de Nacimiento :</label>
            <input type="date" name="fechaNac" class="form-control" value="<?php echo $dataCliente['fechaNac']; ?>" required="true">
          </div>

          <div class="from-group" data-validate="Usuario incorrecto">
            <label for="">Sexo :</label>
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
          
          <div class="col-md-12 mt-2">
            <label for="celular" class="form-label">CI :</label>
            <input type="number" class="form-control" name="ci" value="<?php echo $dataCliente['ci']; ?>" required='true'>
          </div>
          <br>
          <div class="col-md-12 mt-2">
            <label for="celular" class="form-label">Teléfono</label>
            <input type="number" class="form-control" name="num" value="<?php echo $dataCliente['num']; ?>" required='true'>
          </div>
          <br>
          
          <div class="from-group" data-validate="Usuario incorrecto">
            <label for="">Departamento:</label>
            <select class="input100" name="depa" value="<?php echo $dataCliente['depa']; ?>" id="depa">
              <?php
              if ($dataCliente['depa'] == "Cochabamba") {
              ?>
                <option value="Cochabamba" selected>Cochabamba</option>
              <?php
              } else {
              ?>
                <option value="Cochabamba">Cochabamba</option>
              <?php
              }
              ?>
              <?php
              if ($dataCliente['depa'] == "La Paz") {
              ?>
                <option value="La Paz" selected>La Paz</option>
              <?php
              } else {
              ?>
                <option value="La Paz">La Paz</option>
              <?php
              }
              ?>
              <?php
              if ($dataCliente['depa'] == "Santa Cruz") {
              ?>
                <option value="Santa Cruz" selected>Santa Cruz</option>
              <?php
              } else {
              ?>
                <option value="Santa Cruz">Santa Cruz</option>
              <?php
              }
              ?>
              <?php
              if ($dataCliente['depa'] == "Oruro") {
              ?>
                <option value="Oruro" selected>Oruro</option>
              <?php
              } else {
              ?>
                <option value="Oruro">Oruro</option>
              <?php
              }
              ?>
             <?php
              if ($dataCliente['depa'] == "Sucre") {
              ?>
                <option value="Sucre" selected>Sucre</option>
              <?php
              } else {
              ?>
                <option value="Sucre">Sucre</option>
              <?php
              }
              ?>
              <?php
              if ($dataCliente['depa'] == "Tarija") {
              ?>
                <option value="Tarija" selected>Tarija</option>
              <?php
              } else {
              ?>
                <option value="Tarija">Tarija</option>
              <?php
              }
              ?>
              <?php
              if ($dataCliente['depa'] == "Potosí") {
              ?>
                <option value="Potosí" selected>Potosí</option>
              <?php
              } else {
              ?>
                <option value="Potosí">Potosí</option>
              <?php
              }
              ?>
              <?php
              if ($dataCliente['depa'] == "Pando") {
              ?>
                <option value="Pando" selected>Pando</option>
              <?php
              } else {
              ?>
                <option value="Pando">Pando</option>
              <?php
              }
              ?>
              <?php
              if ($dataCliente['depa'] == "Beni") {
              ?>
                <option value="Beni" selected>Beni</option>
              <?php
              } else {
              ?>
                <option value="Beni">Beni</option>
              <?php
              }
              ?>
            </select>

          </div>
          <br>


          <div class="from-group" data-validate="Usuario incorrecto">
            <label for="">Cuenta con casa:</label>
            <select class="input100" name="casa" value="<?php echo $dataCliente['casa']; ?>" id="casa">
              <?php
              if ($dataCliente['casa'] == "Si") {
              ?>
                <option value="Si" selected>Si</option>
              <?php
              } else {
              ?>
                <option value="Si">Si</option>
              <?php
              }
              ?>
              <?php
              if ($dataCliente['casa'] == "No") {
              ?>
                <option value="No" selected>No</option>
              <?php
              } else {
              ?>
                <option value="No">No</option>
              <?php
              }
              ?>
           </select>
          </div>
          <br>
  

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Dirección :</label>
            <input type="text" name="direccion" class="form-control" value="<?php echo $dataCliente['direccion']; ?>" required="true">
          </div>
          <br>

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