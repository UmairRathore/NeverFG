<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\Coupon;
use App\Models\Package;
use App\Models\User;
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
        $this->data['user']->username = $request->input('first_name');
        $this->data['user']->username = $request->input('last_name');
        $this->data['user']->email = $request->input('email');
        $this->data['user']->password = hash::make($request->password);
        $this->data['user']->dob = $request->input('dob');
        $this->data['user']->gender = $request->input('gender');
        $this->data['user']->role_id = '2'; /* self User Account*/

//        dd($this->data['user']);
        $this->data['user']->save();
        $check = $this->data['user']->save();

        $name = $this->data['user']->username;
        if ($check) {
            $msg = $name . ' Registered successfully, You can Comment and Reply';
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

            'memorial_biography'=> 'required',
            'memorial_fav_saying'=> 'required',
            'memorial_resting_place'=> 'required',

            //              Step 3: Keeper INFO

            'keeper_first_name'=> 'required',
            'keeper_last_name'=> 'required',
            'keeper_email'=> 'required',
            'keeper_password'=> 'required',
            'keeper_dob'=> 'required',
            'keeper_gender'=> 'required',

            //              Step 4: Account Type

            'cardholder_name' => $request->input('account_type') == 1 ? 'required' : '',
            'card_number' => $request->input('account_type') == 1 ? 'required|numeric|
                digits:16|
                luhn' :'', // Luhn algorithm
            'card_expiry_date' => $request->input('account_type') == 1 ? '
                required|date_format:m/y|,
                after:today' :'',
            'card_street' => $request->input('account_type') == 1 ? 'required' : '',
            'card_city' => $request->input('account_type') == 1 ? 'required' : '',
            'card_country' => $request->input('account_type') == 1 ? 'required' : '',
            'card_state' => $request->input('account_type') == 1 ? 'required' : '',


        ], [
            'dod.required' => 'Date of Death is required when passed is 1.',
            'email.required' => 'Email is required when passed is 0.',
        ]);

       $this->data['memorialUser'] = $this->_model;
        $this->data['memorialUser']->first_name = $request->input('memorial_first_name');
        $this->data['memorialUser']->last_name = $request->input('memorial_last_name');
        $this->data['memorialUser']->dob = $request->input('memorial_dob');
        $this->data['memorialUser']->passed = $request->input('memorial_passed');
        $this->data['memorialUser']->dod = $request->input('memorial_dod');
        $this->data['memorialUser']->email = $request->input('memorial_email');
        $this->data['memorialUser']->gender = $request->input('memorial_gender');
        $this->data['memorialUser']->biography = $request->input('memorial_biography');
        $this->data['memorialUser']->fav_saying = $request->input('memorial_fav_saying');
        $this->data['memorialUser']->resting_place = $request->input('memorial_resting_place');
        $this->data['memorialUser']->role_id = '3'; /* Memorial Loved One User Account*/
        $this->data['memorialUser']->save();
        $checkMemorial = $this->data['memorialUser']->save();

        if($checkMemorial) {
            $this->data['keeperUser'] = $this->_model;
            $this->data['keeperUser']->first_name = $request->input('first_name');
            $this->data['keeperUser']->last_name = $request->input('last_name');
            $this->data['keeperUser']->email = $request->input('email');
            $this->data['keeperUser']->password = hash::make($request->password);
            $this->data['keeperUser']->dob = $request->input('dob');
            $this->data['keeperUser']->gender = $request->input('gender');
            $this->data['keeperUser']->role_id = '2'; /* Keeper self User Account*/
//        dd($this->data['keeperUser']);
            $this->data['keeperUser']->save();
            $name = $this->data['keeperUser']->first_name.''.$this->data['keeperUser']->last_name;
            $checkKeeper = $this->data['keeperUser']->save();

            $account_type = $request->input('account_type');
            $this->data['package'] = $this->package_model::where('id','=',$account_type)->get();
            $packagePrice = $this->data['package']->price;
            if($account_type == 1 )
            {
                $this->data['card'] = $this->card_model;
                $this->data['card']->cardholder_name = $request->input('cardholder_name');
                $this->data['card']->card_number = $request->input('card_number');
                $this->data['card']->expiry_date = $request->input('card_expiry_date');
                $this->data['card']->street = $request->input('card_street');
                $this->data['card']->city = $request->input('card_city');
                $this->data['card']->state = $request->input('card_street');
                $this->data['card']->country = $request->input('card_country');
                $this->data['card']->save();

              $couponCode = $request->input('coupon');

              $this->data['coupon'] = $this->coupon_model::all();
              foreach($this->data['coupon'] as $coupon)
              {

                 if($coupon == $couponCode)
                  {
                      $couponDiscountPercentage = $coupon->discount_percentage;
                      $discountAmount = ($couponDiscountPercentage / 100) * $packagePrice;
                      $useThisPriceInPaymentAPI = $packagePrice - $discountAmount;
                      //API
                  }
              }

                $checkCard = $this->data['keeperUser']->save();
                if ($checkCard) {
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
            else
            {
                if ($checkKeeper) {
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
        }
    }
}

