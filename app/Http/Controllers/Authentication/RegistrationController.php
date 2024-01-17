<?php

namespace App\Http\Controllers\Authentication;

use Faker\Factory as Faker;


use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\Coupon;
use App\Models\Package;
use App\Models\User;
use App\Models\UserMemorial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class RegistrationController extends Controller
{
    //

    protected $_viewPath;
    protected $data = array();

    public function __construct()
    {
        $this->_model = new User();
        $this->user_memorial_model = new UserMemorial();
        $this->card_model = new Card();
        $this->coupon_model = new Coupon();
        $this->package_model = new Package();
        $this->setDefaultData();
    }

    private function setDefaultData()
    {
        $this->_viewPath = 'auth.';
        $this->data['moduleName'] = 'User';
    }

    public function signup()
    {
//        https://www.mykeeper.com/signup/
        return view($this->_viewPath . 'signup');
    }

    public function userSignup()
    {
        https://www.mykeeper.com/signup-steps/?is_self_account_view=1
        return view($this->_viewPath . 'signup-user');
    }


    public function memorialSignup()
    {
//        https://www.mykeeper.com/signup-steps/
        return view($this->_viewPath . 'signup-memorial');
    }


    public function userregistration(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);

        $this->data['user'] = $this->_model;
        $this->data['user']->first_name = $request->input('first_name');
        $this->data['user']->last_name = $request->input('last_name');
        $this->data['user']->email = $request->input('email');
        $this->data['user']->password = Hash::make($request->password);
        $this->data['user']->role_id = '2'; /* self User Account */

        $check = $this->data['user']->save();

        $name = $this->data['user']->first_name . ' ' . $this->data['user']->last_name;
        if ($check) {
            $msg = $name . ' registered successfully';
            Session::flash('msg', $msg);
            Session::flash('message', 'alert-success');
        } else {
            $msg = 'Error occurred while registering.';
            Session::flash('msg', $msg);
            Session::flash('message', 'alert-danger');
        }
        return redirect()->back();
    }

    public function memorialregistration(Request $request)
    {

//        dd($request);
//        $request->validate([
//
//            'memorial_first_name' => 'required',
//            'memorial_last_name' => 'required',
//            'memorial_passed' => 'required',
//            'memorial_dod' => $request->input('passed') != Null ? 'required' : '',
//            'memorial_email' => $request->input('passed') != Null  ? 'required|email|unique:users' : '',
//            'memorial_dob' => 'required',
//            'memorial_city_of_birth' => 'required',
//            'memorial_gender' => 'required',
//            'memorial_image' => 'required',
//
//            'memorial_biography' => 'required',
//            'memorial_fav_saying' => 'required',
//            'memorial_resting_place' => 'required',
//
//            'keeper_first_name' => 'required',
//            'keeper_last_name' => 'required',
//            'keeper_email' => 'required',
//            'keeper_password' => 'required',
//            'keeper_dob' => 'required',
//            'keeper_gender' => 'required',
//        ], [
//            'dod.required' => 'Date of Death is required when not null',
//            'email.required' => 'Email is required when when not null.',
//        ]);

        $memorialDobYear = $request->input('memorial_dob_year');
        $memorialDobMonth = $request->input('memorial_dob_month');
        $memorialDobDay = $request->input('memorial_dob_day');
        $memorialDob = "$memorialDobYear-$memorialDobMonth-$memorialDobDay";

        // Accessing Date of Death
        $memorialDodYear = $request->input('memorial_dod_year');
        $memorialDodMonth = $request->input('memorial_dod_month');
        $memorialDodDay = $request->input('memorial_dod_day');
        $memorialDod = "$memorialDodYear-$memorialDodMonth-$memorialDodDay";

        //  Keeper DOB
        $keeperDobYear = $request->input('keeper_dob_year');
        $keeperDobMonth = $request->input('keeper_dob_month');
        $keeperDobDay = $request->input('keeper_dob_day');
        $keeperDob = "$keeperDobYear-$keeperDobMonth-$keeperDobDay";


        $checkMemorialUser = '';
        $checkKeeper = '';
        $checkMemorialUserAdditionalInfo = '';
        $this->data['memorialUser'] = $this->_model;
        $this->data['memorialUser']->first_name = $request->input('memorial_first_name');
        $this->data['memorialUser']->last_name = $request->input('memorial_last_name');
        $this->data['memorialUser']->dob = $memorialDob;
        if ($request->memorial_email) {
            $this->data['memorialUser']->email = $request->input('memorial_email');
        } else {
            $this->data['memorialUser']->email = Str::random(5) . ' loved one is dead ' . Str::random(5);
        }
        if ($request->hasFile('memorial_image')) {
            $image = $request->file('memorial_image');

            $imageName = time() . '_' . $image->getClientOriginalName();
            $imageExtension = $image->getClientOriginalExtension();
            $directory = public_path('assets/images/profile_images');
            if (!File::exists($directory)) {
                File::makeDirectory($directory, 0777, true, true);
            }
            $image->move($directory, $imageName . '-' . $imageExtension);
            $this->data['memorialUser']->profile_image = 'assets/images/profile_images/' . $imageName;
        }

        $this->data['memorialUser']->password = hash::make(Str::random('6'));
        $this->data['memorialUser']->gender = $request->input('memorial_gender');
        $this->data['memorialUser']->role_id = '3'; /* Memorial Loved One User Account*/

        $checkMemorialUser = $this->data['memorialUser']->save();

        $memorialUserId = $this->data['memorialUser']->id;
//        dd($memorialUserId);
        if ($checkMemorialUser) {
            $this->data['memorialUserAdditionalInfo'] = $this->user_memorial_model;
            $this->data['memorialUserAdditionalInfo']->user_id = $memorialUserId;
            $this->data['memorialUserAdditionalInfo']->dod = $memorialDod;
//            dd($request->has('memorial_passed'));
            if ($request->has('memorial_passed')) {
                $passedValue = 'alive';
            } else {
                $passedValue = 'deceased';
            }
//            dd($passedValue);
            $this->data['memorialUserAdditionalInfo']->passed = $passedValue;
            $this->data['memorialUserAdditionalInfo']->biography = $request->input('memorial_biography');
            $this->data['memorialUserAdditionalInfo']->fav_saying = $request->input('memorial_fav_saying');
            $this->data['memorialUserAdditionalInfo']->resting_place = $request->input('memorial_resting_place');
            $this->data['memorialUserAdditionalInfo']->city_of_birth = $request->input('memorial_city_of_birth');
            $checkMemorialUserAdditionalInfo = $this->data['memorialUserAdditionalInfo']->save();
            $MemorialUserAdditionalInfoIDForKeeper = $this->data['memorialUserAdditionalInfo']->id;

            if ($checkMemorialUserAdditionalInfo) {
//                dd($MemorialUserAdditionalInfoIDForKeeper);
                $this->data['keeperUser'] = new User();
                $this->data['keeperUser']->first_name = $request->input('keeper_first_name');
                $this->data['keeperUser']->last_name = $request->input('keeper_last_name');
                $this->data['keeperUser']->email = $request->input('keeper_email');
                $this->data['keeperUser']->password = hash::make($request->password);
                $this->data['keeperUser']->dob = $keeperDob;
                $this->data['keeperUser']->gender = $request->input('keeper_gender');
                $this->data['keeperUser']->role_id = '2'; /* Keeper self User Account*/
                $checkKeeper = $this->data['keeperUser']->save();
                $memorialkeeperId = $this->data['keeperUser']->id;

                if ($checkKeeper) {
                    $this->data['memorialUserAdditionalInfo'] = $this->user_memorial_model::where('id', $MemorialUserAdditionalInfoIDForKeeper)->first();
                    $this->data['memorialUserAdditionalInfo']->keeper_id = $memorialkeeperId;
                    $checkmemorialkeeper = $this->data['memorialUserAdditionalInfo']->update();

                    if ($checkmemorialkeeper) {
                        $this->data['keeperAccountType'] = $this->_model::find($memorialkeeperId);
                        $this->data['keeperAccountType']->account_type_id = $request->input('keeper_account_type');
                        $check = $this->data['keeperAccountType']->update();

                        if ($check)
                        {
                                $msg =' Registered successfully, Memorial account as well';
                                Session::flash('message', $msg);
                            } else {
                                $msg = trans('lang_data.error');
                                Session::flash('error', $msg);


                            }
                            return redirect()->back();

                    }
                }
            }
        }
    }
}
