<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{

    public function logout()
    {
        $check = Auth::guard('user')->logout();
        if ($check == null) {
//            return redirect('login');
            return redirect('/');
        }

    }

    //Login Page
    function Login()
    {
        if (Auth::guard('user')->check() && auth('user')->user()->role_id == 1) /* admin */{
            return redirect('/dashboard');
        } elseif (Auth::guard('user')->check() && auth('user')->user()->role_id == 2) /* user */ {
            return redirect('/');
        }

        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('user')->attempt($credentials, true)) {
            $user = auth('user')->user();

            if ($user->role_id == 1) {
                return view('backend.index');
            }if ($user->role_id == 2)
                return redirect()->route('index');
            {

            }
        }

        // If authentication fails
        $msg = "Your credentials do not match our records. Please try again.";
        Session::flash('msg', $msg);
        Session::flash('message', 'alert-danger');
        return redirect()->back();
    }
}
