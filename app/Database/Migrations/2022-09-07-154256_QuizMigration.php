<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class QuizMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'    =>  [
                'type'              =>  'INT',
                'auto_increment'    =>  TRUE
            ],
            'question'  =>  [
                'type'              =>  'TEXT',
                'null'              =>  FALSE
            ],
            'answer'    =>  [
                'type'              =>  'TEXT',
                'null'              =>  FALSE
            ],
            'lesson_id' =>  [
                'type'          =>  'VARCHAR',
                'constraint'    =>  5,
                'null'          =>  FALSE
            ],
            'is_essay'  =>  [
                'type'              =>  'TINYINT',
                'default'           =>  0
            ]
        ])->addPrimaryKey('id')
        ->addForeignKey('lesson_id', 'lessons', 'id')
        ->createTable('quizzes');
    }

    public function down()
    {
        $this->forge->dropTable('quizzes');
    }
}
