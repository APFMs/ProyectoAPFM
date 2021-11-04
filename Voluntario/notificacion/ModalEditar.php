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

          <div class="col-md-12 mt-2">
            <label for="celular" class="form-label">Edad</label>
            <input type="number" class="form-control" name="edad" value="<?php echo $dataCliente['edad']; ?>" required='true'>
          </div>
          <br>

          <div class="from-group" data-validate="Usuario incorrecto">
            <label for="">Sexo:</label>
            <select class="input100" name="sexo" value="<?php echo $dataCliente['sexo']; ?>" id="sexo">
              <?php
              if ($dataCliente['sexo'] == "Macho") {
              ?>
                <option value="Macho" selected>Macho</option>
              <?php
              } else {
              ?>
                <option value="Macho">Macho</option>
              <?php
              }
              ?>
              <?php
              if ($dataCliente['sexo'] == "Hembra") {
              ?>
                <option value="Hembra" selected>Hembra</option>
              <?php
              } else {
              ?>
                <option value="Hembra">Hembra</option>
              <?php
              }
              ?>
           </select>
          </div>
          <br>

          <div class="from-group" data-validate="Usuario incorrecto">
            <label for="">Color:</label>
            <select class="input100" name="color" value="<?php echo $dataCliente['color']; ?>" id="color">
              <?php
              if ($dataCliente['color'] == "Negro") {
              ?>
                <option value="Negro" selected>Negro</option>
              <?php
              } else {
              ?>
                <option value="Negro">Negro</option>
              <?php
              }
              ?>
              <?php
              if ($dataCliente['color'] == "Blanco") {
              ?>
                <option value="Balnco" selected>Blanco</option>
              <?php
              } else {
              ?>
                <option value="Blanco">Blanco</option>
              <?php
              }
              ?>
              <?php
              if ($dataCliente['color'] == "Café") {
              ?>
                <option value="Café" selected>Café</option>
              <?php
              } else {
              ?>
                <option value="Café">Café</option>
              <?php
              }
              ?>
              <?php
              if ($dataCliente['especie'] == "Plomo") {
              ?>
                <option value="Plomo" selected>Plomo</option>
              <?php
              } else {
              ?>
                <option value="Plomo">Plomo</option>
              <?php
              }
              ?>
              <?php
              if ($dataCliente['especie'] == "Naranja") {
              ?>
                <option value="Naranja" selected>Naranja</option>
              <?php
              } else {
              ?>
                <option value="Naranja">Naranja</option>
              <?php
              }
              ?>
              <?php
              if ($dataCliente['especie'] == "Blanco con Negro") {
              ?>
                <option value="Blanco con Negro" selected>Blanco con Negro</option>
              <?php
              } else {
              ?>
                <option value="Blanco con Negro">Blanco con Negro</option>
              <?php
              }
              ?>
                       <?php
              if ($dataCliente['especie'] == "Blanco con café") {
              ?>
                <option value="Blanco con café" selected>Blanco con café</option>
              <?php
              } else {
              ?>
                <option value="Blanco con café">Blanco con café</option>
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
            <label for="">Tamaño:</label>
            <select class="input100" name="tam" value="<?php echo $dataCliente['tam']; ?>" id="tam">
              <?php
              if ($dataCliente['tam'] == "Grande") {
              ?>
                <option value="Grande" selected>Grande</option>
              <?php
              } else {
              ?>
                <option value="Grande">Grande</option>
              <?php
              }
              ?>
              <?php
              if ($dataCliente['tam'] == "Mediano") {
              ?>
                <option value="Mediano" selected>Mediano</option>
              <?php
              } else {
              ?>
                <option value="Mediano">Mediano</option>
              <?php
              }
              ?>
              <?php
              if ($dataCliente['tam'] == "Pequeño") {
              ?>
                <option value="Pequeño" selected>Pequeño</option>
              <?php
              } else {
              ?>
                <option value="Pequeño">Pequeño</option>
              <?php
              }
              ?>
           </select>

          </div>
          <br>


          <div class="col-md-12 mt-2">
            <label for="" class="form-label">Descripción</label>
            <input type="text" class="form-control" name="descripcion" value="<?php echo $dataCliente['descripcion']; ?>"required='true'>
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