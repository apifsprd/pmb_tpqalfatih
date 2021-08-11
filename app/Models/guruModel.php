<?php

namespace App\Models;

use CodeIgniter\Model;

class guruModel extends Model
{
    protected $table = 'tbguru';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama',
        'jabatan'
    ];

    public function getData($id = FALSE)
    {
        if ($id == FALSE) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
