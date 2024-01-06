<?php

namespace App\Http\Controllers\AdminPortal;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function edit($id)
    {
        $admin = User::find($id);
        return view('backend.admin.edit-admin',[ 'admin'=> $admin]);
    }

    public function update(Request $request, $id)
    {

        $admin = User::find($id);
        $admin->first_name = $request->input('first_name');
        $admin->last_name = $request->input('last_name');
        if ($request->filled('email')) {
            $admin->email = $request->input('email');
        }

        if($request->filled('password') ){
            $admin->password = hash::make($request->password);
        }
        //        dd($admin);

        $check = $admin->update();
        $name = $admin->first_name . '' . $admin->last_name;
        if ($check) {
            $msg = $name . 'Profile updated successfully';
            Session::flash('message', $msg);
        } else {
            $msg = trans('lang_data.error');
            Session::flash('message', $msg);
        }
        return redirect()->route('backend.list-user');
    }
}
