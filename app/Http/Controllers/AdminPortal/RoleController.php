<?php

namespace App\Http\Controllers\AdminPortal;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{
    //
    public function __construct()
    {
        $this->model = new Role();
        $this->setDefaultData();
    }

    private function setDefaultData()
    {
        $this->_viewPath = 'backend.role.';
        $this->data['moduleName'] = 'Roles';
    }


    public function index()
    {
        $this->data['roles'] = Role::all();
        return view($this->_viewPath .'list-role',['roles' => $this->data['roles']]);
    }

    public function create()
    {
        return view($this->_viewPath . 'create-role');

    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->with('fields_empty', 'FIll all the required fields!')
                ->withErrors($validator)
                ->withInput();
        }

        $this->data['roles'] = $this->model;
        $this->data['roles']->name = $request->input('name');
        $check = $this->data['roles']->save();
        if ($check) {
            $msg = 'Role Added successfully';
//            Session::flash('msg', $msg);
            Session::flash('message', $msg);
        } else {
            $msg = 'Role not Added successfully';
            Session::flash('msg', $msg);
            Session::flash('required fields empty', $msg);
        }
        return redirect()->back();
    }

    public function edit($id)
    {
        $this->data['roles'] = $this->model::where('id',$id)->first();
        return view($this->_viewPath . 'edit-role',['roles' => $this->data['roles']]);
    }

    public function update(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->with('fields_empty', 'FIll all the required fields!')
                ->withErrors($validator)
                ->withInput();
        }

        $this->data['roles'] = $this->model::find($id);
        $this->data['roles']->name = $request->input('name');
        $check = $this->data['roles']->save();
        if ($check) {
            $msg = 'Role updated successfully';
//            Session::flash('msg', $msg);
            Session::flash('message', $msg);
        } else {
            $msg = 'Role not updated successfully';
//            Session::flash('msg', $msg);
            Session::flash('message', $msg);
        }
        return redirect()->back();
    }

    public function destroy($id)
    {
        $this->data['roles'] = $this->model::find($id);
        $check = $this->data['roles']->delete();
        if (!$check)
          {
                $msg = 'Role deleted successfully';
//            Session::flash('msg', $msg);
                Session::flash('message', $msg);
            } else {
                $msg = 'Role not deleted successfully';
//                Session::flash('msg', $msg);
                Session::flash('required fields empty', $msg);
            }
    return redirect()->back();
    }



    }

