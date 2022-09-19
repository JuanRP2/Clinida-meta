<?php namespace App\Controllers;

use App\Models\Usuarios;    

class cuadroturnoController extends BaseController
{
    public function index()
    {
        return view('login');
        
    }
    public function cuadroturno(){
        return view ('cuadroturno');
     }
}


    