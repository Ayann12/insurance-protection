<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsers extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'user_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'password' => [
                'type' => 'varchar',
                'constraint' => '255',
            ],
            'status' => [
                'type' => 'varchar',
                'constraint' => '15',
            ],
            'role' => [
                'type' => 'varchar',
                'constraint' => '25',
            ],
            'foto' => [
                'type' => 'varchar',
                'constraint' => '25',
            ],
        ]);
        $this->forge->addKey('user_id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
