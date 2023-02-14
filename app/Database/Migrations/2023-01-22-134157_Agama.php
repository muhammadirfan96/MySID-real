<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Agama extends Migration
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
            'agama' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('agamas');
    }

    public function down()
    {
        $this->forge->dropTable('agamas');
    }
}
