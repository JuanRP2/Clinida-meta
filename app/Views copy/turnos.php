<?= $this->extend('layout\principal') ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-12">
        <h1>Solicitar Cambio De Turno</h1>
    </div>
</div>

<div class="row">
    <div class="col-md-6 col-sm-12">
        <label>Nombres</label>
        <input class="form-control form-control-sm" type="text" />
    </div>
    <div class="col-md-6 col-sm-12">
        <label>Apellidos</label>
        <input class="form-control form-control-sm" type="text" />
    </div>
    <div class="col-md-6 col-sm-12">
        <label>Cedula Ciudadana</label>
        <input class="form-control form-control-sm" type="text" />
    </div>
    <div class="col-md-6 col-sm-12">
        <label>Area a la que pertenece</label>
        <select class="form-control form-control-sm mb-3">
            <?php foreach ($servicios as $item) : ?>
                <option value="<?=$item['id'];?>"> <?=$item['nombre']?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div class="col-md-4 col-sm-12">
        <label>Fecha a cambiar</label>
        <input class="form-control form-control-sm" type="date" />
    </div>
    <div class="col-md-4 col-sm-12">
        <label>Hora Inicial</label>
        <input class="form-control form-control-sm" type="time" />
    </div>
    <div class="col-md-4 col-sm-12">
        <label>Hora Final</label>
        <input class="form-control form-control-sm" type="time" />
    </div>

</div>


<?= $this->endSection() ?>