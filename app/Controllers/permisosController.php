<?php namespace App\Controllers;
use App\Models\Servicios;
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
     
}


    