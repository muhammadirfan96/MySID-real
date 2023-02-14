<?php

namespace App\Controllers\AdminWeb;

use App\Controllers\BaseController;

class DataPenduduk extends BaseController
{
    public function index()
    {
        $data = [
            "title" => ["data penduduk", "/admin_web"]
        ];

        return view("admin_web/data_penduduk/index", $data);
    }
}
