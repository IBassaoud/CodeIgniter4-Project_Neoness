<?php
namespace App\Controllers;

class ActivitiesController extends BaseController
{
    public function index()
    {
                
        $data = array();
        $data['catch_phrase'] = "<h2>All the activities are printed here for your good health obviously, yes we do care !</h2>";
        echo view('header',$data);
        echo view('Home');
        echo view('footer');
    }

    public function getActivity($id = null)
    {
        $model = model(ActivitiesModel::class);

        if(isset($_GET['id'])){
            $id = $_GET['id'];
        }
        
        if ($id != null){
            $id = $id;
        }

        $data = $model->findActivities($id);

        if (empty($data)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the activity : ' . $id);
        }

        echo view('header',$data);
        echo view('activities/detail');
        echo view('footer');
    }

    public function getActivities()
    {
        $model = model(ActivitiesModel::class);

        $data = $model->findActivities();

        echo view('header',$data);
        echo view('activities/list');
        echo view('footer');
    }
}
