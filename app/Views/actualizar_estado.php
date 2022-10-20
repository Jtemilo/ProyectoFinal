<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Actualizar Estado del pedido</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <h1>Actualizar Estados del Pedido</h1>
    <form action="<?= base_url('actualizar_estado1') ?>" method="post">
   
      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Agregar ID</label>
        <input type="text" class="form-control" name="txt_id" value="<?= $lista_estado['estado_id'] ?>" readonly>
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Agregar Estado</label>
        <input type="text" class="form-control" name="txt_estado" placeholder="Nombre" value="<?= $lista_estado['estado'] ?>">
      </div>
      
      <div class="mb-3">
        <button type="submit" class="btn btn-dark">Guardar cambios de Registro</button>
      </div>
  </div>
  </form>
 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


</body>

</html>