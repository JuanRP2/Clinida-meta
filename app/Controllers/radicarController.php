<?php namespace App\Controllers;

use App\Models\radicarva;
use App\Models\Servicios;
use App\Models\Usuarios;    

class radicarController extends BaseController
{
    public function index()
    {
        return view('login');
        
    }
    public function radicar(){
        $serviciomodel=new Servicios();
        $listaServicios = $serviciomodel->findAll();
        return view ('radicar',['servicios'=>$listaServicios]);
     }

     public function registro()
    {

        $nombres = $this->request->getPost('nombres');
        $apellidos = $this->request->getPost('apellidos');
        $fechainicialtrabajo = $this->request->getPost('fechainicialtrabajo');
        $fechafinaltrabajo = $this->request->getPost('fechafinaltrabajo');
        $fechainicialvacaciones = $this->request->getPost('fechainicialvacaciones');
        $fechafinalvacaciones = $this->request->getPost('fechafinalvacaciones');
        $numerodocumento = $this->request->getPost('numerodocumento');
        $servicio_id = $this->request->getPost('servicio_id');
        $cargo = $this->request->getPost('cargo');
        $jefeinmediato = $this->request->getPost('jefeinmediato');
        $cargojefe = $this->request->getPost('cargojefe');
        
        $data = [
            'nombres' => $nombres, 'apellidos' => $apellidos,'fechainicialtrabajo' => $fechainicialtrabajo,
            'fechafinaltrabajo' => $fechafinaltrabajo,'fechainicialvacaciones' => $fechainicialvacaciones,
            'fechafinalvacaciones' => $fechafinalvacaciones, 'numerodocumento' => $numerodocumento,
            'servicio_id' => $servicio_id,'cargo' => $cargo, 'jefeinmediato' => $jefeinmediato,
            'cargojefe' => $cargojefe
        ];

        $radicarvamodel = new radicarva();
        $radicarvamodel->insert($data);
    }
    public function listar(){
        $radicarvamodel = new radicarva();
        $radicarvamodel->findAll();
        $listadoderadicar=$radicarvamodel->findAll();

        return view('listarradicar',['listadoderadicar'=>$listadoderadicar]);
    }
}

echo("Datos Enviados con exito");