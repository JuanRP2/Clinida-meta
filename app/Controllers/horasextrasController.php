<?php namespace App\Controllers;

use App\Models\Usuarios;    
use App\Models\Servicios;


class horasextrasController extends BaseController
{
    public function index()
    {
        return view('login');
        
    }
    public function horasextras(){
        $serviciomodel = new Servicios();
        $listaServicios = $serviciomodel->findAll();

        return view ('horasextras', ['servicios' => $listaServicios]);
     }
    
    

}

