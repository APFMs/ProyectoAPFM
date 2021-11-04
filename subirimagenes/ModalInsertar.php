<!-- Modal -->
<div class="modal fade" id="Formulario<?php echo $dataCliente['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="masDetalles" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #f39c12 !important;">
                <h6 class="modal-title" style="color: #fff; text-align: center;">
                    Formulario de Solicitud
                </h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form method="POST" action="recib_Update.php">
                <input type="hidden" name="id" value="<?php echo $dataCliente['id']; ?>">
                <div class="modal-body" id="cont_modal">
                    <div class="form-group" id="izquierda">

                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Nombre :</label>
                            <input type="text" name="nombre" class="form-control" required="true">
                        </div>

                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Teléfono :</label>
                            <input type="number" name="celular" class="form-control" required="true">
                        </div>

                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Edad :</label>
                            <input type="number" name="edad" class="form-control" required="true">
                        </div>

                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Motivo para la Adopción :</label>
                            <input type="text" name="motivo" class="form-control" required="true">
                        </div>

                    </div>

                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Enviar Solicitud</button>

            </div>
        </div>
    </div>
</div>
<!---fin ventana Update --->