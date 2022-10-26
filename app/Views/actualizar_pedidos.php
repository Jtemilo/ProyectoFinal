<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Actualizar Datos de Pedidos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <h1>Actualizar Registro de Pedidos</h1>
    <form action="<?= base_url('actualizar_pedidos') ?>" method="post">
   
      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Agregar Codigo</label>
        <input type="text" class="form-control" name="txt_codigo" value="<?= $lista_pedidos['id_pedido'] ?>" readonly>
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Codigo de mesero</label>
        <input type="text" class="form-control" name="txt_mesero"  value="<?= $lista_pedidos['cod_mesero'] ?>">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label"> Fecha de Pedido</label>
        <input type="text" class="form-control" name="txt_fecha"  value="<?= $lista_pedidos['fecha_pedido'] ?>">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label"> Codigo del gerente</label>
        <input type="text" class="form-control" name="txt_gerente" value="<?= $lista_pedidos['gerente_id'] ?>">
      </div>
      
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Lugar y hora</label>
        <input type="text" class="form-control" name="txt_hora"  value="<?= $lista_pedidos['fecha_hora'] ?>">
      </div>
      <div class="mb-3">
        <button type="submit" class="btn btn-dark">Guardar cambios del pedido</button>
      </div>
  </div>
  </form>
 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


</body>

</html>