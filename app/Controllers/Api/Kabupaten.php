<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Models\Kabupaten as ModelsKabupaten;

class Kabupaten extends BaseController
{
    protected $model;
    public function __construct()
    {
        $this->model = new ModelsKabupaten();
    }

    public function pageGetData($limit)
    {
        $totalData = count($this->model->findAll());
        $totalHalaman = ceil($totalData / $limit);

        $data = [
            'totalHalaman' => $totalHalaman,
            'limit' => $limit
        ];
        return view('admin_web/kabupaten/page_get_data', $data);
    }

    public function perPageGetData()
    {
        return view('admin_web/kabupaten/per_page_get_data');
    }

    public function getData($limit, $offset)
    {
        $data = [
            'kabupaten' => $this->model->orderBy('id', 'DESC')->findAll($limit, $offset)
        ];
        return view('admin_web/kabupaten/table', $data);
    }

    public function pageSrchData($key, $limit)
    {
        $where = "kabupaten LIKE '%$key%'";
        $totalData = count($this->model->where($where)->findAll());
        $totalHalaman = ceil($totalData / $limit);

        $data = [
            'totalHalaman' => $totalHalaman,
            'limit' => $limit,
            'key' => $key
        ];
        return view("admin_web/kabupaten/page_srch_data", $data);
    }

    public function perPageSrchData($key)
    {
        $data = [
            'key' => $key
        ];
        return view('admin_web/kabupaten/per_page_srch_data', $data);
    }

    public function srchData($key, $limit, $offset)
    {
        $where = "kabupaten LIKE '%$key%'";
        $data = [
            'kabupaten' => $this->model->orderBy('id', 'DESC')->where($where)->findAll($limit, $offset)
        ];
        return view("admin_web/kabupaten/table", $data);
    }

    public function getOneData($id)
    {
        $data = [
            'kabupaten' => $this->model->find($id)
        ];
        // return view("admin_web/kabupaten/table", $data);
        return $this->response->setJSON($data);
    }

    public function addData()
    {
        $data = [
            "kabupaten" => $this->request->getVar('kabupaten'),
            "diinput_oleh" => 'admin'
        ];
        return $this->model->save($data);
    }

    public function editData()
    {
        $data = [
            'id' => $this->request->getVar('id'),
            'kabupaten' => $this->request->getVar('kabupatenEdit'),
            "diinput_oleh" => 'admin'
        ];

        return $this->model->save($data);
    }

    public function deleteData($id)
    {
        return $this->model->delete($id);
    }
}
