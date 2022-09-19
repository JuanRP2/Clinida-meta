<?php namespace App\Controllers;


use App\Models\Usuarios;    

class Home extends BaseController
{
    public function index()
    {
        return view('login');
    }
    public function inicio(){
        return view ('inicio');
    }
    public function login(){
       return view ('inicio');
       
    }
    
    public function permisos(){
        return view ('permisos');
    }
    public function radicar(){
        return view ('radicar');
    }
    public function cuadroturno(){
        return view ('cuadroturno');
    }
}


