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
<div class="modal fade" id="DCIChildresn<?php echo $dataCliente['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #f39c12 !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
          CEDULA DE IDENTIDAD DEL ADOPTANTE
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="">
        <label type="hidden" name="id" value="<?php echo $dataCliente['id']; ?>">

          <div class="modal-body" id="cont_modal">
         
              <img src="img/<?php echo $dataCliente['fotoCi']; ?>" class="card-img-top" alt="Image" height="300" width="26" class="img-rounded">
          
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
      </form>

    </div>
  </div>
</div>
<!---fin ventana Update --->