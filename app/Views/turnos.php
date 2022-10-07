<?= $this->extend('layout\principal') ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-12">
        <center><h1>Solicitar Cambio De Turnos</h1></center>
        <hr size="1px" color="black">
    </div>
</div>
<form action="<?= url_to('cambioturno') ?>" method="post">
<div class="row">
    
    <div class="col-md-6 col-sm-12">
        <label>Nombres</label>
        <input name="nombres" class="form-control form-control-sm" type="text" required />
    </div>
    <div class="col-md-6 col-sm-12">
        <label>Apellidos</label>
        <input name="apellidos" class="form-control form-control-sm" type="text" required />
    </div>
    <div class="col-md-6 col-sm-12">
        <label>Nombres De Quien Acepta</label>
        <input name="quienacepta" class="form-control form-control-sm" type="text" required />
    </div>
    <div class="col-md-6 col-sm-12">
        <label>Apellidos De Quien Acepta</label>
        <input name="quienacepta2" class="form-control form-control-sm" type="text" required />
    </div>
    <div class="col-md-6 col-sm-12">
        <label>Observacion</label>
        <input name="observacion" class="form-control form-control-sm" type="text" required />
    </div>
    <div class="col-md-6 col-sm-12">
        <label>Jefe De Area</label>
        <input name="jefearea" class="form-control form-control-sm" type="text" required />
    </div>
    <div class="col-md-4 col-sm-12">
        <label>Fecha De Solicitud</label>
        <input name="fechasoli" class="form-control form-control-sm" type="date" required />
    </div>
    <div class="col-md-4 col-sm-12">
        <label>Servicio</label>
        <select name="servicio_id" class="form-control form-control-sm mb-3">
            <?php foreach ($servicios as $item) : ?>
                <option value="<?= $item['id']; ?>"> <?= $item['nombre'] ?></option>
            <?php endforeach ?>
        </select>
    </div>
        <div class="col-md-4 col-sm-12">
            <label>Jefe Inmediato</label>
            <input name="jefeinmediato" class="form-control form-control-sm" type="text" required />
        </div>
        <div class="col-md-4 col-sm-12">
        <label>Fecha De cambio Del Turno</label>
        <input name="fechacambio" class="form-control form-control-sm" type="date" required />
    </div>
    <div class="col-md-4 col-sm-12">
        <label>Hora Inicial</label>
        <input name="horainicial" class="form-control form-control-sm" type="time" required />
    </div>
    <div class="col-md-4 col-sm-12">
        <label>Hora Final</label>
        <input name="horafinal" class="form-control form-control-sm" type="time" required />
    </div>
    <div class="col-md-4 col-sm-12">
        <label>Fecha De Reposicion Turno</label>
        <input name="fechareposicion" class="form-control form-control-sm" type="date" required />
    </div>
    <div class="col-md-4 col-sm-12">
        <label>Hora Inicial</label>
        <input name="horainicial2" class="form-control form-control-sm" type="time" required />
    </div>
    <div class="col-md-4 col-sm-12">
        <label>Hora Final</label>
        <input name="horafinal2" class="form-control form-control-sm" type="time" required />
    </div>
    
    </div>
    <br>
    <br>
<button type="submit" class="btn btn-outline-primary" ><i class="bi bi-box-arrow-in-right"></i> Enviar</button>
<button type="reset" class="btn btn-outline-danger"><i class="bi bi-trash"></i> Borrar</button>

</form>

     


        <?= $this->endSection() ?>