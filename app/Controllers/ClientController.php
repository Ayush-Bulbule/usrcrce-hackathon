<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Task;
use App\Models\Auth;

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

    public function profile_view(){

        $model = new Auth();
        $id = session()->get('id');
        echo $id;
        //get user detatails by id
        $user = $model->where('id', $id)->first();


        // Pass the data to the view
        return view('client/profile', ['user' => $user]);
        
    }
    public function get_tasks()
    {
        $model = new Task();
        $id = session()->get('name');
        $tasks = $model->where('client', $id)->findAll();
        
        return view('client/tasks', ['tasks' => $tasks]);
    }

    public function workers()
    {
        $model = new Auth();
        $workers = $model->where('role', 'worker')->findAll();

        return view('client/workers',['workers' => $workers]);
    }


    public function add_req()
    {
        if ($this->request->getMethod() === 'post') {
            // Get the form data
            $title = $this->request->getPost('title');
            $description = $this->request->getPost('description');
            $category = $this->request->getPost('category');
            $name = $this->request->getPost('name');
            
            // Validate the form data
            $validation = $this->validate([
                'title' => 'required',
                'description' => 'required',
                'category' => 'required',
                'name' => 'required'
            ]);

            if (!$validation) {
                // Show the form with validation errors
                $data = [
                    'validation' => $this->validator
                ];
                return view('client/dashboard', $data);
            } else {

                // Insert the data into the database
                $db = \Config\Database::connect();
                $db->table('tasks')->insert([
                    'title' => $title,
                    'description' => $description,
                    'category' => $category,
                    'client' => $name,

                ]);

                // Redirect to the login page
                return redirect()->to(base_url('client/dashboard'));
            }
        } else {
        //     // Show the form
            return view('client/add_task');
        }
    }
}