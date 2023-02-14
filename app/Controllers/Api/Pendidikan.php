<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Models\Pendidikan as ModelsPendidikan;

class Pendidikan extends BaseController
{
    protected $model;
    public function __construct()
    {
        $this->model = new ModelsPendidikan();
    }

    public function pageGetData($limit)
    {
        $totalData = count($this->model->findAll());
        $totalHalaman = ceil($totalData / $limit);

        $data = [
            'totalHalaman' => $totalHalaman,
            'limit' => $limit
        ];
        return view('admin_web/pendidikan/page_get_data', $data);
    }

    public function perPageGetData()
    {
        return view('admin_web/pendidikan/per_page_get_data');
    }

    public function getData($limit, $offset)
    {
        $data = [
            'pendidikan' => $this->model->orderBy('id', 'DESC')->findAll($limit, $offset)
        ];
        return view('admin_web/pendidikan/table', $data);
    }

    public function pageSrchData($key, $limit)
    {
        $where = "pendidikan LIKE '%$key%'";
        $totalData = count($this->model->where($where)->findAll());
        $totalHalaman = ceil($totalData / $limit);

        $data = [
            'totalHalaman' => $totalHalaman,
            'limit' => $limit,
            'key' => $key
        ];
        return view("admin_web/pendidikan/page_srch_data", $data);
    }

    public function perPageSrchData($key)
    {
        $data = [
            'key' => $key
        ];
        return view('admin_web/pendidikan/per_page_srch_data', $data);
    }

    public function srchData($key, $limit, $offset)
    {
        $where = "pendidikan LIKE '%$key%'";
        $data = [
            'pendidikan' => $this->model->orderBy('id', 'DESC')->where($where)->findAll($limit, $offset)
        ];
        return view("admin_web/pendidikan/table", $data);
    }

    public function getOneData($id)
    {
        $data = [
            'pendidikan' => $this->model->find($id)
        ];
        // return view("admin_web/pendidikan/table", $data);
        return $this->response->setJSON($data);
    }

    public function addData()
    {
        $data = [
            "pendidikan" => $this->request->getVar('pendidikan'),
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
            'pendidikan' => $this->request->getVar('pendidikanEdit'),
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
