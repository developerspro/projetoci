<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Principal extends BaseController
{
    public function index()
    {
        $dados['link1'] ="Listar Usuarios";
        $dados['link2']='#';
        $dados['link3']='#';
      echo view("principal_menu",$dados);
    }

    public function sair(){

        echo "Até breve.";
    }

    public function listar(){
        $usuarioModel = model('App\Models\UsuarioModel');
        $resultado = $usuarioModel->findAll();
        $dados['link1'] ="Listar Usuarios";
        $dados['link2']='#';
        $dados['link3']='#';
        $dados['resultado'] = $resultado;
      echo view("principal_listar",$dados);

    }
}
