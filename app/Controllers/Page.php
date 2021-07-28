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

    public function home()
    {
        $data = [
            'title' => "Home"
        ];
        return view('page/index', $data);
    }
}
