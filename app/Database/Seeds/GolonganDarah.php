<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GolonganDarah extends Seeder
{
    public function run()
    {
        $data = [
            [
                'golongan_darah' => '-'
            ],
            [
                'golongan_darah' => 'A'
            ],
            [
                'golongan_darah' => 'B'
            ],
            [
                'golongan_darah' => 'AB'
            ],
            [
                'golongan_darah' => 'O'
            ]
        ];

        $this->db->table('golongan_darahs')->insertBatch($data);
    }
}
