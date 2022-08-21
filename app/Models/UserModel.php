<?php namespace App\Models;

use CodeIgniter\Model;


class UserModel extends Model
{
    protected $table = 'USERS';
    protected $allowedFields = array('email','password','firstname','lastname','phone','age','weight','height','weight_target','bmi');
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];
    
    // public function getAll()
    // {
    //     return $this->findAll();
    // }

    public function beforeInsert(array $data)
    {
        $data = $this->passwordHash($data);
        return $data;
    }

    public function beforeUpdate(array $data)
    {
        $data = $this->passwordHash($data);
        return $data;
    }

    public function passwordHash(array $data)
    {
        if (isset($data['data']['password']) && $data['data']['password'] != ''){
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_ARGON2I);
        }
        return $data;
    }

}