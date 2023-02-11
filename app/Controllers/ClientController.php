<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Task;

class ClientController extends BaseController
{
    public function index()
    {
        //
        return view('Client/dashboard');
    }
    public function addTask(){
        $model = new Task();


        
    }
}
