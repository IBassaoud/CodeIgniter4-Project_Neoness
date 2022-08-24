<?php namespace App\Models;

use CodeIgniter\Model;


class DashboardModel extends Model
{
    protected $table = 'USERS';
    protected $allowedFields = array('email','password','firstname','lastname','phone','age','weight','height','weight_target','bmi');
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];
    

    public function beforeInsert(array $data)
    {
        $data = $this->adminRoleCheck($data);
        return $data;
    }

    public function beforeUpdate(array $data)
    {
        $data = $this->adminRoleCheck($data);
        return $data;
    }

    public function adminRoleCheck(array $data)
    {
        $user = $this->where('email',$data['email'])->first();
        var_dump($user);
        exit;
        if (isset($data['data']['password']) && $data['data']['password'] != ''){
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_ARGON2I);
        }
        return $data;
    }


}