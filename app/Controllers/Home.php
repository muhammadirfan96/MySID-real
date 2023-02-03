<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            "title" => ["home", "/"]
        ];
        return view('home/index', $data);
    }
}
