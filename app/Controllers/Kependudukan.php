<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Kependudukan extends BaseController
{
    public function index()
    {
        $data = [
            "title" => ["kependudukan", "/"]
        ];

        return view("kependudukan/index", $data);
    }
}
