<?php namespace App\Models;
use CodeIgniter\Model;



class radicarva extends Model {

    protected $table      = 'radicar';
    protected $allowedFields = ['nombres','apellidos','fechainicialtrabajo','fechafinaltrabajo','fechainicialvacaciones','fechafinalvacaciones','numerodocumento','servicio_id','cargo' , 'jefeinmediato' , 'cargojefe'];
}
