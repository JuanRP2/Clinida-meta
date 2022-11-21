<?= $this->extend('layout\principal') ?>
<?= $this->section('content') ?>
<?php 
header("Pragma: public");
header("Expires: 0");
$filename = "listarpermiso.xls";
header("Content-type: application/x-msdownload");
header("Content-Disposition: attachment; filename=$filename");
header("Pragma: no-cache");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");

?>
<table class="table table-bordered border-primary">
<thead>
    <th>ID</th>
    <th>Fecha De Solicitud</th>
    <th>Nombres</th>
    <th>Apellidos  </th>
    <th> N° Documento Identificacio </th>
    <th> Servicio  </th>
    <th>  Cargo  </th>
    <th> Fecha De Inicio </th>
    <th>Hora</th>
    <th>Fecha Final </th>
    <th> Hora 2  </th>
    <th>Motivo  </th>
    <th>Cual?</th>
</thead>
<tbody>
<?php foreach($listadodepermiso as $solicitarpermiso){?> 
<tr>
        <?php echo "<td>".$solicitarpermiso['id']."</td>";?>       
        <?php echo "<td>".$solicitarpermiso['fechasoli']."</td>"?>
        <?php echo "<td>".$solicitarpermiso['nombres']."</td>"?>
        <?php echo "<td>".$solicitarpermiso['apellidos']."</td>"?>
        <?php echo "<td>".$solicitarpermiso['numerodocumento']."</td>"?>
        <?php echo "<td>".$solicitarpermiso['servicio_id']."</td>"?>
        <?php echo "<td>".$solicitarpermiso['cargo']."</td>"?>
        <?php echo "<td>".$solicitarpermiso['fechainicio']."</td>"?>
        <?php echo "<td>".$solicitarpermiso['hora']."</td>"?>
        <?php echo "<td>".$solicitarpermiso['fechafinal']."</td>"?>
        <?php echo "<td>".$solicitarpermiso['hora2']."</td>"?>
        <?php echo "<td>".$solicitarpermiso['motivo']."</td>"?> 
        <?php echo "<td>".$solicitarpermiso['cual']."</td>"?>  
</tr>
<?php }?>
</tbody>

</table>


<?= $this->endSection() ?>