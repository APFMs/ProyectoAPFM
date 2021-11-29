<style>
  .img-contenedor {
    width: 200px;
    height: 200px;
    overflow: hidden;
  }

  .img-contenedor img {
    width: 100%;
    height: auto;
  }

  #izquierda {
    height: 50%;
    float: left;
    width: 50%;
  }

  #derecha {
    height: 50%;
    float: right;
    width: 50%;
  }
</style>


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
            <div class="form-group" id="izquierda">
              <label style="color:#ec4c4c;"for="recipient-name" class="col-form-label">Nombre : <label style="color:#115293;"><?php echo $dataCliente['nombre']; ?> </label>
              <br>
              <label style="color:#ec4c4c;"for="">Especie: <label style="color:#115293;"><?php echo $dataCliente['especie']; ?></label>
              <br>
              <label style="color:#ec4c4c;"for="celular" class="form-label">Edad: <label style="color:#115293;"> <?php echo $dataCliente['edad']; ?></label>
              <br>
              <label style="color:#ec4c4c;"for="">Sexo: <label style="color:#115293;"> <?php echo $dataCliente['sexo']; ?></label>
              <br>
              <label style="color:#ec4c4c;"for="">Color: <label style="color:#115293;"> <?php echo $dataCliente['color']; ?></label>
              <br>
              <label style="color:#ec4c4c;"for="">Tamaño: <label style="color:#115293;"> <?php echo $dataCliente['tam']; ?></label>
              <br>
              <label style="color:#ec4c4c;"for="">Descripción: <label style="color:#115293;"> <?php echo $dataCliente['descripcion']; ?></label>
            </div>
            <div class="img-contenedor" id="derecha">
              <img src="../mascota/img/<?php echo $dataCliente['imagen']; ?>" class="card-img-top" alt="Image" height="20" width="26" class="img-rounded">
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