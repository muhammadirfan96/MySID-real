<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Bantuan extends Migration
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
            'bantuan' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'jenis' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
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
        $this->forge->createTable('bantuans');
    }

    public function down()
    {
        $this->forge->dropTable('bantuans');
    }
}
