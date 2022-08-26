<?php
namespace App\Controllers;

class FormulesController extends BaseController
{
    public function index()
    {
                
        $data = array();
        $data['catch_phrase'] = "<h2>Formule here in order to milk people</h2>";
        echo view('header',$data);
        echo view('Home');
        echo view('footer');
    }
}
