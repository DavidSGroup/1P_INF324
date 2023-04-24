<?= $this->extend('layouts/frontend.php') ?>
<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Edicion De Persona</h4>
                    <a href="<?= base_url('persona') ?>" class="btn btn-danger float-end">Atras</a>
                </div>

                <div class="card-body">
                    <form action="<?= base_url('persona/update/'.$persona['id']) ?>" method="post">
                    <input type="hidden" name="_method" value="PUT" />
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">carnet</label>
                                <input type="text" class="form-control" name="carnet" placeholder="Carnet" value="<?= $persona['carnet'] ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nombre Completo</label>
                                <input type="text" class="form-control" name="ncompleto" placeholder="Nombre Completo" value="<?= $persona['ncompleto'] ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Fecha de Nacimiento</label>
                                <input type="date" class="form-control" name="fechanac" placeholder="Fecha Nacimiento" value="<?= $persona['fechanac'] ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Telefono</label>
                                <input type="text" class="form-control" name="telefono" placeholder="telefono" value="<?= $persona['telefono'] ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Departamento</label>
                                <input type="text" class="form-control" name="departamento" placeholder="departamento" value="<?= $persona['departamento'] ?>">
                            </div>
                        </div>
                      

                        <div class="col-md-6">
                            <div class="form-group">

                                <button class="btn btn-primary px-4" type="submit">Actualizar Registro </button>
                            </div>
                        </div>

                    </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>