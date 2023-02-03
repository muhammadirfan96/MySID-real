<?php

namespace App\Controllers\AdminWeb;

use App\Controllers\BaseController;

class Agama extends BaseController
{
    public function index()
    {
        $data = [
            "title" => ["agama", "/admin_web"]
        ];

        return view("admin_web/agama/index", $data);
    }
}
