<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Models\Bantuan as ModelsBantuan;

class Bantuan extends BaseController
{
    protected $model;
    public function __construct()
    {
        $this->model = new ModelsBantuan();
    }

    public function pageGetData($limit)
    {
        $totalData = count($this->model->findAll());
        $totalHalaman = ceil($totalData / $limit);

        $data = [
            'totalHalaman' => $totalHalaman,
            'limit' => $limit
        ];
        return view('admin_web/bantuan/page_get_data', $data);
    }

    public function perPageGetData()
    {
        return view('admin_web/bantuan/per_page_get_data');
    }

    public function getData($limit, $offset)
    {
        $data = [
            'bantuan' => $this->model->orderBy('id', 'DESC')->findAll($limit, $offset)
        ];
        return view('admin_web/bantuan/table', $data);
    }

    public function pageSrchData($key, $limit)
    {
        $where = "bantuan LIKE '%$key%'";
        $totalData = count($this->model->where($where)->findAll());
        $totalHalaman = ceil($totalData / $limit);

        $data = [
            'totalHalaman' => $totalHalaman,
            'limit' => $limit,
            'key' => $key
        ];
        return view("admin_web/bantuan/page_srch_data", $data);
    }

    public function perPageSrchData($key)
    {
        $data = [
            'key' => $key
        ];
        return view('admin_web/bantuan/per_page_srch_data', $data);
    }

    public function srchData($key, $limit, $offset)
    {
        $where = "bantuan LIKE '%$key%'";
        $data = [
            'bantuan' => $this->model->orderBy('id', 'DESC')->where($where)->findAll($limit, $offset)
        ];
        return view("admin_web/bantuan/table", $data);
    }

    public function getOneData($id)
    {
        $data = [
            'bantuan' => $this->model->find($id)
        ];
        // return view("admin_web/bantuan/table", $data);
        return $this->response->setJSON($data);
    }

    public function addData()
    {
        $data = [
            "bantuan" => $this->request->getVar('bantuan'),
            "jenis" => $this->request->getVar('jenis'),
            "diinput_oleh" => 'admin'
        ];

        return $this->model->save($data);
    }

    public function editData()
    {
        $data = [
            'id' => $this->request->getVar('id'),
            'bantuan' => $this->request->getVar('bantuanEdit'),
            'jenis' => $this->request->getVar('jenisEdit'),
            "diinput_oleh" => 'admin'
        ];

        return $this->model->save($data);
    }

    public function deleteData($id)
    {
        return $this->model->delete($id);
    }
}
