<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css');  ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/alertify.min.css');  ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/jquery.datatables.min.css');  ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/datatables.min.css');  ?>">  

    

</head>

<body>
  <div class="app">
  <?= $this->include('layouts/inc/navbar.php') ?>
  <?= $this->rendersection('content') ?>
  </div>
    
    <script src="<?=base_url('assets/js/jquery-3.6.4.min.js')?>"></script>
    <script src="<?=base_url('assets/js/popper.min.js')?>"></script>
    <script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
    
    <!---datatables-->
    <script src="<?=base_url('assets/js/jquery.datatables.min.js')?>"></script>
    <script src="<?=base_url('assets/js/dataTables.bootstrap5.min.js')?>"></script>
    
    <script>
        $(document).ready(function() {
            $('#mydatatable').DataTable();
        });

    </script>

</body>
</html>