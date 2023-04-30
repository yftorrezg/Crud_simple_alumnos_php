<?php
    include "conexion.php"; // incluye el archivo conexion.php
    $con = conectar();
    // llama a la funcion conectar() y guarda el resultado en la variable $con

    $sql = "SELECT *  FROM alumno"; // consulta sql
    $query = mysqli_query($con, $sql); // ejecuta la consulta sql
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title> PAGINA ALUMNO</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- links -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <div class="container mt-5">
    <div class="row">
      <!-- fila -->

      <div class="col-md-3">
        <h1>Ingrese datos</h1>
        <form action="insertar.php" method="POST">

          <input type="text" class="form-control mb-3" name="cod_estudiante" placeholder="cod estudiante">
          <input type="text" class="form-control mb-3" name="dni" placeholder="Dni">
          <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres">
          <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos">

          <input type="submit" class="btn btn-primary">
        </form>
      </div> <!-- fin columna -->

      <div class="col-md-9">
        <table class="table">

          <thead class="table-success table-striped">
            <tr>
              <th>Codigo</th>
              <th>Dni</th>
              <th>Nombres</th>
              <th>pellidos</th>
              <th></th>
              <th></th>
            </tr>
          </thead>

          <tbody>
            <?php
                // recorre el resultado de la consulta sql y lo guarda en la variable $row. Mientras $row tenga datos, se ejecuta el codigo dentro del while
                while ($row = mysqli_fetch_array($query)) { 
            ?>
            <tr>
              <th><?php echo $row['cod_estudiante'] ?></th>
              <th><?php echo $row['dni'] ?></th>
              <th><?php echo $row['nombres'] ?></th>
              <th><?php echo $row['apellidos'] ?></th>
              <th>
                <a href="actualizar.php?id=<?php echo $row['cod_estudiante'] ?>" 
                class="btn btn-info">Editar</a>
              </th>
              <th>
                <a href="delete.php?id=<?php echo $row['cod_estudiante'] ?>" 
                class="btn btn-danger">Eliminar</a>
              </th>
            </tr>
                <?php
                }
            ?>
          </tbody> 
        </table> <!-- fin tabla -->
      </div> <!-- fin col-md-8 -->
    </div> <!-- fin fila -->
  </div> <!-- fin container -->
</body>

</html>