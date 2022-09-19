<?php namespace App\Controllers;
use App\Models\Servicios;
use App\Models\Usuarios;    

class turnosController extends BaseController
{
    public function index()
    {
        return view('login');
        
    }
    public function turnos(){
        $serviciomodel=new Servicios();
         $listaServicios = $serviciomodel->findAll();
         return view ('turnos',['servicios'=>$listaServicios]);
     }
}