<?php

namespace App\Controllers;

use App\Models\cantidad;
use App\Models\Horas;
use App\Models\Usuarios;
use App\Models\Servicios;


class horasextrasController extends BaseController
{
    public function index()
    {
        return view('login');
    }
    public function horasextras()
    {
        $serviciomodel = new Servicios();
        $listaServicios = $serviciomodel->findAll();
        return view('horasextras', ['servicios' => $listaServicios]);
    }

    public function registro()
    {

        $nombres = $this->request->getPost('nombres');
        $apellidos = $this->request->getPost('apellidos');
        $numerodocumento = $this->request->getPost('numerodocumento');
        $servicio_id = $this->request->getPost('servicio_id');
        $cargo = $this->request->getPost('cargo');
        $jefearea = $this->request->getPost('jefearea');

        $data = [
            'nombres' => $nombres, 'apellidos' => $apellidos, 'numerodocumento' => $numerodocumento,
            'servicio_id' => $servicio_id, 'cargo' => $cargo, 'jefearea' =>
            $jefearea,

        ];

        $horasmodel = new Horas();
        $horasmodel->save($data);
        $id = $horasmodel->getInsertID();

        $cantidadmodel = new cantidad();
        $detallesText = $this->request->getPost('detalles');
        $detalles = json_decode($detallesText);
        foreach ($detalles as $detalle) {
            $detalles = [
                'fechaentrada' => $detalle->fechaentrada, 'fechasalida' => $detalle->fechasalida,
                'cantidadhoras' => $detalle->cantidadhoras, 'solicitud_hex_id' => $id
            ];
            $cantidadmodel->insert($detalles);
        }
    }
    public function listar()
    {
        $db = db_connect();

        $query = $db->query('SELECT * FROM solicitud_hex c inner join detalle_solicitud_hex d ON c.id = d.solicitud_hex_id;');
        $registrarhoras = $query->getResult('array');
        return view('registrarhoras', ['registrarhoras' => $registrarhoras]);
    }
}
?>

