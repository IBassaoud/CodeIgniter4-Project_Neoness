<?php
namespace App\Controllers;

class CoachingController extends BaseController
{
    public function index()
    {
                
        $data = array();
        $data['catch_phrase'] = "<h2>Our coaches are the best human being you will ever meet, how lucky you are !!</h2>";
        echo view('template/header',$data);
        echo view('Home');
        echo view('template/footer');
    }
}
