<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Usuario extends Migration
{
    public function up()
    {
      $this->forge->addField([
        'id'=>[
            'type'=>'int',
            'auto_increment'=>true,
            'null'=>false
        ],
        'nome'=>[
            'type'=>'varchar',
            'constraint'=>60,
            'null'=>false
        ],
        'usuario'=>[
            'type'=>'varchar',
            'constraint'=>30,
            'null'=>false,
            'unique'=>true
        ], 
        'senha'=>[
            'type'=>'varchar',
            'constraint'=>20,
            'null'=>false
        ]
      ]);
      $this->forge->addField(['email'=>['type'=>'varchar','constraint'=>60]]);
      $this->forge->addPrimaryKey('id');
      $this->forge->createTable('usuario');
    }

    public function down()
    {
        $this->forge->dropTable('usuario');
    }
}
