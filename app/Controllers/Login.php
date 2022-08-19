<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        echo view('header/header');
        echo view('authentification/login');
        echo view('footer/footer');
    }
}
