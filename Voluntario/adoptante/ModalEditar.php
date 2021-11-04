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
            <select class="input100" name="sexo" id="tam">
              <option value="Macho">Femenino</option>
              <option value="Hembra">Masculino</option>
            </select>
          </div>
          <br>
          
          <div class="from-group" data-validate="Usuario incorrecto">
            <label for="">Especie:</label>
            <select class="input100" name="especie" value="<?php echo $dataCliente['especie']; ?>" id="especie">
              <?php
              if ($dataCliente['especie'] == "Perro") {
              ?>
                <option value="Perro" selected>Perro</option>
              <?php
              } else {
              ?>
                <option value="Perro">Perro</option>
              <?php
              }
              ?>
              <?php
              if ($dataCliente['especie'] == "Gato") {
              ?>
                <option value="Gato" selected>Gato</option>
              <?php
              } else {
              ?>
                <option value="Gato">Gato</option>
              <?php
              }
              ?>
              <?php
              if ($dataCliente['especie'] == "Otro") {
              ?>
                <option value="Otro" selected>Otro</option>
              <?php
              } else {
              ?>
                <option value="Otro">Otro</option>
              <?php
              }
              ?>
            </select>

          </div>
          <br>

  

          <div class="from-group" data-validate="Usuario incorrecto">
            <label for="">Color:</label>
            <select class="input100" name="color" id="color">
              <option value="Negro">Negro</option>
              <option value="Blanco">Blanco</option>
              <option value="Café">Café</option>
              <option value="Plomo">Plomo</option>
              <option value="Naranja">Naranja</option>
              <option value="Blanco con Negro">Blanco con Negro</option>
              <option value="Blanco con café">Blanco con café</option>
              <option value="Otro">Otro</option>

            </select>

          </div>
          <br>


          <div class="from-group" data-validate="Usuario incorrecto">
            <label for="">Tamaño:</label>
            <select class="input100" name="tam" id="tam">
              <option value="Grande">Grande</option>
              <option value="Mediano">Mediano</option>
              <option value="Pequeño">Pequeño</option>


            </select>

          </div>
          <br>


          <div class="col-md-12 mt-2">
            <label for="" class="form-label">Descripción</label>
            <input type="text" class="form-control" name="descripcion" required='true'>
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