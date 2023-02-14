<?php

namespace App\Controllers\AdminWeb;

use App\Controllers\BaseController;

class Kelurahan extends BaseController
{
    public function index()
    {
        $data = [
            "title" => ["kelurahan", "/admin_web"]
        ];

        return view("admin_web/kelurahan/index", $data);
    }
}
