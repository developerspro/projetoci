<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Filme extends Migration
{
    public function up()
    {
        $this->forge->addField(['id'=>['type'=>'int','auto_increment'=>true]]);
        $this->forge->addField(['titulo'=>['type'=>'varchar','constraint'=>60, 'null'=>false]]);
        $this->forge->addField(['categoria'=>['type'=>'varchar','constraint'=>60, 'null'=>false]]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('tipofilme');
    }

    public function down()
    {
       $this->forge->dropTable('tipofilme');
    }
}
