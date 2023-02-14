<?php

namespace App\Controllers\AdminWeb;

use App\Controllers\BaseController;

class Pendidikan extends BaseController
{
    public function index()
    {
        $data = [
            "title" => ["pendidikan", "/admin_web"]
        ];

        return view("admin_web/pendidikan/index", $data);
    }
}
