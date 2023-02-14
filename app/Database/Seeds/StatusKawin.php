<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class StatusKawin extends Seeder
{
    public function run()
    {
        $data = [
            [
                'status_kawin' => 'kawin'
            ],
            [
                'status_kawin' => 'belum kawin'
            ]
        ];

        $this->db->table('status_kawins')->insertBatch($data);
    }
}
