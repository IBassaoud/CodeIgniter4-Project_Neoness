<?php
namespace App\Controllers;

class ClubsController extends BaseController
{
    public function index()
    {
                
        $data = array();
        echo view('header/header');
        echo "<h2>Clubs? Hmm what is a clubs ?</h2>";
        echo view('Home');
        echo view('footer/footer');
    }
}
