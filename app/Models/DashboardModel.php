<?php namespace App\Models;

use CodeIgniter\Model;


class DashboardModel extends Model
{
    protected $table = '';
    // protected $allowedFields = array('id','name','spend_calories','person_weight','created_at','updated_at');
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];
    

    public function beforeInsert(array $data)
    {

    }

    public function beforeUpdate(array $data)
    {

    }


}