<?php

namespace App\Controllers\Halaman;

use App\Controllers\BaseController;

class InfoDesa extends BaseController
{
    public function index()
    {
        $data = [
            "title" => ["info desa", "/"]
        ];

        return view("info_desa/index", $data);
    }
}
