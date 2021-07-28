<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "Home"
        ];
        return view('user/index', $data);
    }
}
