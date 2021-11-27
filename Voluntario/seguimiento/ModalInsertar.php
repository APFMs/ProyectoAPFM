<!--ventana para Update--->
<div class="modal fade" id="insertChildresn<?php echo $dataCliente['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #f39c12 !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
          Registrar Información de visita 
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form method="POST" action="subir.php" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $dataCliente['id']; ?>">

        <div class="modal-body" id="cont_modal">
          <div>
            <label for="start">Dia de Visita:</label>
            <input type="date"  name="fechaVisita" >
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Condiciones :</label>
            <input type="text" name="reporte" class="form-control" required="true">
          </div>



          <div class="modal-body">
            <strong style="text-align: center !important">


              



                <div class="form-group">
                  <label for="my-input">Agregar una foto de la mascota</label>
                  <input id="my-input" type="file" name="imagen">
                </div>

                
             <!--   <div class="form-group">
                  <input id="my-input" class="form-control" type="hidden" name="titulo" value="<?php echo $dataCliente['id'] ?>">
                </div>-->

                <?php if (isset($_SESSION['mensaje'])) { ?>
                  <div class="alert alert-<?php echo $_SESSION['tipo'] ?> alert-dismissible fade show" role="alert">
                    <strong><?php echo $_SESSION['mensaje']; ?></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <?php session_unset();
                } ?>
                
                
                

         





            </strong>
          </div>



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary" value="Guardar" name="Guardar">Registrar Visita</button>
        </div>
      </form>

    </div>
  </div>
</div>
<!---fin ventana Update --->