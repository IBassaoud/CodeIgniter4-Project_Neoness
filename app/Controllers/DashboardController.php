<?php
namespace App\Controllers;

use App\Models\ActivitiesModel;
use App\Models\DashboardModel;

class DashboardController extends BaseController
{
    public function index()
    {
        $data = array();
        // Show all users
        $userModel = model(UserModel::class);
        $data['users'] = $userModel->findAll();
        $data['titleUsers'] = "Listes de tout les utilisateurs :";
        
        
        // Show all activities
        $activitiesModel = model(ActivitiesModel::class);
        $data['activities'] = $activitiesModel->findAll();
        $data['titleActivities'] = "Listes de toutes les activités :";

        // // Show all news
        // $this->table = "NEWS";
        // $data = array();
        // $data['news'] = $model->findAll();

        
        echo view('admin/header', $data);
        echo view('admin/interface');
        echo view('admin/footer');
    }

    public function view($slug = null)
    {
        $model = model(NewsModel::class);

        $data['news'] = $model->getNews($slug);
    }

    public function login()
    {
        $data = array();
        helper(['form']);

        if ($this->request->getMethod() == 'post'){
            // If true, do the validation 
            $rules = [
                "email" => "required|max_length[255]|valid_email",
                "password" => "required|max_length[255]|validateAdmin[email,password]",
            ];

            $errors = [
                'password' => [
                    'validateAdmin' => 'You have nothing to do here, gentleman'
                ],
            ];

            if (! $this->validate($rules, $errors)){
                $data['validation'] = $this->validator;
            } else {
                $model = model(DashboardModel::class);
                $email = $this->request->getVar('email');
                // $data['email'] = $this->request->getVar('email');
                // $user = $model->where('email',$data['email'])->first();
                // var_dump($user);
                // exit;
                $user = $model->where('email',$email)
                              ->first();

                
                $this->setUserSession($user);
                return redirect()->to('/dashboard');
            }
        }

        echo view('admin/header', $data);
        echo view('admin/login');
        echo view('admin/footer');
    }

    private function setUserSession($user)
    {
        $data = [
            'id' => $user['id'],
            'email' => $user['email'],
            'password' => $user['password'],
            'firstname' => $user['firstname'],
            'lastname' => $user['lastname'],
            'age' => $user['age'],
            'phone' => $user['phone'],
            'height' => $user['height'],
            'weight' => $user['weight'],
            'weight_target' => $user['weight_target'],
            'bmi' => $user['bmi'],
            'role' => $user['role'],
            'created_at' => $user['created_at'],
            'updated_at' => $user['updated_at'],
            'isLoggedIn' => true
        ];

        session()->set($data);
        return true;
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/dashboard/login');
    }

}
