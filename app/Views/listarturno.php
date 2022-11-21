<?= $this->extend('layout\principal') ?>
<?= $this->section('content') ?>

<?php 
header("Pragma: public");
header("Expires: 0");
$filename = "listarturno.xls";
header("Content-type: application/x-msdownload");
header("Content-Disposition: attachment; filename=$filename");
header("Pragma: no-cache");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");

?>
<table class="table table-bordered border-primary">
<thead>
    <th>ID</th>
    <th>Nombres</th>
    <th>Apellidos</th>
    <th>Nombre De Quien Acepta</th>
    <th>Apellido De Quien Acepta</th>
    <th> observacion</th>
    <th>Jefe De Area</th>
    <th>Fecha Solicitada</th>
    <th>Servicio</th>
    <th>Jefe Inmediato</th>
    <th>Fecha De Cambio</th>
    <th>Hora Inicial</th>
    <th>Hora Final</th>
    <th>Fecha De Reposicion</th>
    <th>Hora Inicial</th>
    <th>Hora Final</th>
    <th>Turnos</th>
</thead>
<tbody>
<?php foreach($listadodeturnos as $turno){?> 
<tr>
        <?php echo "<td>".$turno['id']."</td>"?>
       
        <?php echo "<td>".$turno['nombres']."</td>"?>
        <?php echo "<td>".$turno['apellidos']."</td>"?>
        <?php echo "<td>".$turno['quienacepta']."</td>"?>
        <?php echo "<td>".$turno['quienacepta2']."</td>"?>
        <?php echo "<td>".$turno['observacion']."</td>"?>
        <?php echo "<td>".$turno['jefearea']."</td>"?>
        <?php echo "<td>".$turno['fechasoli']."</td>"?>
        <?php echo "<td>".$turno['servicio_id']."</td>"?>
        <?php echo "<td>".$turno['jefeinmediato']."</td>"?>
        <?php echo "<td>".$turno['fechacambio']."</td>"?>
        <?php echo "<td>".$turno['horainicial']."</td>"?>
        <?php echo "<td>".$turno['horafinal']."</td>"?>
        <?php echo "<td>".$turno['fechareposicion']."</td>"?>
        <?php echo "<td>".$turno['horainicial2']."</td>"?>
        <?php echo "<td>".$turno['horafinal2']."</td>"?>
        <?php echo "<td>".$turno['turnos_id']."</td>"?>

   
</tr>
<?php }?>
</tbody>

</table>


<?= $this->endSection() ?>