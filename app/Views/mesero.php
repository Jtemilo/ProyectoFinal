<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meseros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Tabla de Meseros</h1>
        <!-- Button trigger modal -->
<button class="btn btn-dark" type="button" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#exampleModal">
  Agregar Registro
</button>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Mesero</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action = "<?=base_url('guardar_mesero') ?>" method="post">
      <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Agregar Codigo</label>
  <input type="text" class="form-control" name="txt_codigo" placeholder="Codigo Mesero">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Agregar Nombre</label>
  <input type="text" class="form-control" name="txt_nombre" placeholder="Nombre Mesero">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Agregar Apellido</label>
  <input type="text" class="form-control" name="txt_apellido" placeholder="Apellido Mesero">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Agregar Telefono</label>
  <input type="text" class="form-control" name="txt_tel" placeholder="Telefono Mesero">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Agregar Contraseña</label>
  <input type="text" class="form-control" name="txt_contra" placeholder="Contraseña">
</div>
<div class="mb-3">
  <button type="submit" class="btn btn-dark">Guardar Registro</button>
</div>



      </div>
      </form>
      <div class="modal-footer">
        <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
 
    </div>
    
  </div>

</div>

        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>Codigo Mesero</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono</th>
                    <th>Contraseña</th>
                    <th>Acciones</th>

                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($lista_mesero as $elemento_mesero):


                ?>
                    <tr>
                        <td><?= $elemento_mesero['cod_mesero'] ?></td>
                        <td><?= $elemento_mesero['nombre'] ?></td>
                        <td><?= $elemento_mesero['apellido'] ?></td>
                        <td><?= $elemento_mesero['telefono'] ?></td>
                        <td><?= $elemento_mesero['contra'] ?></td>
                        <td>
                            <a href="<?= base_url('eliminar_mesero/' .$elemento_mesero['cod_mesero'])?>">Eliminar</a>
                            /
                           <a href="<?=base_url('actualizar_mesero/'.$elemento_mesero['cod_mesero'])?>">Actualizar</a>
                        </td>

                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>