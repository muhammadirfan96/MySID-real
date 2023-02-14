<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataPenduduk extends Migration
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
            'nik' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'nkk' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'nama_warga' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'ttl' => [
                'type'       => 'VARCHAR',
                'constraint' => 150,
                'null' => true,
            ],
            'id_jenis_kelamin' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'id_golongan_darah' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'alamat' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'id_kelurahan' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'id_kecamatan' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'id_kabupaten' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'id_provinsi' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'id_agama' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'id_status_kawin' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'id_pekerjaan' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'id_kewarganegaraan' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'foto' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'nama_ayah' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'nama_ibu' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'id_status_hub_dlm_kel' => [
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
        $this->forge->createTable('data_penduduks');
    }

    public function down()
    {
        $this->forge->dropTable('data_penduduks');
    }
}
