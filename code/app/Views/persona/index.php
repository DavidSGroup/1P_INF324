<?= $this-> extend('layouts/frontend.php')?>
<?= $this-> section('content')?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
             if(session()->getFlashdata('status')){
                echo "<h4>".session()->getFlashdata('status')."</h4>";
             }
            
            
            ?>
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Lista  De Personas</h4>
                    <a href="<?= base_url('persona-add') ?>" class="btn btn-primary float-end">Adicionar</a>
                </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Carnet</th>
                                    <th>Nombre</th>
                                    <th>Fecha Nac</th>
                                    <th>Telefono</th>
                                    <th>Departamento</th>
                                    <th>Accion</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($persona as $row): ?>
                                    <tr>
                                    <td> <?= $row['id'] ?> </td>
                                        <td> <?= $row['carnet'] ?> </td>
                                        <td> <?= $row['ncompleto'] ?> </td>
                                        <td> <?= $row['fechanac'] ?> </td>
                                        <td> <?= $row['telefono'] ?> </td>
                                        <td> <?= $row['departamento'] ?> </td>

                                        <td>
                                            <a href="<?=base_url('persona/edit/'.$row['id']) ?>" class="btn btn-success btn-sm">Editar</a>
                                           <a href="<?=base_url('persona/delete/'.$row['id'])?>" class="btn btn-danger btn-sm">Eliminar</a>

                                        </td>  
                                    </tr>
                                    <?php endforeach; ?>

                            </tbody>
                        </table>

                    </div>
            </div>
        </div>
    </div> 
</div>
<?= $this-> endSection()?>
