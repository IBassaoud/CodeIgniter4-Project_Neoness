<?php
namespace App\Controllers;

class CoachingController extends BaseController
{
    public function index()
    {
                
        $data = array();
        echo view('header/header');
        echo "<h2>Our coaches are the best human being you will ever meet, how lucky you are !!</h2>";
        echo view('Home');
        echo view('footer/footer');
    }
}
