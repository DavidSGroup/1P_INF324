<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Font Roboto CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <style>body{font-family:"Roboto" !important;}</style>

    <title>Lista de usuarios</title>
  </head>
  <body>

    <div class="container">

        <h1 class="mt-5">Lista de usuarios</h1>
        <div class="text-right">
        <a href="<?php echo base_url(); ?>nuevo-usuario" class="btn btn-info"><ion-icon name="add"></ion-icon></a> 
        </div>
        <table class="table mt-4">
            <thead class="thead-light">
                <tr>
                <th scope="col">Carnet</th>
                <th scope="col">Nombre completo</th>
                <th scope="col">Fecha Nac</th>
                <th scope="col">Telefono</th>
                <th scope="col">Departamento</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php $number=0; foreach($data as $key => $value): ?>
                    <tr>
                        <th scope="row"><?php echo $value->carnet; ?></th>
                        <td><?php echo $value->nconpleto; ?></td>
                        <td><?php echo $value->fechanac; ?></td>
                        td><?php echo $value->telefono; ?></td>
                        <td><?php echo $value->departamento; ?></td>
                        <td>
                            <a href="<?php echo base_url(); ?>usuario/<?php echo $value->carnet; ?>" class="btn btn-primary"><ion-icon name="pencil"></ion-icon></a> 
                            <a href="<?php echo base_url(); ?>usuario/delete/<?php echo $value->carnet; ?>" class="btn btn-danger"><ion-icon name="remove"></ion-icon></a>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
    </div>

    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <script>
        
        <?php if($this->session->flashdata("success")): ?>

            Swal.fire({
                icon: 'success',
                title: 'Good...',
                text: '<?php echo $this->session->flashdata("success"); ?>',
            });
        <?php endif; ?>

    </script>
  </body>
</html>