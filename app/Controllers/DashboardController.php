<?php
namespace App\Controllers;

use App\Models\ActivitiesModel;

class DashboardController extends BaseController
{
    public function index()
    {
        $data = array();
        // Show all users
        $userModel = model(UserModel::class);
        $data['users'] = $userModel->findAll();
        
        
        // Show all activities
        $activitiesModel = model(ActivitiesModel::class);
        $data['activities'] = $activitiesModel->findAll();

        // // Show all news
        // $this->table = "NEWS";
        // $data = array();
        // $data['news'] = $model->findAll();

        
        echo view('template/header',$data);
        echo view('admin/interface');
        echo view('template/footer');
    }

    public function view($slug = null)
    {
        $model = model(NewsModel::class);

        $data['news'] = $model->getNews($slug);
    }


//     public function index()
//     {
//         // // Check if an user is logged if not redirect to the login page
//         // if (!session()->get('isLoggedIn')){
//         //     redirect()->to('/');
//         // }

}
