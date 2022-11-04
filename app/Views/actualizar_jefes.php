<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Actualizar Gerente</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <h1>Actualizar Registro de Gerente</h1>
    <form action="<?= base_url('actualizar_jefes') ?>" method="post">
   
      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Agregar ID</label>
        <input type="text" class="form-control" name="txt_codigo" value="<?= $lista_jefes['gerente_id'] ?>" readonly>
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Agregar Nombre</label>
        <input type="text" class="form-control" name="txt_nombre" placeholder="Nombre" value="<?= $lista_jefes['nombre'] ?>">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Apellido</label>
        <input type="text" class="form-control" name="txt_apellido" placeholder="Apellido" value="<?= $lista_jefes['apellido'] ?>">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Agregar Contraseña</label>
        <input type="text" class="form-control" name="txt_contra" placeholder="Contraseña" value="<?= $lista_jefes['contra'] ?>">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Agregar Tipo de Ususario</label>
        <input type="text" class="form-control" name="txt_user" placeholder="Tipo usuario" value="<?= $lista_jefes['tipo_usuario'] ?>">
      </div>
      <div class="mb-3">
        <button type="submit" class="btn btn-dark">Guardar cambios de Registro</button>
      </div>
  </div>
  </form>
 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


</body>

</html>