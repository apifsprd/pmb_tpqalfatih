<?php

namespace App\Controllers;

use App\Models\pendaftaranModel;
use App\Models\guruModel;
use App\Models\kelasModel;
use App\Models\persyaratanModel;

class Page extends BaseController
{
    protected $pendaftaranModel;
    protected $guruModel;
    protected $kelasModel;
    protected $persyaratanModel;

    public function __construct()
    {
        $this->pendaftaranModel = new pendaftaranModel();
        $this->guruModel = new guruModel();
        $this->kelasModel = new kelasModel();
        $this->persyaratanModel = new persyaratanModel();
    }

    public function home()
    {
        $data = [
            'title' => "Home"
        ];
        return view('page/index', $data);
    }

    public function kelas()
    {
        $data = [
            'title' => "Kelas",
            'kabbas' => $this->kelasModel->getDatabyKelas('Abbas'),
            'kabu' => $this->kelasModel->getDatabyKelas('abu'),
            'kthaariq' => $this->kelasModel->getDatabyKelas('thaariq'),
            'kumar' => $this->kelasModel->getDatabyKelas('umar'),
            'kuwais' => $this->kelasModel->getDatabyKelas('uwais'),
            'cabbas' => $this->kelasModel->getCountbyKelas('abbas'),
            'cabu' => $this->kelasModel->getCountbyKelas('abu'),
            'cthaariq' => $this->kelasModel->getCountbyKelas('thaariq'),
            'cumar' => $this->kelasModel->getCountbyKelas('umar'),
            'cuwais' => $this->kelasModel->getCountbyKelas('uwais')
        ];
        return view('page/kelas', $data);
    }

    public function guru()
    {
        $data = [
            'title' => "Guru",
            'guru' => $this->guruModel->getData()
        ];
        return view('page/guru', $data);
    }

    // public function pendaftaran()
    // {
    //     $data = [
    //         'title' => "pendaftaran"
    //     ];
    //     return view('page/pendaftaran', $data);
    // }

    public function info()
    {
        $data = [
            'title' => "informasi",
            'info' => $this->persyaratanModel->getData()
        ];
        return view('page/informasi', $data);
    }
}
