<?php

namespace App\Models;

use CodeIgniter\Model;

class DataPenduduk extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'data_penduduks';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nik', 'nkk', 'nama_warga', 'ttl', 'id_jenis_kelamin', 'id_golongan_darah', 'alamat', 'id_kelurahan', 'id_kecamatan', 'id_kabupaten', 'id_provinsi', 'id_agama', 'id_status_kawin', 'id_pekerjaan', 'id_kewarganegaraan', 'foto', 'nama_ayah', 'nama_ibu', 'id_status_hub_dlm_kel', 'diinput_oleh'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'waktu_input';
    protected $updatedField  = 'waktu_update';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
