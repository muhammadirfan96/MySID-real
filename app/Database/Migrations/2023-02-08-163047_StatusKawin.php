<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class StatusKawin extends Migration
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
            'status_kawin' => [
                'type'       => 'VARCHAR',
                'constraint' => 11,
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('status_kawins');
    }

    public function down()
    {
        $this->forge->dropTable('status_kawins');
    }
}
