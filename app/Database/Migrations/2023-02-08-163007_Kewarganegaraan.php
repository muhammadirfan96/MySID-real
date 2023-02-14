<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kewarganegaraan extends Migration
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
            'kewarganegaraan' => [
                'type'       => 'VARCHAR',
                'constraint' => 3,
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('kewarganegaraans');
    }

    public function down()
    {
        $this->forge->dropTable('kewarganegaraans');
    }
}
