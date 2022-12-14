<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>Inicio</title>
</head>

<body>
<div class="container" >
        <div aalign="center">
            <img src="../nueva/LogoPrincipal.jpg" alt="Sin imagen" >
        </div>
        <h1 class="text-center" id="exampleModalLabel">Cafetería el Paladar</h1>
        <h2 class="text-center">Menú principal</h2>
        <h2 class="text-center">GERENTES</h2>
        
        
        <div class="list-group">
            <a href="<?=base_url('cocineros')?>" class="list-group-item list-group-item-action">Cocineros</a>
            <a href="<?=base_url('meseros')?>" class="list-group-item list-group-item-action">Meseros</a>
            <a href="<?=base_url('pedido')?>" class="list-group-item list-group-item-action">Pedidos</a>
            <a href="<?=base_url('detallePedido')?>" class="list-group-item list-group-item-action">Detalle_pedidos</a>
            <a href="<?=base_url('especialidades')?>" class="list-group-item list-group-item-action">Especialidades</a>
            <a href="<?=base_url('jefe')?>" class="list-group-item list-group-item-action">Jefes</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>