<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'    =>  [
                'type'              =>  'INT',
                'auto_increment'    =>  TRUE
            ],
            'access_code'   =>  [
                'type'              =>  'VARCHAR',
                'constraint'        =>  10,
                'null'              =>  FALSE
            ],
            'first_name'    =>  [
                'type'              =>  'VARCHAR',
                'constraint'        =>  128,
                'null'              =>  FALSE
            ],
            'last_name'     =>  [
                'type'              =>  'VARCHAR',
                'constraint'        =>  128,
                'null'              =>  FALSE
            ],
            'email'         =>  [
                'type'              =>  'VARCHAR',
                'constraint'        =>  128,
                'null'              =>  FALSE,
            ],
            'password'      =>  [
                'type'              =>  'VARCHAR',
                'constraint'        =>  256,
                'null'              =>  FALSE
            ],
            'last_login'    =>  [
                'type'              =>  'TIMESTAMP',
                'null'              => TRUE,
                'default'           =>  NULL
            ],
            'role'          =>  [
                'type'              =>  'VARCHAR',
                'constraint'        =>  128,
                'null'              =>  FALSE
            ],
            'updated_at'    =>  [
                'type'              =>  'TIMESTAMP',
                'null'              =>  TRUE
            ],
            'created_at'    =>  [
                'type'              =>  'TIMESTAMP',
                'null'              =>  TRUE
            ],
        ])->addPrimaryKey('id')->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
