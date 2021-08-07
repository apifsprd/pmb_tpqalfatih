<?php

namespace App\Controllers;

use App\Models\pendaftaranModel;
use Myth\Auth\Models\UserModel;

class User extends BaseController
{
    protected $pendaftaranModel;
    protected $UserModel;

    public function __construct()
    {
        $this->pendaftaranModel = new pendaftaranModel();
        $this->UserModel = new UserModel();
    }

    public function index()
    {
        $username = user()->username;

        $data = [
            'title' => "Beranda",
            'data' => $this->pendaftaranModel->getSpecific($username)
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

    public function profile()
    {
        $data = [
            'title' => "Profile"
        ];
        return view('user/profile', $data);
    }

    public function editBerkas($id)
    {
        $data = [
            'title' => "Edit Berkas",
            'data' => $this->pendaftaranModel->getData($id)
        ];
        return view('user/editberkas', $data);
    }

    public function delete($id)
    {
        $this->pendaftaranModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to('/user');
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
            'oleh' => $this->request->getVar('oleh')
        ]);

        session()->setFlashdata('pesan', 'Pendaftaran Berhasil');

        return redirect()->to('/user');
    }

    public function update($id)
    {
        $this->pendaftaranModel->save([
            'id' => $id,
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
            'oleh' => $this->request->getVar('oleh')
        ]);

        session()->setFlashdata('pesan', 'Berkas Pendaftaran Berhasil Diubah');

        return redirect()->to('/user');
    }

    public function daftarPengguna()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('users');
        $names = ['pimpinan', 'admin'];
        $builder->whereNotIn('username', $names);
        $query = $builder->get();

        $data = [
            'title' => 'Daftar Pengguna',
            'data' => $query->getResult()
        ];
        return view('user/daftarPengguna', $data);
    }

    public function dataPendaftar()
    {
        $data = [
            'title' => 'Daftar Pengguna',
            'data' => $this->pendaftaranModel->getData()
        ];
        return view('user/dataPendaftar', $data);
    }
}
