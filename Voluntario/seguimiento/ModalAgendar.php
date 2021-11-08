<!--ventana para Update--->
<div class="modal fade" id="agendarChildresn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #f39c12 !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
          Agregar Nuevo Registro
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="recibCliente.php">
        <input type="hidden" name="id" value="">

        <div class="modal-body" id="cont_modal">

          <div class="form-group">
            <label for="recipient-name" class="col-form-label"> Proxima visita:</label>
            <input type="text" name="nombre" class="form-control" required="true">
          </div>
          <br>


          <div class="col-md-12 mt-2">
            <label for="" class="form-label">Hora :</label>
            <input type="text" class="form-control" name="descripcion" required='true'>
          </div>
          

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Agendar</button>
        </div>
      </form>

    </div>
  </div>
</div>
<!---fin ventana Update --->