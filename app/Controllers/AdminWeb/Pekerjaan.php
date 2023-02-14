<?php

namespace App\Controllers\AdminWeb;

use App\Controllers\BaseController;

class Pekerjaan extends BaseController
{
    public function index()
    {
        $data = [
            "title" => ["pekerjaan", "/admin_web"]
        ];

        return view("admin_web/pekerjaan/index", $data);
    }
}
