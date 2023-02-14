<?php

namespace App\Controllers\AdminWeb;

use App\Controllers\BaseController;

class DataKelompokMasyarakat extends BaseController
{
    public function index()
    {
        $data = [
            "title" => ["data kelompok masyarakat", "/admin_web"]
        ];

        return view("admin_web/data_kelompok_masyarakat/index", $data);
    }
}
