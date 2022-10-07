<?php namespace App\Controllers;


use App\Models\Usuarios;    

class Home extends BaseController
{
    public function index(){
        return view('login');
    }
    public function login(){
       return view ('inicio');    
    }
    public function inicio(){
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
    public function horasextras(){
        return view ('horasextras');
    }

    public function  prueba(){
        $nombres = $this->request->getPost('nombres');
        $apellidos = $this->request->getPost('apellidos');
        $quienacepta = $this->request->getPost('quienacepta');
        $quienacepta2 = $this->request->getPost('quienacepta2');
        $jefearea = $this->request->getPost('jefearea');
        $observacion = $this->request->getPost('observacion');
        $fechasoli = $this->request->getPost('fechasoli');
        $servicio = $this->request->getPost('servicio');
        $jefeinmediato = $this->request->getPost('jefeinmediato');
        $fechacambio = $this->request->getPost('fechacambio');
        $horainicial = $this->request->getPost('horainicial');
        $horafinal = $this->request->getPost('horafinal');
        $fechareposicion = $this->request->getPost('fechareposicion');
        $horainicial2 = $this->request->getPost('horainicial2');
        $horafinal2 = $this->request->getPost('horafinal2');
 
    return view('prueba',['nombres'=>$nombres,'apellidos'=>$apellidos,'quienacepta'=>$quienacepta,'quienacepta2'=>$quienacepta2,'jefearea'=>$jefearea,'observacion'=>$observacion,'fechasoli'=>$fechasoli,'servicio'=>$servicio,'jefeinmediato'=>$jefeinmediato,'fechacambio'=>$fechacambio,'horainicial'=>$horainicial,'horafinal'=>$horafinal,'fechareposicion'=>$fechareposicion,'horainicial2'=>$horainicial2,'horafinal2'=>$horafinal2]);
}
}

















