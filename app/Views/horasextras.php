<?= $this->extend('layout\principal') ?>
<?= $this->section('content') ?>
<script src="<?= base_url('js/moment.js') ?>"></script>

<div class="row">
    <div class="col-12">
        <h4>Horas Extras</h4>
    </div>
    <div class="col-12">
        <form action="<?= url_to('horas', 'cantidad') ?>" method="post" onsubmit="return validarDetalles()">
            <div class="row">

                <div class="col-md-4 col-sm-12">
                    <label>Nombres</label>
                    <input name="nombres" class="form-control form-control-sm" type="text" required />
                </div>
                <div class="col-md-4 col-sm-12">
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
                    <input name="cargo" class="form-control form-control-sm" type="text" required />
                </div>
                <div class="col-md-4 col-sm-12">
                    <label>Jefe De Area</label>
                    <input name="jefearea" class="form-control form-control-sm" type="text" required />
                </div>
                <div class="col-md-6 col-sm-12">
                    <label for="login">Entrada: </label>
                    <input name="fechaentrada" type="datetime-local" id="day1" class="form-control form-control-sm" value="<?php echo (date('Y-m-d', time()) . 'T' . date('H:i', time())); ?>" />
                </div>
                <div class="col-md-6 col-sm-12">
                    <label for="login">Salida: </label>
                    <div class="input-group input-group-sm mb-3">
                        <input name="fechasalida" type="datetime-local" id="day2" class="form-control" value="<?php echo (date('Y-m-d', time()) . 'T' . date('H:i', time())); ?>" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-sm btn-outline-secondary" type="button" id="button-addon2" value="agregar" onclick="agregarFilas()">Agregar</button>
                    </div>
                </div>
            </div>
            <button onclick="calculateHours()" type="submit" class="btn btn-outline-primary">
                <i class="bi bi-box-arrow-in-right" name="enviar"></i> Enviar</button>
            <button type="reset" class="btn btn-outline-danger"><i class="bi bi-trash"></i> Borrar</button>
            <input type="hidden" id="detalles" name="detalles" value="" />
        </form>
    </div>
    <div class="col-12">

    </div>
</div>
<div class="row mt-2">
    <div class="col-12">
        <table class="table table-bordered border-primary" id="extras">
            <thead>
                <th>Entrada</th>
                <th>Salida</th>
                <th>Eliminar</th>
            </thead>
            <tbody id="extras_body"></tbody>
        </table>
    </div>
</div>

<script type="text/javascript">
    var filas = 0;
    var rowIdx = 0;
    var detalles = new Array();

    function calculateHours() {
        var day1 = document.getElementById('day1').value;
        var day2 = document.getElementById('day2').value;
        const date1 = new Date(day1);
        const date2 = new Date(day2);
        const time = Math.abs(date2 - date1);
        const hours = Math.ceil(time / (1000 * 60 * 60));
        document.getElementById('output').innerHTML = hours + ' Horas Extras'
    }

    function validarDetalles() {
        if (detalles.length == 0) {
            alert("Tiene que agregar una fecha");
            return false;
        }
        return true;

    }

    function agregarFilas() {

        var day1 = document.getElementById('day1').value;
        var day2 = document.getElementById('day2').value;
        var fecha1 = moment(day1);
        var fecha2 = moment(day2);
        if (fecha2 < fecha1) {
            alert("La primera fecha no puede ser mayor que la segunda");
            return;
        }

        console.log(fecha2.diff(fecha1, 'hours'), ' horas de diferencia');
        var detalle = {
            'fechaentrada': day1,
            'fechasalida': day2,
            'cantidadhoras': fecha2.diff(fecha1, 'hours')
        }
        detalles.push(detalle)
        document.getElementById('detalles').value = JSON.stringify(detalles);


        $('#extras_body').append(`<tr id="R${++rowIdx}">
          <td class="row-index text-center">
                <p>${day1}</p>
           </td>
           <td class="row-index text-center">
                <p>${day2}</p>
           </td>
           <td class="text-center">
            <button class="btn btn-danger remove"
                type="button">Eliminar</button>
            </td>
           </tr>`);

        $('#extras_body').on('click', '.remove', function() {
            var child = $(this).closest('tr').nextAll();
            child.each(function() {
                var id = $(this).attr('id');
                var idx = $(this).children('.row-index').children('p');
                var dig = parseInt(id.substring(1));
                $(this).attr('id', `R${dig - 1}`);
            });
            $(this).closest('tr').remove();
            rowIdx--;
        });
    }
</script>




<?= $this->endSection() ?>