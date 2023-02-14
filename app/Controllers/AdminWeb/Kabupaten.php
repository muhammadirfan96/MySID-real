<?php

namespace App\Controllers\AdminWeb;

use App\Controllers\BaseController;

class Kabupaten extends BaseController
{
    public function index()
    {
        $data = [
            "title" => ["kabupaten", "/admin_web"]
        ];

        return view("admin_web/kabupaten/index", $data);
    }
}
