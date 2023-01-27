<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Agama as ModelsAgama;

class Agama extends BaseController
{
    protected $model;
    public function __construct()
    {
        $this->model = new ModelsAgama();
    }
    public function getData()
    {
        dd("ok");
        $this->model->findAll($limit = 0, $offset = 0);
        return view("api/agama/table");
    }

    public function getOneData($id)
    {
        return $this->model->find($id);
        return view("api/agama/table");
    }

    public function addData()
    {
        d($this->request->getVar());
        dd($this->request->getFiles());
        $data = [
            "agama" => $this->request->getVar('agama'),
            "waktu_input" => date("Y-m-d H:i:s"),
            "waktu_update" => date("Y-m-d H:i:s"),
            "diinput_oleh" => 'admin'
        ];
        $this->model->save($data);
        session()->setFlashdata('pesanSuccess', '');
        return view("api/agama/table");
    }

    public function editData($id, $message)
    {
        $data = [
            'id' => $id
        ];
        $this->model->save($data);
        session()->setFlashdata('pesanSuccess',  $message . ' telah diedit');
        return view("api/agama/table");
    }

    public function deleteData($id, $message)
    {
        $this->model->delete($id);
        session()->setFlashdata('pesanSuccess',  $message . ' telah dihapus');
        return view("api/agama/table");
    }
}
