<?php
namespace App\Controllers;

class DashboardController extends BaseController
{
    public function index()
    {
        // // Check if an user is logged if not redirect to the login page
        // if (!session()->get('isLoggedIn')){
        //     redirect()->to('/');
        // }

                
        $data = array();
        echo view('header/header');
        echo "<h2>Dashboard baby</h2>";
        echo view('Home');
        echo view('footer/footer');
    }
}
