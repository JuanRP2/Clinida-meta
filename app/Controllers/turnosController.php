<?php

namespace App\Controllers;

use App\Models\Cambioturno;
use App\Models\Servicios;


class turnosController extends BaseController
{
    public function index()
    {
        return view('login');
    }
    public function turnos()
    {
        $serviciomodel = new Servicios();
        $listaServicios = $serviciomodel->findAll();

        return view('turnos', ['servicios' => $listaServicios]);
    }

    public function registro()
    {

        $nombres = $this->request->getPost('nombres');
        $apellidos = $this->request->getPost('apellidos');
        $quienacepta = $this->request->getPost('quienacepta');
        $quienacepta2 = $this->request->getPost('quienacepta2');
        $jefearea = $this->request->getPost('jefearea');
        $observacion = $this->request->getPost('observacion');
        $fechasoli = $this->request->getPost('fechasoli');
        $servicio_id = $this->request->getPost('servicio_id');
        $jefeinmediato = $this->request->getPost('jefeinmediato');
        $fechacambio = $this->request->getPost('fechacambio');
        $horainicial = $this->request->getPost('horainicial');
        $horafinal = $this->request->getPost('horafinal');
        $fechareposicion = $this->request->getPost('fechareposicion');
        $horainicial2 = $this->request->getPost('horainicial2');
        $horafinal2 = $this->request->getPost('horafinal2');
        
        $data = [
            'nombres' => $nombres, 'apellidos' => $apellidos, 'quienacepta' => $quienacepta, 'quienacepta2' => $quienacepta2,
            'jefearea' => $jefearea, 'observacion' => $observacion, 'fechasoli' => $fechasoli, 'servicio_id' => $servicio_id,
            'jefeinmediato' => $jefeinmediato, 'fechacambio' => $fechacambio, 'horainicial' => $horainicial,
            'horafinal' => $horafinal, 'fechareposicion' => $fechareposicion, 'horainicial2' => $horainicial2,
            'horafinal2' => $horafinal2
        ];

        $cambioturnomodel = new Cambioturno();
        $cambioturnomodel->insert($data);
        
    
    }

    public function listar(){
        $cambioturnomodel = new Cambioturno();
        $cambioturnomodel->findall();
        $listadodeturnos=$cambioturnomodel->findAll();
        return view('listarturno',['listadodeturnos'=>$listadodeturnos]);
    }
}
