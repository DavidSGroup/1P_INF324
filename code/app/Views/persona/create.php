<?= $this->extend('layouts/frontend.php') ?>
<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Adicion De Persona</h4>
                    <a href="<?= base_url('persona') ?>" class="btn btn-danger float-end">Atras</a>
                </div>

                <div class="card-body">
                    <form action="<?= base_url('persona-store') ?>" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">carnet</label>
                                <input type="text" class="form-control" name="carnet" placeholder="Carnet">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nombre Completo</label>
                                <input type="text" class="form-control" name="ncompleto" placeholder="Nombre Completo">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Fecha de Nacimiento</label>
                                <input type="date" class="form-control" name="fechanac" placeholder="Fecha Nacimientoc">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Telefono</label>
                                <input type="text" class="form-control" name="telefono" placeholder="telefono">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Departamento</label>
                                <input type="text" class="form-control" name="departamento" placeholder="departamento">
                            </div>
                        </div>
                      

                        <div class="col-md-6">
                            <div class="form-group">

                                <button class="btn btn-primary px-4" type="submit">Guardar </button>
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