<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "Login"
        ];
        return view('auth/login', $data);
    }

    public function register()
    {
        $data = [
            'title' => "Register"
        ];
        return view('auth/register', $data);
    }

    public function user()
    {
        $data = [
            'title' => "Home"
        ];
        return view('user/index', $data);
    }
}
