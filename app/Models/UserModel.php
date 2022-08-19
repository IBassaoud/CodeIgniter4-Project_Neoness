<?php namespace App\Models;

use CodeIgniter\Model;


class UserModel extends Model
{
    protected $table = 'USERS';
    
    public function getAll()
    {
        return $this->findAll();
    }

    public function get($id)
    {
        // here we select just the age column
        $this->select('*');
        $this->where('id', $id);
        $q = $this->get('USERS');
        return $q->result_array();
        // return $this->get_where(TRUE, $id);
    }


}