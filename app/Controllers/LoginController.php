<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\Usuarios;

class LoginController extends BaseController
{
    public function index()
    {
        helper(['form']);
        echo view('login');
    } 
 
    public function auth()
    {
        $session = session();
        $UsuariosModel = new Usuarios();
        $Usuario = $this->request->getVar('Usuario');
        $password = $this->request->getVar('Password');
        $data = $UsuariosModel->where('Usuario', $Usuario)->first();
        if($data){
            $Password = $data['Password'];
            $verify_Password = password_verify($Password, $Password);
            if($verify_Password){
                $ses_data = [
                    'id'       => $data['id'],
                    'Usuario'     => $data['Usuario'],
                    'Password'    => $data['Password'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/login');
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('msg', 'Usuario not Found');
            return redirect()->to('/login');
        }
    }
 
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }

    
} 