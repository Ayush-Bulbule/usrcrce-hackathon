<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Auth;

class AdminController extends BaseController
{
    public function index()
    {
        
        return view('Admin\dashboard');
    }



    //Login -----------------------------------------------------------------
    public function login_view(){
        //check if user is already login check his role and login
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

        $admin_email ='admin@gmail.com';
        $admin_pasword = 'admin123';

        if ($email != $admin_email || $password != $admin_pasword)
        {
            session()->setFlashdata('error', 'Email not found.');

            return redirect()->to(base_url('admin/login'));
        }

        else if($email == $admin_email && $password == $admin_pasword)
        {
            session()->set([
                'email' =>$email,
                'role' => 'admin',
                'isLoggedIn' => true
            ]);


                return redirect()->to(base_url('admin/dashboard'));
           

        }
    }


    //worker view
    public function workers_view()
   {
    $db = \Config\Database::connect();

    $query = $db->query("SELECT * FROM users WHERE role = 'worker'");

    $results = $query->getResultArray();
    //print_r($results);
    
    
    return view('Admin\workers',['results' => $results]);
   }


   //clients view
   public function clients_view()
   {
    $db = \Config\Database::connect();

    $query = $db->query("SELECT * FROM users WHERE role = 'client'");

    $results = $query->getResultArray();
    //print_r($results);
    return view('Admin\clients',['results' => $results]);
   }
    


}


