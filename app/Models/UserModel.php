<?php namespace App\Models;

use CodeIgniter\Model;


class UserModel extends Model
{
    protected $table = 'USERS';
    protected $allowedFields = array('email','password','firstname','lastname','phone','age','weight','height','weight_target','bmi');
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];
    

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

    public function findUsers($id = false)
    {
        if ($id === false){
            $data['users'] = $this->findAll();
            $data['title'] = "Les données de tout les utilisateurs";
            $length = sizeof($data['users']);

            // removing the "0" and the "." if it's the last character in integer values
            if (!empty($data['users'])){
                for ($i=0 ;$i < $length; $i++){
                    $data['users'][$i]['weight_target'] = rtrim($data['users'][$i]['weight_target'], 0);
                    $data['users'][$i]['weight_target'] = rtrim($data['users'][$i]['weight_target'], '.');

                    $data['users'][$i]['weight'] = rtrim($data['users'][$i]['weight'], 0);
                    $data['users'][$i]['weight'] = rtrim($data['users'][$i]['weight'], '.');

                    $data['users'][$i]['bmi'] = rtrim($data['users'][$i]['bmi'], 0);
                    $data['users'][$i]['bmi'] = rtrim($data['users'][$i]['bmi'], ".");
                }
            }
        } else {
            $data['users'] = $this->where(['id' => $id])->first();
            $data['title'] = "Les données d'un seul utilisateur";

            if (!empty($data['users'])){
                $data['users']['weight_target'] = rtrim($data['users']['weight_target'], 0);
                $data['users']['weight_target'] = rtrim($data['users']['weight_target'], '.');

                $data['users']['weight'] = rtrim($data['users']['weight'], 0);
                $data['users']['weight'] = rtrim($data['users']['weight'], '.');

                $data['users']['bmi'] = rtrim($data['users']['bmi'], 0);
                $data['users']['bmi'] = rtrim($data['users']['bmi'], ".");
            }
        }

        return $data;
    }

}