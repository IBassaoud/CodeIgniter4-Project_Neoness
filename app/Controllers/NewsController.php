<?php
namespace App\Controllers;

class NewsController extends BaseController
{
    public function index()
    {
                
        $data = array();
        $data['catch_phrase'] = "<h2>Hey bruh, there are Big news in here</h2>";
        echo view('template/header', $data);
        echo view('Home');
        echo view('template/footer');
    }
}
