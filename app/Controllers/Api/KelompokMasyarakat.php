<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Models\KelompokMasyarakat as ModelsKelompokMasyarakat;

class KelompokMasyarakat extends BaseController
{
    protected $model;
    public function __construct()
    {
        $this->model = new ModelsKelompokMasyarakat();
    }

    public function pageGetData($limit)
    {
        $totalData = count($this->model->findAll());
        $totalHalaman = ceil($totalData / $limit);

        $data = [
            'totalHalaman' => $totalHalaman,
            'limit' => $limit
        ];
        return view('admin_web/kelompok_masyarakat/page_get_data', $data);
    }

    public function perPageGetData()
    {
        return view('admin_web/kelompok_masyarakat/per_page_get_data');
    }

    public function getData($limit, $offset)
    {
        $data = [
            'kelompok_masyarakat' => $this->model->orderBy('id', 'DESC')->findAll($limit, $offset)
        ];
        return view('admin_web/kelompok_masyarakat/table', $data);
    }

    public function pageSrchData($key, $limit)
    {
        $where = "kelompok_masyarakat LIKE '%$key%'";
        $totalData = count($this->model->where($where)->findAll());
        $totalHalaman = ceil($totalData / $limit);

        $data = [
            'totalHalaman' => $totalHalaman,
            'limit' => $limit,
            'key' => $key
        ];
        return view("admin_web/kelompok_masyarakat/page_srch_data", $data);
    }

    public function perPageSrchData($key)
    {
        $data = [
            'key' => $key
        ];
        return view('admin_web/kelompok_masyarakat/per_page_srch_data', $data);
    }

    public function srchData($key, $limit, $offset)
    {
        $where = "kelompok_masyarakat LIKE '%$key%'";
        $data = [
            'kelompok_masyarakat' => $this->model->orderBy('id', 'DESC')->where($where)->findAll($limit, $offset)
        ];
        return view("admin_web/kelompok_masyarakat/table", $data);
    }

    public function getOneData($id)
    {
        $data = [
            'kelompok_masyarakat' => $this->model->find($id)
        ];
        // return view("admin_web/kelompok_masyarakat/table", $data);
        return $this->response->setJSON($data);
    }

    public function addData()
    {
        $data = [
            "kelompok_masyarakat" => $this->request->getVar('kelompok_masyarakat'),
            "jenis" => $this->request->getVar('jenis'),
            "diinput_oleh" => 'admin'
        ];

        return $this->model->save($data);
    }

    public function editData()
    {
        $data = [
            'id' => $this->request->getVar('id'),
            'kelompok_masyarakat' => $this->request->getVar('kelompok_masyarakatEdit'),
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
