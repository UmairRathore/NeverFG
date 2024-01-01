<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    //
    protected $userModel;

    public function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);



    }

    public function showSignUpForm()
    {
        return view('auth.signup');
    }

    public function SignUp(Request $request)
    {

    }

    public function showForgetPassForm()
    {
        return view('auth.forget-password');
    }

    public function forgetPassword(Request $request)
    {

    }


}
