<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class GolonganDarah extends Migration
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
            'golongan_darah' => [
                'type'       => 'VARCHAR',
                'constraint' => 3,
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('golongan_darahs');
    }

    public function down()
    {
        $this->forge->dropTable('golongan_darahs');
    }
}
