<?php

namespace App\Http\Controllers\AdminPortal;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //

    public function index(){
        return view('backend.index');
    }
}
