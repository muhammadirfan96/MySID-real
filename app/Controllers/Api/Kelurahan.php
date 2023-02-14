<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Models\Kelurahan as ModelsKelurahan;

class Kelurahan extends BaseController
{
    protected $model;
    public function __construct()
    {
        $this->model = new ModelsKelurahan();
    }

    public function pageGetData($limit)
    {
        $totalData = count($this->model->findAll());
        $totalHalaman = ceil($totalData / $limit);

        $data = [
            'totalHalaman' => $totalHalaman,
            'limit' => $limit
        ];
        return view('admin_web/kelurahan/page_get_data', $data);
    }

    public function perPageGetData()
    {
        return view('admin_web/kelurahan/per_page_get_data');
    }

    public function getData($limit, $offset)
    {
        $data = [
            'kelurahan' => $this->model->orderBy('id', 'DESC')->findAll($limit, $offset)
        ];
        return view('admin_web/kelurahan/table', $data);
    }

    public function pageSrchData($key, $limit)
    {
        $where = "kelurahan LIKE '%$key%'";
        $totalData = count($this->model->where($where)->findAll());
        $totalHalaman = ceil($totalData / $limit);

        $data = [
            'totalHalaman' => $totalHalaman,
            'limit' => $limit,
            'key' => $key
        ];
        return view("admin_web/kelurahan/page_srch_data", $data);
    }

    public function perPageSrchData($key)
    {
        $data = [
            'key' => $key
        ];
        return view('admin_web/kelurahan/per_page_srch_data', $data);
    }

    public function srchData($key, $limit, $offset)
    {
        $where = "kelurahan LIKE '%$key%'";
        $data = [
            'kelurahan' => $this->model->orderBy('id', 'DESC')->where($where)->findAll($limit, $offset)
        ];
        return view("admin_web/kelurahan/table", $data);
    }

    public function getOneData($id)
    {
        $data = [
            'kelurahan' => $this->model->find($id)
        ];
        // return view("admin_web/kelurahan/table", $data);
        return $this->response->setJSON($data);
    }

    public function addData()
    {
        $data = [
            "kelurahan" => $this->request->getVar('kelurahan'),
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
            'kelurahan' => $this->request->getVar('kelurahanEdit'),
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
