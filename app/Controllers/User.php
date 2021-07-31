<?php

namespace App\Controllers;

use App\Models\pendaftaranModel;

class User extends BaseController
{
    protected $pendaftaranModel;
    public function __construct()
    {
        $this->pendaftaranModel = new pendaftaranModel();
    }

    public function index()
    {
        $data = [
            'title' => "Beranda"
        ];
        return view('user/index', $data);
    }

    public function daftar()
    {
        $data = [
            'title' => "Pendaftaran"
        ];
        return view('user/pendaftaran', $data);
    }

    public function save()
    {
        $this->pendaftaranModel->save([
            'namaLengkap'  => $this->request->getVar('namaLengkap'),
            'namaPanggilan'  => $this->request->getVar('namaPanggilan'),
            'tanggalLahir' => $this->request->getVar('tanggalLahir'),
            'kotaKelahiran' => $this->request->getVar('kotaKelahiran'),
            'jk'  => $this->request->getVar('jenisKelamin'),
            'anakKe' => $this->request->getVar('anakKe'),
            'jmlSaudara' => $this->request->getVar('jumlahSaudara'),
            'statusKeluarga' => $this->request->getVar('statusKeluarga'),
            'kewarganegaraan' => $this->request->getVar('kewarganegaraan'),
            'namaAyah' => $this->request->getVar('namaAyah'),
            'kotaKelahiranAyah' => $this->request->getVar('kotaKelahiranAyah'),
            'tanggalLahirAyah' => $this->request->getVar('tglLhrAyah'),
            'agamaAyah' => $this->request->getVar('agamaAyah'),
            'wnAyah' => $this->request->getVar('wnAyah'),
            'pekerjaanAyah' => $this->request->getVar('pekerjaanAyah'),
            'pendidikanAyah' => $this->request->getVar('pendidikanAyah'),
            'namaIbu' => $this->request->getVar('namaIbu'),
            'kotaKelahiranIbu' => $this->request->getVar('kotaKelahiranIbu'),
            'tanggalLahirIbu' => $this->request->getVar('tglLhrIbu'),
            'agamaIbu' => $this->request->getVar('agamaIbu'),
            'wnIbu' => $this->request->getVar('wnIbu'),
            'pekerjaanIbu' => $this->request->getVar('pekerjaanIbu'),
            'pendidikanIbu' => $this->request->getVar('pendidikanIbu'),
            'nohp' => $this->request->getVar('nohp'),
            'alamat' => $this->request->getVar('alamat'),
            'status_approve'  => '0',
        ]);

        session()->setFlashdata('pesan', 'Pendaftaran Berhasil');

        return redirect()->to('/user');
    }
}
