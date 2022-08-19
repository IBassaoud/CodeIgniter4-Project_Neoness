<?php

namespace App\Controllers;

class Controller extends BaseController
{
    public function index()
    {
        echo view('header/header');
        echo view('login');
        echo view('footer/footer');
    }
}
