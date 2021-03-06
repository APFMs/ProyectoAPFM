<style>
  .btn-df {
    color: #fff;
    background-color: #53b311;
    border-color: #53b311;
    box-shadow: none;
  }

  .btn-ff {
    color: #fff;
    background-color: #53b311;
    border-color: #53b311;
    box-shadow: none;
  }
</style>

<!--ventana para Update--->
<div class="modal fade" id="solicitudChildresn<?php echo $dataCliente['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #f39c12 !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
          Solicitud del voluntario
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <?php
      include('config.php');

      $sqlCliente2   = ("SELECT concat( P.nombre,' ',P.apllpat, ' ', P.apllmat) as nombreVoluntario
      FROM voluntario V INNER JOIN persona P ON P.id=V.persona_idPERSONA AND P.id=32");
      $queryCliente2 = mysqli_query($con, $sqlCliente2);
      $cantidad2     = mysqli_num_rows($queryCliente2);
      $dataCliente2 = mysqli_fetch_array($queryCliente2)
      ?>


      <form method="POST" action="recib_Solicitud.php">
        <input type="hidden" name="id" value="<?php echo $dataCliente['id']; ?>">
        <input type="hidden" name="mascota_id" value="<?php echo $dataCliente['mascota_id']; ?>">        
        <input type="hidden" name="fundaciones_id" value="<?php echo $dataCliente['fundaciones_id']; ?>">

        <div class="modal-body" id="cont_modal">
          <div class="form-group">
            <label style="color:#ec4c4c;"for="recipient-name" class="col-form-label">Nombre : <label style="color:#115293;"> <?php echo $dataCliente['nombreSolicitante']; ?> </label>
            <br>
            <label style="color:#ec4c4c;"for="">Mascota: <label style="color:#115293;"><?php echo $dataCliente['nombreMascota']; ?></label>
            <br>
            <label style="color:#ec4c4c;"for="" class="form-label">Voluntario: <label style="color:#115293;"> <?php echo $dataCliente2['nombreVoluntario']; ?></label>
            <br/>
            <br>
            <h4 style="color:#eda501;">Invetigaci??n Realizada</h4>
            <br/>
            <label style="color:#11937b;">*??Se realiz?? la verificaci??n del domicilio?: </label> <strong style="color:#e83ecb;"><?php echo $dataCliente['Verificacion'] == 1 ? "Si" : "No"; ?></strong><br>
            <label style="color:#11937b;">*??Cuenta con Casa Propia?: </label> <strong style="color:#e83ecb;"><?php echo $dataCliente['TieneCasa'] == 1 ? "Si" : "No"; ?></strong><br>
            <label style="color:#11937b;">*??Cuenta con boleta de luz?: <strong style="color:#e83ecb;"><?php echo $dataCliente['TieneBoleta'] == 1 ? "Si" : "No"; ?></strong><br>
            <label style="color:#11937b;">*??Cuenta con C.I.?: </label> <strong style="color:#e83ecb;"><?php echo $dataCliente['TieneCi'] == 1 ? "Si" : "No"; ?></strong><br>
            <label style="color:#11937b;">*??Est?? de acuerdo con el seguimiento a seguir?: <strong style="color:#e83ecb;"><?php echo $dataCliente['Seguimiento'] == 1 ? "Si" : "No"; ?></strong><br>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" name="opcion" value=2 class="btn btn-primary">Aprobar</button>
          <button type="submit" name="opcion" value=3 class="btn btn-primary">Rechazar</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!---fin ventana Update --->