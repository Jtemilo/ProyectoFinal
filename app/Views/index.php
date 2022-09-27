<!doctype html>
<html lang="s">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div>
            <img src="../images/LogoPrincipal.jpg" alt="Sin imagen">
        </div>
        <h1>Cafetería el Paladar</h1>
        <h2 class="text-center">Menú principal</h2>
        <div class="list-group">
            <a href=<?= base_url('gerentes') ?> class="list-group-item list-group-item-action">Gerente</a>
            <a href=<?= base_url('meseros') ?> class="list-group-item list-group-item-action">Meseros</a>
            <a href=<?= base_url('cocineros') ?> class="list-group-item list-group-item-action">Cocineros</a>


        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>