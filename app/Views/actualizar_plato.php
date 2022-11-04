<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Actualizar Datos de </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <h1>Actualizar Registro de Platillo</h1>
    <form action="<?= base_url('actualizar_Platos1') ?>" method="post">
   
      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Agregar Codigo</label>
        <input type="text" class="form-control" name="txt_codigo" value="<?= $lista_platos['id_platillo'] ?>" readonly>
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Agregar Nombre</label>
        <input type="text" class="form-control" name="txt_nombre" placeholder="Nombre" value="<?= $lista_platos['nombre'] ?>">
      </div>
      
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Agregar Tamaño</label>
        <input type="text" class="form-control" name="txt_tamaño" placeholder="Codigo de Tamaño" value="<?= $lista_platos['id_tamaño'] ?>">
      </div>
      <div class="mb-3">
        <button type="submit" class="btn btn-dark">Guardar cambios de Registro</button>
      </div>
  </div>
  </form>
 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


</body>

</html>