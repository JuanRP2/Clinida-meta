<?php namespace App\Controllers;
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
}

