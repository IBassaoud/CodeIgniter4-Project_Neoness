<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    

    protected $db;

    public function __construct()
    {
        $this->db = new UserModel();
        // // remove the path "App\models\ to leave User
        // $class = str_replace(__NAMESPACE__ . '\\', '', __CLASS__);
        // // make the $class uppercase and add "S" to make it plural
        // $this->table = strtoupper($class) . "S";
    }

    public function index()
    {
        $data['users'] = $this->db->getAll();
        var_dump($data); 
        echo "<br>";

        // echo view('template/header/header');
        // echo view('login');
        // echo view('template/footer/footer');
    }

    public function getOneUser()
    {
        $id = $_GET['id'];
        return $this->db->get($id);
    }
}
