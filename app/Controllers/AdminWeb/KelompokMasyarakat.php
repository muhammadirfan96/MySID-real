<?php

namespace App\Controllers\AdminWeb;

use App\Controllers\BaseController;

class KelompokMasyarakat extends BaseController
{
    public function index()
    {
        $data = [
            "title" => ["kelompok masyarakat", "/admin_web"]
        ];

        return view("admin_web/kelompok_masyarakat/index", $data);
    }
}
