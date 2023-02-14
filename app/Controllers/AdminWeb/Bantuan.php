<?php

namespace App\Controllers\AdminWeb;

use App\Controllers\BaseController;

class Bantuan extends BaseController
{
    public function index()
    {
        $data = [
            "title" => ["bantuan", "/admin_web"]
        ];

        return view("admin_web/bantuan/index", $data);
    }
}
