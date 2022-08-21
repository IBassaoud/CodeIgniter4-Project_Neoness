<?php
namespace App\Controllers;

class NewsController extends BaseController
{
    public function index()
    {
                
        $data = array();
        echo view('header/header');
        echo "<h2>Big news bruh</h2>";
        echo view('Home');
        echo view('footer/footer');
    }
}
