<?php

namespace App\Controllers;

use App\Models\pendaftaranModel;
use App\Models\guruModel;
use App\Models\kelasModel;
use Myth\Auth\Models\UserModel;
use App\Models\persyaratanModel;

class User extends BaseController
{
    protected $pendaftaranModel;
    protected $UserModel;
    protected $guruModel;
    protected $kelasModel;
    protected $persyaratanModel;

    public function __construct()
    {
        $this->pendaftaranModel = new pendaftaranModel();
        $this->UserModel = new UserModel();
        $this->guruModel = new guruModel();
        $this->kelasModel = new kelasModel();
        $this->persyaratanModel = new persyaratanModel();
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

    public function editProfile($id)
    {
        $data = [
            'title' => "Profile",
            'data' => $this->UserModel->getData($id)
        ];
        return view('user/editProfile', $data);
    }

    public function updateProfile($id)
    {

        $rules = [
            'username' => 'required|alpha_numeric_space|min_length[3]|max_length[30]',
            'email'    => 'required|valid_email',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->UserModel->save([
            'id' => $id,
            'fullname' => $this->request->getVar('fullname'),
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email')
        ]);

        session()->setFlashdata('pesan', 'Profile berhasil diubah');

        return redirect()->to('/user/profile');
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
        $db      = \Config\Database::connect();
        $builder = $db->table('pendaftaran');
        $builder->where('status_approve', 0);
        $query = $builder->countAllResults();

        $builder->where('status_approve', 1);
        $query2 = $builder->countAllResults();

        $data = [
            'title' => 'Daftar Pengguna',
            'data' => $this->pendaftaranModel->getNonApprove(),
            'cna' => $query,
            'ca' => $query2
        ];
        return view('user/dataPendaftar', $data);
    }

    public function lihatBerkas($id)
    {
        $data = [
            'title' => "Lihat Berkas",
            'data' => $this->pendaftaranModel->getData($id)
        ];
        return view('user/lihatberkas', $data);
    }

    public function approve($id)
    {
        $this->pendaftaranModel->save([
            'id' => $id,
            'status_approve' => '1'
        ]);

        session()->setFlashdata('pesan', 'Berkas Pendaftaran Berhasil Disetujui');

        return redirect()->to('/user/dataPendaftar');
    }

    public function dataValid()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('pendaftaran');
        $builder->where('status_approve', 0);
        $query = $builder->countAllResults();

        $builder->where('status_approve', 1);
        $query2 = $builder->countAllResults();
        $data = [
            'title' => "Data Valid",
            'data' => $this->pendaftaranModel->getValid(),
            'cna' => $query,
            'ca' => $query2
        ];
        return view('user/datavalid', $data);
    }

    // ===================================================== GURU

    public function guru()
    {
        $data = [
            'title' => "Data Guru",
            'data'  => $this->guruModel->getData()
        ];
        return view('user/guru', $data);
    }

    public function createDataGuru()
    {
        $data = [
            'title' => "Tambah Data Guru"
        ];
        return view('user/createdataguru', $data);
    }

    public function editDataGuru($id)
    {
        $data = [
            'title' => "Edit Data Guru",
            'data' => $this->guruModel->getData($id)
        ];
        return view('user/editdataguru', $data);
    }

    public function updateDataGuru($id)
    {
        $this->guruModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'jabatan' => $this->request->getVar('jabatan'),
        ]);

        session()->setFlashdata('pesan', 'Data guru berhasil di ubah');

        return redirect()->to('/user/guru');
    }

    public function saveDataGuru()
    {
        $this->guruModel->insert([
            'nama' => $this->request->getVar('nama'),
            'jabatan' => $this->request->getVar('jabatan'),
        ]);

        session()->setFlashdata('pesan', 'Data guru berhasil di simpan');

        return redirect()->to('/user/guru');
    }

    public function deleteDataGuru($id)
    {
        $this->guruModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to('/user/guru');
    }


    // ===================================================== KELAS

    public function kelas()
    {
        $data = [
            'title' => "Data Kelas",
            'data'  => $this->kelasModel->getData()
        ];
        return view('user/kelas', $data);
    }

    public function createDataKelas()
    {
        $data = [
            'title' => "Tambah Data Kelas"
        ];
        return view('user/createdatakelas', $data);
    }

    public function saveDataKelas()
    {
        $this->kelasModel->insert([
            'namaSantri' => $this->request->getVar('nama'),
            'kelas' => $this->request->getVar('kelas'),
        ]);

        session()->setFlashdata('pesan', 'Data kelas berhasil di simpan');

        return redirect()->to('/user/kelas');
    }

    public function deleteDataKelas($id)
    {
        $this->kelasModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to('/user/kelas');
    }

    public function editDataKelas($id)
    {
        $data = [
            'title' => "Edit Data kelas",
            'data' => $this->kelasModel->getData($id)
        ];
        return view('user/editdatakelas', $data);
    }

    public function updateDataKelas($id)
    {
        $this->kelasModel->save([
            'id' => $id,
            'namaSantri' => $this->request->getVar('nama'),
            'kelas' => $this->request->getVar('kelas'),
        ]);

        session()->setFlashdata('pesan', 'Data kelas berhasil di ubah');

        return redirect()->to('/user/kelas');
    }

    // ===================================================== persyaratan

    public function persyaratan()
    {
        $data = [
            'title' => "Data Persyaratan",
            'data'  => $this->persyaratanModel->getData()
        ];
        return view('user/persyaratan', $data);
    }

    public function editDataPersyaratan($id)
    {
        $data = [
            'title' => "Edit Data Persyaratan",
            'data' => $this->persyaratanModel->getData($id)
        ];
        return view('user/editdatapersyaratan', $data);
    }

    public function createDataPersyaratan()
    {
        $data = [
            'title' => "Tambah Data Persyaratan"
        ];
        return view('user/createdatapersyaratan', $data);
    }

    public function saveDataPersyaratan()
    {
        $this->persyaratanModel->insert([
            'namaPersyaratan' => $this->request->getVar('persyaratan')
        ]);

        session()->setFlashdata('pesan', 'Data persyaratan berhasil di simpan');

        return redirect()->to('/user/persyaratan');
    }

    public function updateDataPersyaratan($id)
    {
        $this->persyaratanModel->save([
            'id' => $id,
            'namaPersyaratan' => $this->request->getVar('persyaratan'),
        ]);

        session()->setFlashdata('pesan', 'Data persyaratan berhasil di ubah');

        return redirect()->to('/user/persyaratan');
    }

    public function deleteDataPersyaratan($id)
    {
        $this->persyaratanModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to('/user/persyaratan');
    }
}
