<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar Editorial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Actualizar Editorial</h1>
        <form action="<?=base_url('actualizar_editorial')?>" method="get">
            <div class="mb-3">
                <label for="txt_editorial" class="form-label">Codigo Editorial</label>
                <input type="text" class="form-control" name="txt_editorial" value="<?=$editorial['cod_editorial'];?>" readonly>
            </div>
            <div class="mb-3">
                <label for="txt_nombre" class="form-label">Nombre Editorial</label>
                <input type="text" class="form-control" name="txt_nombre" value="<?=$editorial['nombre'];?>">
            </div>
            <div class="mb-3">
                <label for="txt_descripcion" class="form-label">Direccion</label>
                <input type="text" class="form-control" name="txt_direccion" value="<?=$editorial['direccion'];?>">
            </div>
            <div class="mb-3">
                <label for="txt_telefono" class="form-label">Telefono</label>
                <input type="text" class="form-control" name="txt_telefono" value="<?=$editorial['telefono'];?>">
            </div>
            <div class="mb-3">
                <label for="txt_email" class="form-label">Email</label>
                <input type="text" class="form-control" name="txt_email" value="<?=$editorial['email'];?>">
            </div>
            <div class="mb-3">
                <label for="txt_url" class="form-label">URL</label>
                <input type="text" class="form-control" name="txt_url" value="<?=$editorial['url'];?>">
            </div>
            <div class="mb-3">
                <input type="submit" value="Guardar Editorial" class="btn btn-outline-primary form-control">
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>