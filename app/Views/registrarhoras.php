<?= $this->extend('layout\principal') ?>
<?= $this->section('content') ?>
<?php 
header("Pragma: public");
header("Expires: 0");
$filename = "RegistroDeHoras.xls";
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
    <th>Cargo</th>
    <th>Jefe De Area</th>   
    <th>Numero Documento</th>
    <th>Servicio</th>
    <th>Fecha De Entrada</th>
    <th>Fecha De Salida</th>
    <th>Cantidad Horas</th>
    <th>ID Usuario Horas</th>
</thead>
<tbody>
<?php foreach($registrarhoras as $hora){?> 
    
<tr>
        <?php echo "<td>".$hora['id']."</td>"?>
        <?php echo "<td>".$hora['nombres']."</td>"?>
        <?php echo "<td>".$hora['apellidos']."</td>"?>
        <?php echo "<td>".$hora['cargo']."</td>"?>
        <?php echo "<td>".$hora['jefearea']."</td>"?>
        <?php echo "<td>".$hora['numerodocumento']."</td>"?>
        <?php echo "<td>".$hora['servicio_id']."</td>"?>
        <?php echo "<td>".$hora['fechaentrada']."</td>"?>
        <?php echo "<td>".$hora['fechasalida']."</td>"?>
        <?php echo "<td>".$hora['cantidadhoras']."</td>"?>
        <?php echo "<td>".$hora['solicitud_hex_id']."</td>"?>
      

   
</tr>
<?php }?>
</tbody>

</table>


<?= $this->endSection() ?>



