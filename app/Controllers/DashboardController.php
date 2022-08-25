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
        $data['titleUsers'] = "Listes de tout les utilisateurs";
        
        
        // Show all activities
        $activitiesModel = model(ActivitiesModel::class);
        $data['activities'] = $activitiesModel->findAll();
        $data['titleActivities'] = "Listes de toutes les activités";

        // // Show all news
        // $this->table = "NEWS";
        // $data = array();
        // $data['news'] = $model->findAll();

        
        echo view('admin/header', $data);
        echo view('admin/interface');
        echo view('admin/footer');
    }

    // Return all users 
    public function users()
    {
        $data = array();
        // Show all users
        $userModel = model(UserModel::class);
        $data['users'] = $userModel->findAll();
        $data['titleUsers'] = "Listes de tout les utilisateurs";

        echo view('admin/header', $data);
        echo view('admin/users/list');
        echo view('admin/footer');
    }

    // return one specific user
    public function getUser()
    {
        
    }
    
    // Return all activities 
    public function activities()
    {
        $data = array();
        // Show all activities
        $activitiesModel = model(ActivitiesModel::class);
        $data['activities'] = $activitiesModel->findAll();
        $data['titleActivities'] = "Listes de toutes les activités";

        echo view('admin/header', $data);
        echo view('admin/activities/list');
        echo view('admin/footer');
    }
    
    // return one specific activity
    public function getActivity()
    {

    }
    
    // Return all news
    public function news()
    {
        $data = array();
        // Show all news
        $userModel = model(UserModel::class);
        $data['news'] = $userModel->findAll();
        $data['titleNews'] = "Listes de tout les News";

        echo view('admin/header', $data);
        echo view('admin/news/list');
        echo view('admin/footer');
    }
    
    // return one specific New
    public function getNew()
    {

    }

    // Return all Clubs
    public function clubs()
    {
        $data = array();
        // Show all news
        $userModel = model(UserModel::class);
        $data['news'] = $userModel->findAll();
        $data['titleNews'] = "Listes de tout les News";

        echo view('admin/header', $data);
        echo view('admin/clubs/list');
        echo view('admin/footer');
    }
    
    // return one specific New
    public function getClub()
    {

    }

    // Return all Formules
    public function formules()
    {
        $data = array();
        // Show all news
        $userModel = model(UserModel::class);
        $data['news'] = $userModel->findAll();
        $data['titleNews'] = "Listes de tout les News";

        echo view('admin/header', $data);
        echo view('admin/formules/list');
        echo view('admin/footer');
    }
    
    // return one specific New
    public function getFormule()
    {

    }

    // Login validation method
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
                    'validateAdmin' => 'Email or password is incorrect'
                ],
            ];

            if (! $this->validate($rules, $errors)){
                $data['validation'] = $this->validator;
            } else {
                $model = model(DashboardModel::class);
                $email = $this->request->getVar('email');
                $user = $model->where('email',$email)
                              ->first();

                
                $this->setUserSession($user);
                return redirect()->to('/dashboard');
            }
        }

        echo view('admin/login', $data);
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
