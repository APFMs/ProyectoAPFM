<!--ventana para Update--->
<div class="modal fade" id="insertChildresn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #f39c12 !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
          Registrar Adoptante
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="recibCliente.php">
        <input type="hidden" name="id" value="">

        <div class="modal-body" id="cont_modal">

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nombre :</label>
            <input type="text" name="nombre" class="form-control" required="true">
          </div>
          

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Apellido Paterno :</label>
            <input type="text" name="apllpat" class="form-control" required="true">
          </div>
          

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Apellido Materno :</label>
            <input type="text" name="apllmat" class="form-control" required="true">
          </div>


          <div class="col-md-12 mt-2">
            <label for="celular" class="form-label">Edad</label>
            <input type="number" class="form-control" name="edad" required='true'>
          </div>

          <div class="from-group" data-validate="Usuario incorrecto">
            <label for="">Sexo:</label>
            <select class="input100" name="sexo" id="tam">
              <option value="Femenino">Femenino</option>
              <option value="masculino">Masculino</option>
            </select>
          </div>


          <div class="col-md-12 mt-2">
            <label for="celular" class="form-label">Teléfono</label>
            <input type="number" class="form-control" name="num" required='true'>
          </div>

          <div class="from-group" data-validate="Usuario incorrecto">
            <label for="">Departamento:</label>
            <select class="input100" name="depa" id="">
              <option value="Cochabamba">Cochabamba</option>
              <option value="La Paz">La Paz</option>
              <option value="Santa Cruz">Santa Cruz</option>
              <option value="Oruro">Oruro</option>
              <option value="Sucre">Sucre</option>
              <option value="Tarija">Tarija</option>
              <option value="Potosí">Potosí</option>
              <option value="Pando">Pando</option>
              <option value="Beni">Beni</option>
            </select>

          </div>
          <br>


          <div class="from-group" data-validate="Usuario incorrecto">
            <label for="">Tiene casa propia:</label>
            <select class="input100" name="casa" id="casa">
              <option value="Si">si</option>
              <option value="No">No</option>
            </select>
          </div>
          <br>

          <div class="from-group" data-validate="Usuario incorrecto">
            <label for="">La familia esta de acuerdo con la adopción:</label>
            <select class="input100" name="fami" id="fami">
              <option value="Si">si</option>
              <option value="No">No</option>
            </select>
          </div>



          <div class="modal-body">
        <strong style="text-align: center !important">
          <form action="subir.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="my-input">Fotocopia de CI</label>
              <input id="my-input" type="file" name="imagen">
            </div>

            <div class="form-group">              
              <input id="my-input" class="form-control" type="hidden" name="titulo" value="<?php echo $dataCliente['id']?>">
            </div>
            
            <?php if (isset($_SESSION['mensaje'])) { ?>
              <div class="alert alert-<?php echo $_SESSION['tipo'] ?> alert-dismissible fade show" role="alert">
                <strong><?php echo $_SESSION['mensaje']; ?></strong>
              </div>
            <?php session_unset();
            } ?>
          </form>
        </strong>
      </div>v>




          <div class="modal-body">
        <strong style="text-align: center !important">
          <form action="subir.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="my-input">Fot. de Boleta luz</label>
              <input id="my-input" type="file" name="imagen">
            </div>

            <div class="form-group">              
              <input id="my-input" class="form-control" type="hidden" name="titulo" value="<?php echo $dataCliente['id']?>">
            </div>
            
            <?php if (isset($_SESSION['mensaje'])) { ?>
              <div class="alert alert-<?php echo $_SESSION['tipo'] ?> alert-dismissible fade show" role="alert">
                <strong><?php echo $_SESSION['mensaje']; ?></strong>
           <!--     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>  -->
              </div>
            <?php session_unset();
            } ?>
  <!--         <input type="submit" value="Guardar" class="btn btn-primary" name="Guardar"> -->
          </form>
        </strong>
      </div>

        </div>
    
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>

    </div>
  </div>
</div>
<!---fin ventana Update --->