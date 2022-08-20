<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController extends BaseController
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
        $data = $this->db->getAll();
        var_dump($data); 
        echo "<br>";
        echo view('header/header');
        echo view('authentification/login');
        echo view('footer/footer');

    }

    public function getOneUser()
    {
        // $id = $_GET['id'];
        $quer = $this->db->findBy(["id" => 1]);
        var_dump($quer);
    }
}
