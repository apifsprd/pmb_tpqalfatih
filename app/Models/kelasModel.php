<?php

namespace App\Models;

use CodeIgniter\Model;

class kelasModel extends Model
{
    protected $table = 'tbkelas';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'namaSantri',
        'kelas'
    ];

    public function getData($id = FALSE)
    {
        if ($id == FALSE) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    public function getDatabyKelas($kelas)
    {
        return $this->where(['kelas' => $kelas])->findAll();
    }

    public function getCountbyKelas($kelas)
    {
        $this->where(['kelas' => $kelas]);
        return $this->countAllResults();
    }
}
