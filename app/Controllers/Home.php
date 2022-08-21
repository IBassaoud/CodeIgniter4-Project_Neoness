<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = array();

        echo view('header/header');
        echo view('Home');
        echo view('footer/footer');
    }
}
