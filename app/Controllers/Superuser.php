<?php

namespace App\Controllers;

class Superuser extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "Home"
        ];
        return view('superuser/index', $data);
    }
}
