<!doctype html>
<html lang="s">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editoriales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <h1>Editoriales</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Agregar editorial
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Agregar Editorial</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('agregar_editorial') ?>" method="get">
                            <div class="mb-3">
                                <label for="txt_editorial" class="form-label">Codigo Editorial</label>
                                <input type="text" class="form-control" name="txt_editorial" placeholder="Codigo">
                            </div>
                            <div class="mb-3">
                                <label for="txt_nombre" class="form-label">Nombre Editorial</label>
                                <input type="text" class="form-control" name="txt_nombre" placeholder="Nombre">
                            </div>
                            <div class="mb-3">
                                <label for="txt_descripcion" class="form-label">Direccion</label>
                                <input type="text" class="form-control" name="txt_descripcion" placeholder="Direccion">
                            </div>
                            <div class="mb-3">
                                <label for="txt_telefono" class="form-label">Telefono</label>
                                <input type="text" class="form-control" name="txt_telefono" placeholder="Telefono">
                            </div>
                            <div class="mb-3">
                                <label for="txt_email" class="form-label">Email</label>
                                <input type="text" class="form-control" name="txt_email" placeholder="Email">
                            </div>
                            <div class="mb-3">
                                <label for="txt_url" class="form-label">URL</label>
                                <input type="text" class="form-control" name="txt_url" placeholder="URL">
                            </div>
                            <div class="mb-3">
                                <input type="submit" value="Guardar Editorial" class="btn btn-outline-primary form-control">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Url</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($lista_editorial as $elemento) :
                ?>
                    <tr>
                        <td><?= $elemento['cod_editorial'] ?></td>
                        <td><?= $elemento['nombre'] ?></td>
                        <td><?= $elemento['direccion'] ?></td>
                        <td><?= $elemento['telefono'] ?></td>
                        <td><?= $elemento['email'] ?></td>
                        <td><?= $elemento['url'] ?></td>
                        <td>
                            <a href="<?= base_url('eliminar_editorial/' . $elemento['cod_editorial']) ?>">Eliminar</a>
                            /
                            <a href="<?= base_url('datos_editorial/' . $elemento['cod_editorial']) ?>">Actualizar</a>
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