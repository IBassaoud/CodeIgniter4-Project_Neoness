<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController extends BaseController
{

    public function index()
    {
        $data = array();
        helper(['form']);

        if ($this->request->getMethod() == 'post'){
            // If true, do the validation 
            $verification = [
                "email" => "required|max_length[255]|valid_email",
                "password" => "required|max_length[255]|validateUser[email,password]",
            ];

            $errors = [
                'password' => [
                    'validateUser' => 'Email or password is incorrect'
                ],
            ];

            if (! $this->validate($verification, $errors)){
                $data['validation'] = $this->validator;
            } else {
                $model = model(UserModel::class);

                $user = $model->where('email', $this->request->getVar('email'))
                              ->first();

                
                $this->setUserSession($user);
                return redirect()->to('home');
            }
        }
        echo view('template/header', $data);
        echo view('authentification/login');
        echo view('template/footer');
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
    
    public function register()
    {
        $data = array();
        helper(['form']);

        if ($this->request->getMethod() == 'post'){
            // If true, do the validation 
            $verification = [
                "email" => "required|min_length[5]|max_length[255]|valid_email|is_unique[USERS.email]",
                "password" => "required|min_length[3]|max_length[255]",
                "repeat_password" => "matches[password]",
                "firstname" => "required|min_length[3]|max_length[255]",
                "lastname" => "required|min_length[3]|max_length[255]",
                "age" => "max_length[3]",
                "phone" => "min_length[8]|max_length[20]",
                "height" => "required|max_length[3]",
                "weight" => "required|max_length[5]",
                "weight_target" => "max_length[5]"
            ];

            if (! $this->validate($verification)){
                $data['validation'] = $this->validator;
            } else {
                // otherwise store the user in the database
                $model = model(UserModel::class);

                $newUser = [
                    "email" => $this->request->getVar('email'),
                    "password" => $this->request->getVar('password'),
                    "firstname" => $this->request->getVar('firstname'),
                    "lastname" => $this->request->getVar('lastname'),
                    "age" => $this->request->getVar('age'),
                    "phone" => $this->request->getVar('phone'),
                    "height" => $this->request->getVar('height'),
                    "weight" => $this->request->getVar('weight'),
                    "weight_target" => $this->request->getVar('weight_target'),
                    "bmi" => $this->request->getVar('bmi'),
                ];
                $model->save($newUser);
                $session = session();
                $session->setFlashdata('success','Successfully registered');
                return redirect()->to('register');
            }
        }

        echo view('template/header', $data);
        echo view('authentification/register');
        echo view('template/footer');

    }

    public function profile()
    {
        $data = array();
        helper(['form']);
        
        $model = model(UserModel::class);
        $id = session()->get('id');
        // $data['user'] = $model->where('id', $id)->first();

        if ($this->request->getMethod() == 'post'){
            // If true, do the validation 
            $verification = [
                "firstname" => "required|min_length[3]|max_length[255]",
                "lastname" => "required|min_length[3]|max_length[255]",
                "age" => "required|max_length[3]",
                "phone" => "required|min_length[8]|max_length[20]",
                "height" => "required|max_length[3]",
                "weight" => "required|max_length[5]",
                "weight_target" => "max_length[5]"
            ];

            $errorsUpdate = [
                'current_password' => [
                    'validateCurrentPass' => 'Current password is incorrect'
                ],
            ];

            if($this->request->getPost('password') != ''){
                // $currentPass = $data['user']['password'];
                // $pass = $this->request->getPost('current_password');
                // $verify_pass = password_verify($pass, $currentPass);
                
                $verification += [
                    "password" => "required|min_length[3]|max_length[255]",
                    "repeat_password" => "matches[password]",
                    "current_password" => "validateCurrentPass[current_password]",
                ];                
            }

            if (! $this->validate($verification,$errorsUpdate)){
                $data['validation'] = $this->validator;
            } else {
                $updateUser = array(
                    "id" => $id,
                    "firstname" => $this->request->getPost('firstname'),
                    "lastname" => $this->request->getPost('lastname'),
                    "age" => $this->request->getPost('age'),
                    "phone" => $this->request->getPost('phone'),
                    "height" => $this->request->getPost('height'),
                    "weight" => $this->request->getPost('weight'),
                    "weight_target" => $this->request->getPost('weight_target'),
                    "bmi" => $this->request->getPost('bmi')
                );

                if($this->request->getPost('password') != ''){
                    $updateUser['password'] = $this->request->getPost('password');
                }

                $model->update($id, $updateUser);

                $session = session();
                $session->set($updateUser);
                $session->setFlashdata('success','Successfully updated');
                return redirect()->to('profile');
            }
        }

        echo view('template/header', $data);
        echo view('user/profile');
        echo view('template/footer');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }

    public function getUser($id = null)
    {
        $model = model(UserModel::class);

        if(isset($_GET['id'])){
            $id = $_GET['id'];
        }

        if ($id != null){
            $id = $id;
        }

        $data = $model->findUsers($id);

        if (empty($data['users'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the user : ' . $id);
        }

        echo view('template/header',$data);
        echo view('user/detail');
        echo view('template/footer');
    }

    public function getUsers()
    {
        $model = model(UserModel::class);

        $data = $model->findUsers();

        echo view('template/header',$data);
        echo view('user/list');
        echo view('template/footer');
    }


}
