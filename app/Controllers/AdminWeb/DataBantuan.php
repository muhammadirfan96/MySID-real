<?php

namespace App\Controllers\AdminWeb;

use App\Controllers\BaseController;

class DataBantuan extends BaseController
{
    public function index()
    {
        $data = [
            "title" => ["data bantuan", "/admin_web"]
        ];

        return view("admin_web/data_bantuan/index", $data);
    }
}
