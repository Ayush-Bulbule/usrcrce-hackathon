<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Task;
use App\Models\Auth;

class WorkerController extends BaseController
{
    public function index()
    {
        //

        return view('worker/dashboard');
    }
    public function profile_view(){
        $model = new Auth();
        $id = session()->get('id');
        echo $id;
        //get user detatails by id
        $user = $model->where('id', $id)->first();


        // Pass the data to the view
        return view('worker/profile', ['user' => $user]);
    }
    public function request_view(){
    $db = \Config\Database::connect();

    $query = $db->query("SELECT * FROM tasks ");

    $results = $query->getResultArray();
    //print_r($results);
    
    
    return view('worker\request',['results' => $results]);
    }
}
