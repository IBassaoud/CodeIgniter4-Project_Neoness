<?php

namespace App\Controllers;

class Register extends BaseController
{
    public function index()
    {
        echo view('header/header');
        echo view('authentification/register');
        echo view('footer/footer');
    }
}
