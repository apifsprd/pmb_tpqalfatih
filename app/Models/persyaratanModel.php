<?php

namespace App\Models;

use CodeIgniter\Model;

class persyaratanModel extends Model
{
    protected $table = 'tbpersyaratan';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'namaPersyaratan'
    ];

    public function getData($id = FALSE)
    {
        if ($id == FALSE) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
