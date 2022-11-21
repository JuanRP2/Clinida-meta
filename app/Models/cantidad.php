<?php namespace App\Models;
use CodeIgniter\Model;



class cantidad extends Model{
    
    protected $table      = 'detalle_solicitud_hex';
    protected $allowedFields = ['fechaentrada','fechasalida','cantidadhoras' ,'solicitud_hex_id'];


}