<?php
namespace App\Controllers;

class ActivitiesController extends BaseController
{
    public function index()
    {
                
        $data = array();
        echo view('header/header');
        echo "<h2>All the activities are printed here for your good health obviously, yes we do care !</h2>";
        echo view('Home');
        echo view('footer/footer');
    }
}
