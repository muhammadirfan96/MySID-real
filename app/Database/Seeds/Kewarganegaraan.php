<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Kewarganegaraan extends Seeder
{
    public function run()
    {
        $data = [
            [
                'kewarganegaraan' => 'WNI'
            ],
            [
                'kewarganegaraan' => 'WNA'
            ]
        ];

        $this->db->table('kewarganegaraans')->insertBatch($data);
    }
}

// $ php spark db:seed [namaclass seeder nya]
