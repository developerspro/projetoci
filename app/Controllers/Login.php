<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
       echo view('login/cabecalho');
       echo view('login/formulario');
       echo view('login/rodape');
    }

    public function logar(){
     if($this->request->getMethod()=='post'){
        $post= $this->request->getPost();
        $usuarioModel = model('App\Models\UsuarioModel');
        $usuarioModel->where('usuario',$post['usuario']);
        $usuarioModel->where('senha',$post['senha']);
        $resultado = $usuarioModel->find();
        if(empty($resultado)){
            return redirect()->to('Login/index');
        } else {
            return redirect()->to('Principal/index');
        }

     } else { 
         echo "post vazio";
     }

    }
}
