<?php namespace App\Models;
use CodeIgniter\Model;



class Cambioturno extends Model {

    protected $table      = 'solicitud_ct';
    protected $allowedFields = ['nombres','apellidos','quienacepta','quienacepta2','jefearea','observacion','fechasoli','servicio_id','jefeinmediato' , 'fechacambio' , 'horainicial' ,'horafinal' , 'fechareposicion' , 'horainicial2' ,'horafinal2' ];
}
