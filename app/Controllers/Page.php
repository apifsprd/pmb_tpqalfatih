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

    public function kelas()
    {
        $data = [
            'title' => "Kelas"
        ];
        return view('page/kelas', $data);
    }

    public function guru()
    {
        $data = [
            'title' => "Guru"
        ];
        return view('page/guru', $data);
    }

    public function pendaftaran()
    {
        $data = [
            'title' => "pendaftaran"
        ];
        return view('page/pendaftaran', $data);
    }

    public function info()
    {
        $data = [
            'title' => "informasi"
        ];
        return view('page/informasi', $data);
    }
}
