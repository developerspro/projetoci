<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Usuarioseed extends Seeder
{
    public function run()
    {
      $model = model('UsuarioModel');
      for($i=0;$i<1;$i++){
        $model->insert([
            'nome'=>"administrador{$i}",
            'usuario'=>"admin{$i}",
            'senha'=>'admin',
            'email'=>'jeferson@etecjk.com'
        ]);
      }
     
    }
}
