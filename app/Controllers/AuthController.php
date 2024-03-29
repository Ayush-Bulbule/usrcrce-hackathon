<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Auth;

class AuthController extends BaseController
{
    public function index()
    {
        //
    }

    public function register_view(){
        
        return view('Auth\register');
    }
    //to handle registration of user with fileds - 'name','email','password','age','role','phone','address','work_cat','idproof
    public function register()
    {
        if ($this->request->getMethod() === 'post') {
            // Get the form data
            $name = $this->request->getPost('name');
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $age = $this->request->getPost('age');
            $role = $this->request->getPost('role');
            $phone = $this->request->getPost('phone');
            $address = $this->request->getPost('address');
            $work_cat = $this->request->getPost('work_cat');
            $idproof = $this->request->getFile('idproof');

            // Validate the form data
            $validation = $this->validate([
                'name' => 'required|min_length[3]',
                'email' => 'required|valid_email',
                'password' => 'required|min_length[8]',
                'age' => 'required|is_numeric',
                'role' => 'required',
                'phone' => 'required',
                'address' => 'required',
                'work_cat' => 'required',
                'idproof' => 'uploaded[idproof]'
            ]);

            if (!$validation) {
                // Show the form with validation errors
                $data = [
                    'validation' => $this->validator
                ];
                return view('auth/register', $data);
            } else {
                // Upload the file
                $idproof->move(ROOTPATH . 'public/uploads/');

                // Insert the data into the database
                $db = \Config\Database::connect();
                $db->table('users')->insert([
                    'name' => $name,
                    'email' => $email,
                    'password' => $password,
                    'age' => $age,
                    'role' => $role,
                    'phone' => $phone,
                    'address' => $address,
                    'work_cat' => $work_cat,
                    'idproof' => $idproof->getName()
                ]);

                // Redirect to the login page
                return redirect()->to(base_url('auth/login'));
            }
        } else {
        //     // Show the form
            return view('auth/register');
        }
    }




    //Login -----------------------------------------------------------------
    public function login_view(){
        //check if user is already login check his role and login
        if(session()->get('isLoggedIn')){
            if(session()->get('role')=='client'){
                return redirect()->to(base_url('client/dashboard'));
            }else{
                return redirect()->to(base_url('worker/dashboard'));
            }
        }
        
        return view('Auth\login');
    }
    public function login()
    {
        helper(['form', 'url']);

        $model = new Auth();

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $user = $model->where('email', $email)->first();

        echo $email;

        if (!$user)
        {
            session()->setFlashdata('error', 'Email not found.');

            return redirect()->to(base_url('auth/login'));
        }
        else if (!$password == $user['password'])
        {
            session()->setFlashdata('error', 'Incorrect password.');

            return redirect()->to(base_url('auth/login'));
        }
        else
        {
            session()->set([
                'id'=>$user['id'],
                'email' => $user['email'],
                'role' => $user['role'],
                'name'=>$user['name'],
                'isLoggedIn' => true
            ]);

            if($user['role']=='client'){

                return redirect()->to(base_url('client/dashboard'));
            }else{
                return redirect()->to(base_url('worker/dashboard'));

            }

        }
    }

    //Logout
    public function logout()
    {
        session()->destroy();
        return redirect()->to('auth/login');
    }

    //update user
    public function update_user($id)
    {
        $model = new Auth();

        $data = [
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
            'age' => $this->request->getVar('age'),
            'role' => $this->request->getVar('role'),
            'phone' => $this->request->getVar('phone'),
            'address' => $this->request->getVar('address'),
            'work_cat' => $this->request->getVar('work_cat'),
            'idproof' => $this->request->getVar('idproof')
        ];

        $model->update($id, $data);

        return redirect()->to(base_url('auth/login'));
    }

    //get all users
    public function get_users()
    {
        $model = new Auth();

        $data['users'] = $model->findAll();

        return view('users', $data);
    }

    public function profile_view(){
        $model = new Auth();
        $id = session()->get('id');
        echo $id;
        //get user detatails by id
        $user = $model->where('id', $id)->first();


        // Pass the data to the view
        return view('auth/profile', ['user' => $user]);
        
    }
    //to handle registration of user with fileds - 'name','email','password','age','role','phone','address','work_cat','idproof
    public function profile()

    {
        helper(['form', 'url']);
        

        $model = new Auth();
        $id = 1;

        $data = [
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
            'phone' => $this->request->getVar('phone'),
            'address' => $this->request->getVar('address'),
        ];

        $model->update($id, $data);

        return redirect()->to(base_url('auth/dashboard'));
      
    }
}


