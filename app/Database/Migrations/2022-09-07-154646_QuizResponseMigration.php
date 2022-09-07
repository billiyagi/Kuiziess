<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class QuizResponseMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'    =>  [
                'type'              =>  'INT',
                'auto_increment'    =>  TRUE,
                'null'              =>  FALSE
            ],
            'answer'    =>  [
                'type'              =>  'TEXT',
                'null'              =>  FALSE          
            ],
            'quiz_id'   =>  [
                'type'              =>  'INT',
                'null'              =>  FALSE
            ],
            'user_id'       =>  [
                'type'              =>  'INT',
                'null'              =>  FALSE
            ]
        ])->addPrimaryKey('id')->addForeignKey('quiz_id', 'quizzes', 'id')->addForeignKey('user_id', 'users', 'id')->createTable('quiz_responses');
    }

    public function down()
    {
        $this->forge->dropTable('quiz_responses');
    }
}
