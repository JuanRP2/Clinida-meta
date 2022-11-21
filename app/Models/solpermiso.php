<?php namespace App\Models;
use CodeIgniter\Model;



class solpermiso extends Model {

    protected $table      = 'solicitarpermiso';
    protected $allowedFields = ['fechasoli','nombres','apellidos','numerodocumento','servicio_id','cargo','fechainicio','hora','fechafinal','hora2' , 'motivo' , 'cual'];
}
