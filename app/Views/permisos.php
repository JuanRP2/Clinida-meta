<?= $this->extend('layout\principal') ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-12">
        <h1>Solicitar Permisos</h1>
    </div>
</div>
<form>
<div class="row">
    <div class="col-md-4 col-sm-12">
        <label>Fecha De Solicitud</label>
        <input class="form-control form-control-sm" type="date" />
    </div>
    <div class="col-md-4 col-sm-12">
        <label>Nombres</label>
        <input class="form-control form-control-sm" type="text" />
    </div>
    <div class="col-md-4 col-sm-12">
        <label>Apellidos</label>
        <input class="form-control form-control-sm" type="text" />
    </div>
    <div class="col-md-4 col-sm-12">
        <label>N° Documento Identificacion</label>
        <input class="form-control form-control-sm" type="number" />
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
        <label>Cargo</label>
        <input class="form-control form-control-sm" type="text" />
    </div>
    <div class="col-md-6 col-sm-12">
        <label>Fecha De Inicio</label>
        <input class="form-control form-control-sm" type="date" />
    </div>
    <div class="col-md-6 col-sm-12">
        <label>Hora</label>
        <input class="form-control form-control-sm" type="time" />
    </div>
    <div class="col-md-6 col-sm-12">
        <label>Fecha Final</label>
        <input class="form-control form-control-sm" type="date" />
    </div>
    <div class="col-md-6 col-sm-12">
        <label>Hora</label>
        <input class="form-control form-control-sm" type="time" />
    </div>
    <div class="col-md-6 col-sm-12">
        <label>Motivo</label>
        <input class="form-control form-control-sm" type="text" />
    </div>
    <div class="col-md-6 col-sm-12">
        <label>Cual?</label>
        <input class="form-control form-control-sm" type="text" />
    </div>
    <div class="col-md-12 col-sm-12">
  <label for="formFileMultiple" class="form-label">Documentos Soportes Presentados</label>
  <input class="form-control" type="file" id="formFileMultiple" multiple>
</div>
</div>
<br>
<br>
<button type="button" class="btn btn-primary">Enviar</button>
<button type="button" class="btn btn-danger"><i class="bi bi-trash"></i>Borrar</button>

</form>



    

<?= $this->endSection() ?>