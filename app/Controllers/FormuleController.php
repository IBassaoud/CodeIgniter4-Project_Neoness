<?php
namespace App\Controllers;

class FormuleController extends BaseController
{
    public function index()
    {
                
        $data = array();
        echo view('header/header');
        echo "<h2>Formule here in order to milk people</h2>";
        echo view('Home');
        echo view('footer/footer');
    }
}
