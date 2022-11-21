<?php namespace App\Controllers;
use App\Models\Servicios;
use App\Models\solpermiso;
use App\Models\Usuarios;    

class permisosController extends BaseController
{
    public function index()
    {
        return view('login');
        
    }
    public function permisos(){
        $serviciomodel=new Servicios();
         $listaServicios = $serviciomodel->findAll();
         return view ('permisos',['servicios'=>$listaServicios]);
        
     }
     public function registro()
    {
        $fechasoli=$this->request->getpost('fechasoli');
        $nombres = $this->request->getPost('nombres');
        $apellidos = $this->request->getPost('apellidos');
        $numerodocumento = $this->request->getPost('numerodocumento');
        $servicio_id = $this->request->getPost('servicio_id');
        $cargo = $this->request->getPost('cargo');
        $fechainicio = $this->request->getPost('fechainicio');
        $hora = $this->request->getPost('hora');
        $fechafinal = $this->request->getPost('fechafinal');
        $hora2 = $this->request->getPost('hora2');
        $motivo = $this->request->getPost('motivo');
        $cual = $this->request->getPost('cual');
        
        $data = [
            'fechasoli' => $fechasoli, 'nombres' => $nombres, 'apellidos' => $apellidos,'numerodocumento' => $numerodocumento,
            'servicio_id' => $servicio_id,'cargo' => $cargo,'fechainicio' => $fechainicio,'hora' => $hora, 
            'fechafinal' => $fechafinal,'hora2' => $hora2,'motivo' => $motivo,'cual' => $cual
        ];

        $solpermisomodel = new solpermiso();
        $solpermisomodel->insert($data);
    }
    public function listar(){
        $solpermisomodel = new solpermiso();
        $solpermisomodel->findAll();
        $listadodepermiso=$solpermisomodel->findAll();

        return view('listarpermiso',['listadodepermiso'=>$listadodepermiso]);
    }
}

echo("Datos Enviados con exito");


    