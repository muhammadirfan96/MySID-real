<?php

namespace App\Controllers\AdminWeb;

use App\Controllers\BaseController;

class Provinsi extends BaseController
{
    public function index()
    {
        $data = [
            "title" => ["provinsi", "/admin_web"]
        ];

        return view("admin_web/provinsi/index", $data);
    }
}
