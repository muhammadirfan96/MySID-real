<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class StatusHubDlmKel extends Seeder
{
    public function run()
    {
        $data = [
            [
                'status_hub_dlm_kel' => 'kepala keluarga'
            ],
            [
                'status_hub_dlm_kel' => 'istri'
            ],
            [
                'status_hub_dlm_kel' => 'anak'
            ]
        ];

        $this->db->table('status_hub_dlm_kels')->insertBatch($data);
    }
}
