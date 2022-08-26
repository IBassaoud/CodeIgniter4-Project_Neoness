<?php
namespace App\Controllers;

class Home extends BaseController
{
    public function index($id = null)
    {
        $data = array();
        if ($id !== null){
            $data['id'] = $id;
        }
        echo view('header', $data);
        echo view('Home');
        echo view('footer');
    }
}
