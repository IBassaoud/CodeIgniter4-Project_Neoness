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
        echo view('template/header', $data);
        echo view('Home');
        echo view('template/footer');
    }
}
