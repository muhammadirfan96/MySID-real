<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataBantuan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_bantuan' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'id_data_penduduk' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'waktu_input' => [
                'type' => 'DATETIME',
            ],
            'waktu_update' => [
                'type' => 'DATETIME',
            ],
            'diinput_oleh' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('data_bantuans');
    }

    public function down()
    {
        $this->forge->dropTable('data_bantuans');
    }
}
