<!--ventana para Update--->
<div class="modal fade" id="asignarChildresn<?php echo $dataCliente['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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



            <?php
            include('config.php');

            $sqlCliente2   = ("SELECT V.persona_idPERSONA, P.nombre as 'nombreVoluntario', F.nombre as 'nombreFundacion'
            FROM voluntario V INNER JOIN persona P ON P.id=V.persona_idPERSONA INNER JOIN fundacion F ON F.id=V.fundaciones_id and F.id=" . $dataCliente['idFundacion']);
            $queryCliente2 = mysqli_query($con, $sqlCliente2);            

            ?>
            <form method="POST" action="recib_asignar.php">
                <input type="hidden" name="id" value="<?php echo $dataCliente['id']; ?>">

                <div class="modal-body" id="cont_modal">
                    <label for="recipient-name" class="col-form-label">Nombre de la Mascota : <?php echo $dataCliente['nombre']; ?> </label>
                    <br>
                    <br>
                    <br>
                    <div class="from-group" data-validate="Usuario incorrecto">
                        <label for="">Asignar mascota al voluntario :</label>
                        <select class="input100" name="voluntario" id="voluntario">
                            <?php
                            while ($dataCliente2 = mysqli_fetch_array($queryCliente2)) { ?>
                                <option value="<?php echo $dataCliente2['persona_idPERSONA'] ?>" selected><?php echo $dataCliente2['nombreVoluntario'] ?></option>
                            <?php } ?>
                        </select>

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