<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePesananTable extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'id_pesanan' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'id_jasa' => [
                'type' => 'INT',
                'constraint' => 5,
            ],
            'alamat' => [
                'type' => 'TEXT',
            ],
            'no_hp' => [
                'type' => 'VARCHAR',
                'constraint' => '15',
            ],
            'jumlah' => [
                'type' => 'INT',
                'constraint' => 5,
            ],
            'tanggal' => [
                'type' => 'DATE',
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'default' => 'Pending',
            ],
            'nama_pelanggan' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'nama_kasir' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'nama_jasa' => [ // New column 'nama_jasa'
                'type' => 'VARCHAR',
                'constraint' => '255',
            ]
        ]);

        $this->forge->addPrimaryKey('id_pesanan');
        $this->forge->createTable('pesanan');
    }

    public function down()
    {
        $this->forge->dropTable('pesanan');
    }
}
