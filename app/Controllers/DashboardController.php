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
        $data['titleUsers'] = "Liste de tout les utilisateurs";
        
        
        // Show all activities
        $activitiesModel = model(ActivitiesModel::class);
        $data['activities'] = $activitiesModel->findAll();
        $data['titleActivities'] = "Liste de toutes les activités";

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
        helper(['form']);

        // Show all users
        $userModel = model(UserModel::class);
        $data['users'] = $userModel->findAll();
        $data['users'] = $this->rtrimZeroAndDot($data['users'], "users");
        $data['titleUsers'] = "Liste de tout les utilisateurs";

        $action = $this->request->getPost("action");
        $actionForm = $this->request->getPost("actionform");
        $id = $this->request->getPost("id");

        if ($this->request->getMethod() == 'post' && $actionForm === "edit"){ 
                $editUser = array(
                    "id" => $id,
                    "email" => $this->request->getPost('email'),
                    "firstname" => $this->request->getPost('firstname'),
                    "lastname" => $this->request->getPost('lastname'),
                    "age" => $this->request->getPost('age'),
                    "phone" => $this->request->getPost('phone'),
                    "height" => $this->request->getPost('height'),
                    "weight" => $this->request->getPost('weight'),
                    "weight_target" => $this->request->getPost('weight_target'),
                    "bmi" => $this->request->getPost('bmi'),
                    "role" => $this->request->getPost('role')
                );

                $data['dataAction'] = $editUser;
                $userModel->update($id, $editUser);
                // $_POST['action'] = 'edit';
                $action = 'edit';
                session()->setFlashdata('success','Successfully edited');
        }
        // }


        if ($this->request->getMethod() == 'post'){            
            $user = $userModel->where('id',$id)->first();

            
            // If the action desired the front end client is to visualize the details of the user do...
            if ($action === "visualize"){
                $data['dataAction'] = $user;
                $data['users'] = $userModel->findAll();
                $data['users'] = $this->rtrimZeroAndDot($data['users'], "users");
                $data['dataAction'] = $this->rtrimZeroAndDot($data['dataAction'], "user");
            }
            
            // If the action desired the front end client is to edit the details of the user...
            if ($action === "edit"){
                $data['dataAction'] = $user;
                $data['users'] = $userModel->findAll();
                $data['users'] = $this->rtrimZeroAndDot($data['users'], "users");
                $data['dataAction'] = $this->rtrimZeroAndDot($data['dataAction'], "user");
            }

            // If the action desired the front end client is to delete the user...
            if ($action === "delete"){
                $userModel->delete(['id' => $id]);
                $data['users'] = $userModel->findAll();
                $data['users'] = $this->rtrimZeroAndDot($data['users'],"users");
                session()->setFlashdata('successDelete','Successfully deleted the user');


            }
        }
        echo view('admin/header', $data);
        echo view('admin/users/list');

        if ($action === "visualize"){
            echo view('admin/users/visualize');
        }
        if ($action === "edit"){
            echo view('admin/users/edit');
        }
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
        $data['titleActivities'] = "Liste de toutes les activités";

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
        $data['titleNews'] = "Liste de tout les News";

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
        $data['titleNews'] = "Liste de tout les News";

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
        $data['titleNews'] = "Liste de tout les News";

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

    private function rtrimZeroAndDot($data, string $usr)
    {
        if($usr === "users"){
        $length = sizeof($data);
        for ($i = 0 ; $i < $length ; $i++) {
            $data[$i]['weight'] = rtrim($data[$i]['weight'], 0);
            $data[$i]['weight'] = rtrim($data[$i]['weight'], ".");
            $data[$i]['weight_target'] = rtrim($data[$i]['weight_target'], 0);
            $data[$i]['weight_target'] = rtrim($data[$i]['weight_target'], ".");
            $data[$i]['bmi'] = rtrim($data[$i]['bmi'], 0);
            $data[$i]['bmi'] = rtrim($data[$i]['bmi'], ".");
        }
        } 
        if ($usr === 'user') {
            $data['weight'] = rtrim($data['weight'], 0);
            $data['weight'] = rtrim($data['weight'], ".");
            $data['weight_target'] = rtrim($data['weight_target'], 0);
            $data['weight_target'] = rtrim($data['weight_target'], ".");
            $data['bmi'] = rtrim($data['bmi'], 0);
            $data['bmi'] = rtrim($data['bmi'], ".");
        }

        return $data;
    }

}
