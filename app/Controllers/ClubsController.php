<?php
namespace App\Controllers;

class ClubsController extends BaseController
{
    public function index()
    {
                
        $data = array();
        $data['catch_phrase'] = "<h2>Clubs? Hmm what is a club ?</h2>";
        echo view('template/header',$data);
        echo view('Home');
        echo view('template/footer');
    }
}
