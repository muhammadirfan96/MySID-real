<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class StatusHubDlmKel extends Migration
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
            'status_hub_dlm_kel' => [
                'type'       => 'VARCHAR',
                'constraint' => 15,
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('status_hub_dlm_kels');
    }

    public function down()
    {
        $this->forge->dropTable('status_hub_dlm_kels');
    }
}
