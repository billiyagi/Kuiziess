<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class LessonMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'    =>  [
                'type'          =>  'VARCHAR',
                'constraint'    =>  5,
                'null'          =>  FALSE
            ],
            'name'  =>  [
                'type'          =>  'VARCHAR',
                'constraint'    =>  256,
                'null'          =>  FALSE
            ],
            'user_id'   =>  [
                'type'          =>  'INT',
                'null'          =>  FALSE
            ]
        ])->addPrimaryKey('id')->addForeignKey('user_id', 'users', 'id')->createTable('lessons');
    }

    public function down()
    {
        $this->forge->dropTable('lessons');
    }
}
