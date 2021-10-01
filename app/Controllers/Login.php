<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
    protected $texto;
    public function index()
    {
       echo view('login_form');
    }

    public function logar(){
     if($this->request->getMethod()=='post'){
        $post= $this->request->getPost();
        $usuarioModel = model('App\Models\UsuarioModel');
        $usuarioModel->where('usuario',$post['usuario']);
        $usuarioModel->where('senha',$post['senha']);
        $resultado = $usuarioModel->find();
        if(empty($resultado)){
            return redirect()->to('/Login/loginIncorreto');
        } else {
            return redirect()->to('/Principal/index');
        }

     } else { 
         echo "post vazio";
     }

    }

    public function loginIncorreto(){
      
        $dados['msg']="Usuario e senha inválidos";
        echo view('login_form',$dados);
    }
    
  
}
