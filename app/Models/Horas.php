<?php namespace App\Models;
use CodeIgniter\Model;


class Horas extends Model {

    protected $table      = 'solicitud_hex';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombres', 'apellidos','numerodocumento','servicio_id','cargo','jefearea' ];
}


