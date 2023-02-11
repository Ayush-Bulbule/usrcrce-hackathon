<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Auth;

class AdminController extends BaseController
{
    public function index()
    {
        return view('admin/dashboard');
    }

    //Login -----------------------------------------------------------------
    public function login_view(){
        if(session()->get('isLoggedIn')){
            if(session()->get('role')=='admin'){
                return redirect()->to(base_url('admin/dashboard'));
            }
        }
        return view('Admin\login');
    }
    public function login()
    {
        helper(['form', 'url']);

        $model = new Auth();

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $admin_email = "admin@gmail.com";
        $admin_pasword = "admin123";

        if ($email != $admin_email && $password != $admin_pasword)
        {
            session()->setFlashdata('error', 'Email not found.');

            return redirect()->to(base_url('admin/login'));
        }
        else if($email == $admin_email && $password == $admin_pasword)
        {
            session()->set([
                'id'=>1,
                'email' => $email,
                'name' => 'work connect admin',
                'role' => 'admin',
                'isLoggedIn' => true
            ]);
                return redirect()->to(base_url('admin/dashboard'));

        }
    }

    //Worker View
    public function worker_view(){
        $model = new Auth();
        $role = 'worker';

        $data['records'] = $model->findAll();
        print_r( $data);
        foreach($data as $row)
        {
            echo $row;
        }


        return view('admin/workers');
    }


    //Client View
    public function client_view(){
        return view('admin/clients');
    }
}


