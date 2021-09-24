<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Principal extends BaseController
{
    public function index()
    {
     echo view('login/cabecalho');
     echo view('principal/menu');
     echo view('principal/conteudo');
     echo view('login/rodape');
    }
}
