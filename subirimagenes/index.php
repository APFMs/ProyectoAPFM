<?php
include('Backend/conexion.php');
$query = "select * from imagenes";
$resultado = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <title>Document</title>
  <!-- Custom styles for this template -->
  <link href="../css/carousel.css" rel="stylesheet">

  <style>
    .btn-df {
      color: #fff;
      background-color: #6f3dbf;
      border-color: #6f3dbf;
      box-shadow: none;
    }
  </style>
</head>

<body>




      <div class="">

        <div class="card-columns">
          <?php
          $query = "SELECT I.imagen, I.idMascota, M.id, M.nombre, M.especie, M.edad, M.sexo, M.color, M.tam,  M.descripcion FROM imagenes I INNER JOIN mascota M ON I.idMascota=M.id";
          $resultado = mysqli_query($con, $query);
          foreach ($resultado as $dataCliente) { ?>

            <div class="card">
              <img src="../fundacion/mascota/img/<?php echo $dataCliente['imagen']; ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><strong><?php echo $dataCliente['nombre']; ?></strong></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?php echo $dataCliente['descripcion']; ?></h6>
                
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-df" data-toggle="modal" data-target="#masDetalles<?php echo $dataCliente['id']; ?>">
                  Mas Detalles
                </button>
                <?php include('ModalDetalles.php'); ?>

              </div>

            </div>
          <?php } ?>

        </div>

      </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>