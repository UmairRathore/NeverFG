<?php

namespace App\Http\Controllers\AdminPortal;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    //

    public function __construct()
    {
        $this->_model = new User();
        $this->setDefaultData();
    }

    private function setDefaultData()
    {
        $this->_viewPath = 'backend.user.';
        $this->data['moduleName'] = 'Users';
    }


    public function index()
    {
        $this->data['users'] = $this->_model::select('users.*', 'roles.name as name')
            ->join('roles', 'roles.id', '=', 'users.role_id')
            ->get();
        return view($this->_viewPath . 'list-user', ['users' => $this->data['users']]);
    }


    public function edit($id)
    {
        $this->data['users'] = $this->_model::find($id);
        return view($this->_viewPath . 'edit-user', ['users' => $this->data['users']]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
            'gender' => 'required',
            'dob' => 'required',
        ]);
        $this->data['user'] = $this->_model::find($id);
        $this->data['user']->first_name = $request->input('first_name');
        $this->data['user']->last_name = $request->input('last_name');
        $this->data['user']->email = $request->input('email');
        if ($request->filled('password')) {
            $this->data['user']->password = hash::make($request->password);
        }
        $this->data['user']->dob = $request->input('dob');
        $this->data['user']->gender = $request->input('gender');
//        dd($this->data['user']);
        $check = $this->data['user']->update();

        $name = $this->data['user']->first_name . '' . $this->data['user']->last_name;
        if ($check) {
            $msg = $name . ' Registered successfully';
            Session::flash('msg', $msg);
            Session::flash('message', 'alert-success');
        } else {
            $msg = trans('lang_data.error');
            Session::flash('msg', $msg);
            Session::flash('message', 'alert-danger');
        }
        return redirect()->back();
    }


    public function destroy($id)
    {
        $this->data['users'] = $this->_model::find($id);
        $check = $this->data['users']->delete();

        if ($check) {
            $msg = 'User deleted successfully';
            Session::flash('info_deleted', $msg);
        }
        return redirect()->back();
    }
}
