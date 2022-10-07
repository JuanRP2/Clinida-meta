<?= $this->extend('layout\principal') ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-12">
        <center><h1>Radicar Vacaciones</h1></center>
        <hr size="1px" color="black">
    </div>
</div>
<form>
<div class="row">
    <div class="col-md-6 col-sm-12">
        <label>Fecha Inical De Trabajar</label>
        <input name="fechainicialtrabajo" class="form-control form-control-sm" type="date" required />
    </div>
    <div class="col-md-6 col-sm-12">
        <label>Fecha Final De Trabajar</label>
        <input name="fechafinaltrabajo" class="form-control form-control-sm" type="date" required />
    </div>
    <div class="col-md-6 col-sm-12">
        <label>Fecha Inical De Vacaciones</label>
        <input name="fechainicialvacaciones" class="form-control form-control-sm" type="date" required />
    </div>
    <div class="col-md-6 col-sm-12">
        <label>Fecha Final De Vacaciones</label>
        <input name="fechafinalvacaciones" class="form-control form-control-sm" type="date" required />
    </div>
    <div class="col-md-6 col-sm-12">
        <label>Nombres</label>
        <input name="nombres" class="form-control form-control-sm" type="text" required />
    </div>
    <div class="col-md-6 col-sm-12">
        <label>Apellidos</label>
        <input name="apellidos" class="form-control form-control-sm" type="text" required />
    </div>
    <div class="col-md-4 col-sm-12">
        <label>N° Documento Identificacion</label>
        <input name="numerodocumento" class="form-control form-control-sm" type="number" required />
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
        <label>Cargo</label>
        <input name="cargo"class="form-control form-control-sm" type="text" required />
    </div>
    <div class="col-md-4 col-sm-12">
            <label>Jefe Inmediato</label>
            <input name="jefeinmediato" class="form-control form-control-sm" type="text" required />
    </div>
    <div class="col-md-4 col-sm-12">
        <label>Cargo Jefe</label>
        <input name="cargojefe" class="form-control form-control-sm" type="text" required />
    </div>
    
    </div>
    
    <br>
    <br>
<button type="submit" class="btn btn-outline-primary"><i class="bi bi-box-arrow-in-right"></i> Enviar</button>
<button type="reset" class="btn btn-outline-danger"><i class="bi bi-trash"></i> Borrar</button>

</form>
<?= $this->endSection() ?>