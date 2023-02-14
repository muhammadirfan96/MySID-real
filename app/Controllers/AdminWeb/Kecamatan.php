<?php

namespace App\Controllers\AdminWeb;

use App\Controllers\BaseController;

class Kecamatan extends BaseController
{
    public function index()
    {
        $data = [
            "title" => ["kecamatan", "/admin_web"]
        ];

        return view("admin_web/kecamatan/index", $data);
    }
}
