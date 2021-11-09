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
              <label for="recipient-name" class="col-form-label">Nombre : <?php echo $dataCliente['nombre']; ?> </label>
              <br>
              <label for="">Especie:<?php echo $dataCliente['especie']; ?></label>
              <br>
              <label for="celular" class="form-label">Edad: <?php echo $dataCliente['edad']; ?></label>
              <br>
              <label for="">Sexo: <?php echo $dataCliente['sexo']; ?></label>
              <br>
              <label for="">Color: <?php echo $dataCliente['color']; ?></label>
              <br>
              <label for="">Tamaño: <?php echo $dataCliente['tam']; ?></label>
              <br>
              <label for="">Descripción: <?php echo $dataCliente['descripcion']; ?></label>
            </div>
            <div class="img-contenedor" id="derecha">
              <img src="../../Fundacion/mascota/img/<?php echo $dataCliente['imagen']; ?>" class="card-img-top" alt="Image" height="20" width="26" class="img-rounded">
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