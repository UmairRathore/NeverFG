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
        elseif (Auth::guard('user')->check() && auth('user')->user()->role_id == 3) /* memorial loved one */ {
            return redirect('/');
        }
        elseif (Auth::guard('user')->check() && auth('user')->user()->role_id == 4) /* business Keeper */ {
            return redirect('/');
        }
        return view('auth.login');
    }

    function postLogin(Request $request)
    {


        $email = $request->email;
        $password = $request->password;

        $email = 'admin@gmail.com';
        $password = '123456';


        if (Auth::guard('user')->attempt(['email' => $email, 'password' => $password], true) && auth('user')->user()->role_id == 1) {

            return view('backend.index');
        } elseif (Auth::guard('user')->attempt(['email' => $email, 'password' => $password], true) && auth('user')->user()->role_id == 2) /* user */ {

            $previousUrl = URL::previous();
            return Redirect::to($previousUrl ?? '/');
        }

        elseif (Auth::guard('user')->attempt(['email' => $email, 'password' => $password], true) && auth('user')->user()->role_id == 3) /* memorial loved one */ {

            $previousUrl = URL::previous();
            return Redirect::to($previousUrl ?? '/');
        }

        elseif (Auth::guard('user')->attempt(['email' => $email, 'password' => $password], true) && auth('user')->user()->role_id == 4) /* business Keeper */ {

            $previousUrl = URL::previous();
            return Redirect::to($previousUrl ?? '/');
        }
        else {


            if (!\auth()->user()) {
                $msg = "Your credentials do not match our record, Please try again.";
                Session::flash('msg', $msg);
                Session::flash('message', 'alert-success');
            } else {
                $msg = trans('lang_data.error');
                Session::flash('msg', $msg);
                Session::flash('message', 'alert-danger');
            }
            return redirect()->back();

        }
    }

}
