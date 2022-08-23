<?php namespace App\Models;

use CodeIgniter\Model;


class ActivitiesModel extends Model
{
    protected $table = 'ACTIVITIES';
    protected $allowedFields = array('id','name','spend_calories','person_weight','created_at','updated_at');
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];
    

    public function beforeInsert(array $data)
    {

    }

    public function beforeUpdate(array $data)
    {

    }

    public function findActivities($id = false)
    {
        if ($id === false){
            $data['activities'] = $this->findAll();
            $data['title'] = "Listes de tout les activités sportives";
        } else {
            $data['activities'] = $this->where(['id' => $id])->first();
            // setting a length of 1 in case it returns only one user
            $data['length'] = 1;
            $data['title'] = "Ton activité préféré";
        }

        
        if (isset($data['length'])){
            $length = $data['length'];
        } else {
            $data['length'] = sizeof($data['activities']);
        }

        return $data;
    }





}