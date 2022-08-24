<?php
namespace App\Validation;
use App\Models\UserModel;

class UserRules
{

    public function validateUser(string $str, string $fields, array $data)
    {
        $model = new UserModel();
        $user = $model->where('email', $data['email'])
                      ->first();
        
        if (!$user){
            return false;
        }
        return password_verify($data['password'], $user['password']);
    }

    public function validateCurrentPass(string $str, string $fields, array $data)
    {
        $model = new UserModel();
        $user = $model->where('email', $data['email'])
                      ->first();
        $checkPass = password_verify($data['current_password'], $user['password']);
        if ($checkPass === false){
            return false;
        }
        return true; 
    }

    public function validateAdmin(string $str, string $fields, array $data)
    {
        $model = new UserModel();
        $user = $model->where('email', $data['email'])
                      ->first();
        
        if (!$user || $user['role'] != 'Administrator'){
            return false;
        }

        return password_verify($data['password'], $user['password']);
    }

    public function checkPassword(string $password,array $data)
    {
        $model = new UserModel();
        $user = $model->where('email', $data['email'])
                      ->first();

        return password_verify($password, $user['password']);
    }
}