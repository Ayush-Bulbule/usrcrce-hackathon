<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class WorkerController extends BaseController
{
    public function index()
    {
        //

        return view('worker/dashboard');
    }
}
