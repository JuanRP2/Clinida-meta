<?= $this->extend('layout\principal') ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-12">
        <h1>Solicitar Cambio De Turnos</h1>
    </div>
</div>
<form>
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
        <label>Nombres De Quien Acepta</label>
        <input class="form-control form-control-sm" type="text" />
    </div>
    <div class="col-md-6 col-sm-12">
        <label>Apellidos De Quien Acepta</label>
        <input class="form-control form-control-sm" type="text" />
    </div>
    <div class="col-md-6 col-sm-12">
        <label>Observacion</label>
        <input class="form-control form-control-sm" type="text" />
    </div>
    <div class="col-md-6 col-sm-12">
        <label>Jefe De Area</label>
        <input class="form-control form-control-sm" type="text" />
    </div>
    <div class="col-md-4 col-sm-12">
        <label>Fecha De Solicitud</label>
        <input class="form-control form-control-sm" type="date" />
    </div>
    <div class="col-md-4 col-sm-12">
        <label>Servicio</label>
        <select class="form-control form-control-sm mb-3">
            <?php foreach ($servicios as $item) : ?>
                <option value="<?= $item['id']; ?>"> <?= $item['nombre'] ?></option>
            <?php endforeach ?>
        </select>
    </div>
        <div class="col-md-4 col-sm-12">
            <label>Jefe Inmediato</label>
            <input class="form-control form-control-sm" type="text" />
        </div>
        <div class="col-md-4 col-sm-12">
        <label>Fecha De cambio Del Turno</label>
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
    <div class="col-md-4 col-sm-12">
        <label>Fecha De Reposicion Turno</label>
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
    <br>
    <br>
<button type="button" class="btn btn-primary">Enviar</button>
<button type="button" class="btn btn-danger"><i class="bi bi-trash"></i>Borrar</button>

</form>

     


        <?= $this->endSection() ?>