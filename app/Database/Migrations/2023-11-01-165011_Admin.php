<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Admin extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'date_admin' => [
                'type'       => 'DATE'
            ],

        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('admin');


        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'date_admin' => [
                'type'       => 'DATE'
            ],

        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('kasir');
    }

    public function down()
    {
        $this->forge->dropTable('kasir');
    }
}
