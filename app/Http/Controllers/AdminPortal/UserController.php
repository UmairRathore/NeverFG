<?php

namespace App\Http\Controllers\AdminPortal;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    //

    public function __construct()
    {
        $this->model = new User();
        $this->setDefaultData();
    }

    private function setDefaultData()
    {
        $this->_viewPath = 'backend.user.';
        $this->data['moduleName'] = 'Users';
    }


    public function index()
    {
        $this->data['users'] = $this->model::select('users.*','roles.name as name')
            ->join('roles','roles.id','=','users.role_id')
            ->get();
        return view($this->_viewPath.'list-user',['users' => $this->data['users']]);
    }
}
