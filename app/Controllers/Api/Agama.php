<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Models\Agama as ModelsAgama;

class Agama extends BaseController
{
    protected $model;
    public function __construct()
    {
        $this->model = new ModelsAgama();
    }

    public function pageGetData($limit)
    {
        $totalData = count($this->model->findAll());
        $totalHalaman = ceil($totalData / $limit);

        $data = [
            'totalHalaman' => $totalHalaman,
            'limit' => $limit
        ];
        return view('admin_web/agama/page_get_data', $data);
    }

    public function perPageGetData()
    {
        return view('admin_web/agama/per_page_get_data');
    }

    public function getData($limit, $offset)
    {
        $data = [
            'agama' => $this->model->orderBy('id', 'DESC')->findAll($limit, $offset)
        ];
        return view('admin_web/agama/table', $data);
    }

    public function pageSrchData($key, $limit)
    {
        $where = "agama LIKE '%$key%'";
        $totalData = count($this->model->where($where)->findAll());
        $totalHalaman = ceil($totalData / $limit);

        $data = [
            'totalHalaman' => $totalHalaman,
            'limit' => $limit,
            'key' => $key
        ];
        return view("admin_web/agama/page_srch_data", $data);
    }

    public function perPageSrchData($key)
    {
        $data = [
            'key' => $key
        ];
        return view('admin_web/agama/per_page_srch_data', $data);
    }

    public function srchData($key, $limit, $offset)
    {
        $where = "agama LIKE '%$key%'";
        $data = [
            'agama' => $this->model->orderBy('id', 'DESC')->where($where)->findAll($limit, $offset)
        ];
        return view("admin_web/agama/table", $data);
    }

    public function getOneData($id)
    {
        $data = [
            'agama' => $this->model->find($id)
        ];
        return view("admin_web/agama/table", $data);
    }

    public function addData()
    {
        $data = [
            "agama" => $this->request->getVar('agama'),
            "waktu_input" => date("Y-m-d H:i:s"),
            "waktu_update" => date("Y-m-d H:i:s"),
            "diinput_oleh" => 'admin'
        ];
        return $this->model->save($data);
    }

    public function editData()
    {
        $data = [
            'id' => $this->request->getVar('id'),
            'agama' => $this->request->getVar('agamaEdit'),
            "waktu_update" => date("Y-m-d H:i:s"),
            "diinput_oleh" => 'admin'
        ];

        return $this->model->save($data);
    }

    public function deleteData($id)
    {
        return $this->model->delete($id);
    }
}
