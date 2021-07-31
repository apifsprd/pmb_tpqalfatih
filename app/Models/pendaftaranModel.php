<?php

namespace App\Models;

use CodeIgniter\Model;

class pendaftaranModel extends Model
{
    protected $table = 'pendaftaran';
    protected $primaryKey = 'id';
    protected $useTimestamps = 'True';
    protected $allowedFields = [
        'namaLengkap',
        'namaPanggilan',
        'tanggalLahir',
        'kotaKelahiran',
        'jk',
        'anakKe',
        'jmlSaudara',
        'statusKeluarga',
        'kewarganegaraan',
        'namaAyah',
        'kotaKelahiranAyah',
        'tanggalLahirAyah',
        'agamaAyah',
        'wnAyah',
        'pekerjaanAyah',
        'pendidikanAyah',
        'namaIbu',
        'kotaKelahiranIbu',
        'tanggalLahirIbu',
        'agamaIbu',
        'wnIbu',
        'pekerjaanIbu',
        'pendidikanIbu',
        'nohp',
        'alamat',
        'status_approve',
    ];

    public function getData($id = FALSE)
    {
        if ($id == FALSE) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
