<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminWeb extends BaseController
{
    public function index()
    {
        $data = [
            "title" => ["admin web", "/"]
        ];
        return view('admin_web/index', $data);
    }
}
