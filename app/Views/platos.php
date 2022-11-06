<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Cocineros cafetería el paladar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- CSS personalizado --> 
<link rel="stylesheet" href="<?=base_url('css/main.css')?>">

<link rel="stylesheet" type="text/css" href="<?=base_url('datatables/datatables.min.css')?>">
<!--datables estilo bootstrap 4 CSS-->  
<link rel="stylesheet"  type="text/css" href="<?=base_url('datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css')?>">        
<!--font awesome con CDN-->  
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  


<link rel="stylesheet" href="<?=base_url('css/jquery.dataTables.min.css')?>">  


  </head>

<body>
    <div class="container">
        <h1>Tabla de Platillos</h1>
        <!-- Button trigger modal -->
<button class="btn btn-dark" type="button" class="btn btn-primary mt-3 mp-3"  data-bs-toggle="modal" data-bs-target="#exampleModal">
  Agregar platos
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Platillo</h5>
        <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action = "<?=base_url('guardar_platos')?>" method="post">
      <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Agregar ID del Platillo</label>
  <input type="text" class="form-control" name="txt_codigo" placeholder="Codigo de Platillo">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Agregar Nombre</label>
  <input type="text" class="form-control" name="txt_nombre" placeholder="Nombre Plato">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Agregar ID del tamaño</label>
  <input type="text" class="form-control" name="txt_tamaño" placeholder="tamaño">
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

        <table class="table table-dark table-striped pt-3 pb-3" id="dataTable">
            <thead>
                <tr>
                    <th>ID Platillo</th>
                    <th>Nombre</th>
                    <th>Tamaño Plato</th>
                    <th>Acciones</th>

                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($lista_platos as $elemento_platos):


                ?>
                    <tr>
                        <td><?= $elemento_platos['id_platillo'] ?></td>
                        <td><?= $elemento_platos['nombre'] ?></td>
                        <td><?= $elemento_platos['id_tamaño'] ?></td>
                        <td>
                            <a href="<?=base_url('eliminarPlatos/'.$elemento_platos['id_platillo'])?>">Eliminar</a>
                            /
                           <a href="<?=base_url('actualizar_Platos/'.$elemento_platos['id_platillo'])?>">Actualizar</a>
                        </td>

                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
 <!--datatable-->
 <script src="<?= base_url('js/jquery-3.5.1.js') ?>"></script>
    
    <!-- datatables JS -->
    <script type="text/javascript" src="<?= base_url('datatables/datatables.min.js')?>"></script>
     
    
    <!-- para usar botones en datatables JS -->  
    <script src="<?= base_url('datatables/Buttons-1.5.6/js/dataTables.buttons.min.js')?>"></script>  
    <script src="<?= base_url('datatables/JSZip-2.5.0/jszip.min.js')?>"></script>    
    <script src="<?= base_url('datatables/pdfmake-0.1.36/pdfmake.min.js')?>"></script>    
    <script src="<?= base_url('datatables/pdfmake-0.1.36/vfs_fonts.js')?>"></script>
    <script src="<?= base_url('datatables/Buttons-1.5.6/js/buttons.html5.min.js')?>"></script>
    
   <!-- código JS propìo-->    
   <script type="text/javascript" src="<?= base_url('js/main.js')?>"></script>

  </body>

</html>