<?= $this->extend('layout\principal') ?>
<?= $this->section('content') ?>
<?php 
header("Pragma: public");
header("Expires: 0");
$filename = "listarradicar.xls";
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
    <th>fecha inicial trabajo</th>
    <th>fecha final trabajo</th>
    <th>fecha inicial vacaciones </th>
    <th>fecha final vacaciones  </th>
    <th>numero documento </th>
    <th>servicio</th>
    <th>cargo </th>
    <th>jefe inmediato  </th>
    <th>cargo jefe </th>

</thead>
<tbody>
<?php foreach($listadoderadicar as $radicar){?> 
<tr>
        <?php echo "<td>".$radicar['id']."</td>";?>       
        <?php echo "<td>".$radicar['nombres']."</td>"?>
        <?php echo "<td>".$radicar['apellidos']."</td>"?>
        <?php echo "<td>".$radicar['fechainicialtrabajo']."</td>"?>
        <?php echo "<td>".$radicar['fechafinaltrabajo']."</td>"?>
        <?php echo "<td>".$radicar['fechainicialvacaciones']."</td>"?>
        <?php echo "<td>".$radicar['fechafinalvacaciones']."</td>"?>
        <?php echo "<td>".$radicar['numerodocumento']."</td>"?>
        <?php echo "<td>".$radicar['servicio_id']."</td>"?>
        <?php echo "<td>".$radicar['cargo']."</td>"?>
        <?php echo "<td>".$radicar['jefeinmediato']."</td>"?>
        <?php echo "<td>".$radicar['cargojefe']."</td>"?>   
</tr>
<?php }?>
</tbody>

</table>


<?= $this->endSection() ?>