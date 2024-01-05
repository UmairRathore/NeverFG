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
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

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
        return view($this->_viewPath . 'signup-self-account');
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
            'gender' => 'required',
            'dob' => 'required',
        ]);
        $this->data['user'] = $this->_model;
        $this->data['user']->first_name = $request->input('first_name');
        $this->data['user']->last_name = $request->input('last_name');
        $this->data['user']->email = $request->input('email');
        $this->data['user']->password = hash::make($request->password);
        $this->data['user']->dob = $request->input('dob');
        $this->data['user']->gender = $request->input('gender');
        $this->data['user']->role_id = '2'; /* self User Account*/

//        dd($this->data['user']);
        $this->data['user']->save();
        $check = $this->data['user']->save();

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


    public function memorialregistration(Request $request)
    {

        $request->validate([

            //               Step 1: memorial person

            'memorial_first_name' => 'required',
            'memorial_last_name' => 'required',
            'memorial_passed' => 'required',
            'memorial_dod' => $request->input('passed') == 1 ? 'required' : '',
            'memorial_email' => $request->input('passed') == 0 ? 'required|email|unique:users' : '',
            'memorial_dob' => 'required',
            'memorial_city_of_birth' => 'required',
            'memorial_gender' => 'required',
            'memorial_image' => 'required',

            //              Step 2: Biography of memorial person

            'memorial_biography' => 'required',
            'memorial_fav_saying' => 'required',
            'memorial_resting_place' => 'required',

            //              Step 3: Keeper INFO

            'keeper_first_name' => 'required',
            'keeper_last_name' => 'required',
            'keeper_email' => 'required',
            'keeper_password' => 'required',
            'keeper_dob' => 'required',
            'keeper_gender' => 'required',

            //              Step 4: Account Type

//            'cardholder_name' => $request->input('account_type') == 1 ? 'required' : '',
//            'card_number' => $request->input('account_type') == 1 ? 'required|numeric|
//                digits:16|
//                luhn' : '', // Luhn algorithm
//            'card_expiry_date' => $request->input('account_type') == 1 ? '
//                required|date_format:m/y|,
//                after:today' : '',
//            'card_street' => $request->input('account_type') == 1 ? 'required' : '',
//            'card_city' => $request->input('account_type') == 1 ? 'required' : '',
//            'card_country' => $request->input('account_type') == 1 ? 'required' : '',
//            'card_state' => $request->input('account_type') == 1 ? 'required' : '',


        ], [
            'dod.required' => 'Date of Death is required when passed is 1.',
            'email.required' => 'Email is required when passed is 0.',
        ]);



        $this->data['memorialUser'] = $this->_model;
        $this->data['memorialUser']->first_name = $request->input('memorial_first_name');
        $this->data['memorialUser']->last_name = $request->input('memorial_last_name');
        $this->data['memorialUser']->dob = $request->input('memorial_dob');
        $this->data['memorialUser']->email = $request->input('memorial_email');
        $this->data['memorialUser']->gender = $request->input('memorial_gender');
        $this->data['memorialUser']->role_id = '3'; /* Memorial Loved One User Account*/

        $checkMemorialUser = $this->data['memorialUser']->save();
        $memorialUserId = $this->data['memorialUser']->id;
        if ($checkMemorialUser) {
            $this->data['memorialUserAdditionalInfo'] = $this->user_memorial_model;
            $this->data['memorialUserAdditionalInfo']->passed = $request->input('memorial_passed');
            $this->data['memorialUserAdditionalInfo']->dod = $request->input('memorial_dod');
            $this->data['memorialUserAdditionalInfo']->biography = $request->input('memorial_biography');
            $this->data['memorialUserAdditionalInfo']->fav_saying = $request->input('memorial_fav_saying');
            $this->data['memorialUserAdditionalInfo']->resting_place = $request->input('memorial_resting_place');
            $this->data['memorialUserAdditionalInfo']->city_of_birth = $request->input('memorial_city_of_birth');
            $checkMemorialUserAdditionalInfo = $this->data['memorialUserAdditionalInfo']->save();
            $MemorialUserAdditionalInfoIDForKeeper = $this->data['memorialUserAdditionalInfo']->id;
            if ($checkMemorialUserAdditionalInfo) {
                $this->data['keeperUser'] = $this->_model;
                $this->data['keeperUser']->first_name = $request->input('keeper_first_name');
                $this->data['keeperUser']->last_name = $request->input('keeper_last_name');
                $this->data['keeperUser']->email = $request->input('keeper_email');
                $this->data['keeperUser']->password = hash::make($request->password);
                $this->data['keeperUser']->dob = $request->input('keeper_dob');
                $this->data['keeperUser']->gender = $request->input('keeper_gender');
                $this->data['keeperUser']->role_id = '2'; /* Keeper self User Account*/

                $checkKeeper = $this->data['keeperUser']->save();
                $Keepername = $this->data['keeperUser']->first_name . '' . $this->data['keeperUser']->last_name;
                $memorialkeeperId = $this->data['keeperUser']->id;
                if ($checkKeeper) {
                    $this->data['memorialUserAdditionalInfo'] = $this->user_memorial_model::find($MemorialUserAdditionalInfoIDForKeeper);
                    $this->data['memorialUserAdditionalInfo']->keeper_id = $memorialkeeperId;
                    $checkmemorialkeeper = $this->data['memorialUserAdditionalInfo']->update();

                    if ($checkmemorialkeeper) {
                        $this->data['keeperAccountType'] = $this->_model::find($memorialkeeperId);
                        $this->data['keeperAccountType']->account_type_id = $request->input('keeper_account_type');
                        $this->data['keeperAccountType']->update();
                    }

                }
//                else {
//                    $this->data['keeperUser'] = $this->_model::find($checkKeeper);
//                    $checkKeeperUser = $this->data['keeperUser']->delete();
//                    if (!$checkKeeperUser) {
//                        dd('Keeper User successfully deleted');
//                    }
//                }
            }

        }

//        else {
//            $this->data['memorialUserAdditionalInfo'] = $this->user_memorial_model::find($memorialUserId);
//            $checkMemorialUserAdditionalInfo = $this->data['memorialUserAdditionalInfo']->delete();
//            if (!$checkMemorialUserAdditionalInfo) {
//                dd('Memorial - User_Additional_Info successfully deleted');
//            }
//        }


    }


}

