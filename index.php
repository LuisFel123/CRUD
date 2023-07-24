<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/fe0453555d.js" crossorigin="anonymous"></script>
</head>

<body>

  <?php
  include "modelo/conexion.php";
  include "controlador/Eliminar.php";
  ?>
  <div class="container-fluid row">
    <form class="col-4 p-4" method="POST">
      <h3 class="text-center text-secodary">Panaderia el Mundial</h3>
      <?php
      include "modelo/conexion.php";
      include "controlador/registrar.php";
      ?>
      <div class="form-group">
        <label for="nombre">Nombre del pan:</label>
        <input type="text" class="form-control" id="nombreProducto" name="nombreProducto" required>
      </div>
      <div class="form-group">
        <label for="descripcion">Descripción del pan:</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion" required></input>
      </div>
      <div class="form-group">
        <label for="precio">Precio:</label>
        <input type="number" class="form-control" id="precio" name="precio" step="0.01" required></input>
      </div>
      <div class="form-group">
        <label for="cantidad">Cantidad en existencia:</label>
        <input type="number" class="form-control" id="cantidadStock" name="cantidadStock" required></input>
      </div>
      <br>
      <button type="submit" class="btn btn-primary p-3" name="btnregistrar" value="ok">Registrar</button>
    </form>
    <div class="col-8 p-4">
      <h3 class="text-center text-secodary">Pan disponible</h3>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Identificador</th>
            <th>Nombre de pan</th>
            <th>Descripción</th>
            <th>Precio por unidad</th>
            <th>Cantidad</th>
            <th></th>
          </tr>
        </thead>
        <tbody>

          <?php
          include "modelo/conexion.php";
          $sql = $conexion->query("select * from pan");
          while ($datos = $sql->fetch_object()) { ?>
            <tr>
              <td>
                <?= $datos->idmos ?>
              </td>
              <td>
                <?= $datos->nombremos ?>
              </td>
              <td>
                <?= $datos->descrimos ?>
              </td>
              <td>
                <?= $datos->preciomos ?>
              </td>
              <td>
                <?= $datos->disponiblemos ?>
              </td>
              <td>


                <a href="modificacion.php?id=<?= $datos->idmos ?>" class="btn btn-primary"><i
                    class="fa-regular fa-pen-to-square"></i></a>
                <a href="index.php?id=<?= $datos->idmos ?>" class="btn btn-warning"><i class="fa-solid fa-trash"></i></a>

              </td>
            </tr>
            <?php
          }
          ?>


        </tbody>
      </table>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</body>

</html>