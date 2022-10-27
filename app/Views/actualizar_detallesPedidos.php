<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Actualizar Datos de Detalles Pedidos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <h1>Actualizar Registro de Detalles Pedidos</h1>
    <form action="<?= base_url('actualizar_detallesPedidos') ?>" method="post">
   
      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Id del detalle</label>
        <input type="text" class="form-control" name="txt_codigo" value="<?= $lista_detallesPedidos['id_detalle'] ?>" readonly>
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Id del pedido</label>
        <input type="text" class="form-control" name="txt_pedido"  value="<?= $lista_detallesPedidos['id_pedido'] ?>">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Id del platillo</label>
        <input type="text" class="form-control" name="txt_platillo"  value="<?= $lista_detallesPedidos['id_platillo'] ?>">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Id de la bebida</label>
        <input type="text" class="form-control" name="txt_bebida"  value="<?= $lista_detallesPedidos['id_bebida'] ?>">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Id del cocinero</label>
        <input type="text" class="form-control" name="txt_cocinero" value="<?= $lista_detallesPedidos['cocinero_id'] ?>">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Id del estado del pedido</label>
        <input type="text" class="form-control" name="txt_estado" value="<?= $lista_detallesPedidos['estado_id'] ?>">
      </div>
        <button type="submit" class="btn btn-dark">Guardar cambios del detalle pedido</button>
      </div>
  </div>
  </form>
 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


</body>

</html>