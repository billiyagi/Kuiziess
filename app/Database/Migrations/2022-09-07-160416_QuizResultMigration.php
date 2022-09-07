<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class QuizResultMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'    =>  [
                'type'              =>  'INT',
                'auto_increment'    =>  TRUE,
                'null'              =>  FALSE
            ],
            'lesson_id'     =>  [
                'type'          =>  'VARCHAR',
                'constraint'    =>  5,
                'null'          =>  FALSE
            ],
            'user_id'       =>  [
                'type'          =>  'INT',
                'null'          =>  FALSE
            ],
            'score'         =>  [
                'type'          =>  'DOUBLE',
                'null'          =>  FALSE
            ]
        ])->addPrimaryKey('id')
        ->addForeignKey('lesson_id', 'lessons', 'id')
        ->addForeignKey('user_id', 'users', 'id')
        ->createTable('quiz_results');
    }

    public function down()
    {
        $this->forge->dropTable('quiz_results');
    }
}
