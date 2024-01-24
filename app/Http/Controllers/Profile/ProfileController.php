<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserAcademic;
use App\Models\UserCity;
use App\Models\UserInterest;
use App\Models\UserMemorial;
use App\Models\UserMilestone;
use App\Models\UserOccupation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class ProfileController extends Controller
{
    //

    protected $_viewPath;
    protected $data = array();

    public function __construct()
    {
        $this->_model = new User();
        $this->_memorial_model = new UserMemorial();
        $this->_occupation_model = new UserOccupation();
        $this->_academic_model = new UserAcademic();
        $this->_city_model = new UserCity();
        $this->_interest_model = new UserInterest();
        $this->_milestone_model = new UserMilestone();
        $this->setDefaultData();
    }

    private function setDefaultData()
    {
        $this->_viewPath = 'frontend.profile.';
        $this->data['moduleName'] = 'memorial';
    }

    public function index($id)
    {
        if (auth()->user()->role_id == 2) {
            $memorial = $this->_memorial_model::where('keeper_id', $id)->first();
            $memorialID = $memorial->memorial_user_id;
            $this->data['profile'] = [
                'memorialProfile' => $this->_model::where('id', $memorialID)->first(),
                'memorialAdditional' => $this->_memorial_model::where('memorial_user_id', $memorialID)->first(),
                'memorialOccupation' => $this->_occupation_model::where('memorial_user_id', $memorialID)->first(),
                'memorialAcademic' => $this->_academic_model::where('memorial_user_id', $memorialID)->first(),
                'memorialInterest' => $this->_interest_model::where('memorial_user_id', $memorialID)->first(),
                'memorialCity' => $this->_city_model::where('memorial_user_id', $memorialID)->first(),
                'memorialMilestone' => $this->_milestone_model::where('memorial_user_id', $memorialID)->first(),
            ];
            return view($this->_viewPath . 'memorial-profile', $this->data);
        } else {
            $previousUrl = URL::previous();
            return redirect()->to($previousUrl);
        }
    }

    public function update(Request $request, $id)
    {
//        return $id;/
        if ($request->form_identifier == 'basic_info') {
//            return $request;
            $dobDay = $request->birth_day;
            $dobMonth = $request->birth_month;
            $dobYear = $request->birth_year;
            $dob = $dobYear . '-' . $dobMonth . '-' . $dobDay;

            $dodDay = $request->death_day;
            $dodMonth = $request->death_month;
            $dodYear = $request->death_year;

            $dod = $dodYear . '-' . $dodMonth . '-' . $dodDay;

            $this->data['basicInfoDod'] = $this->_memorial_model::where('memorial_user_id', $id)->first();
//            return $this->data['basicInfoDod'];
            $this->data['basicInfoDod']->dod = $dod;
            $checkInfoDod = $this->data['basicInfoDod']->save();
            $memorialId = $this->data['basicInfoDod']->memorial_user_id;

            $this->data['basicInfo'] = $this->_model::where('id', $memorialId)->first();
            $this->data['basicInfo']->first_name = $request->first_name;
            $this->data['basicInfo']->last_name = $request->last_name;
            $this->data['basicInfo']->middle_name = $request->middle_name;
            $this->data['basicInfo']->suffix = $request->suffix;
            $this->data['basicInfo']->gender = $request->gender;
            $this->data['basicInfo']->dob = $dob;

            $checkInfo = $this->data['basicInfo']->save();

            if ($checkInfo && $checkInfoDod) {
                $data = [
                    'success' => true,
                    'message' => 'Your Basic info has been updated correctly'
                ];
                return response()->json($data);
            }
        }

        if ($request->form_identifier == 'home_info') {

            $this->data['homeCity'] = $this->_city_model::where('memorial_user_id', $id)->first();
            if ($this->data['homeCity']) {
//            return $this->data['homeCity'];
//                return $this->data['homeCity'] ;
                $this->data['homeCity']->home_city = $request->home_city;
                $this->data['homeCity']->memorial_user_id = $id;
                $checkHomeCity = $this->data['homeCity']->save();
                if ($checkHomeCity) {
                    $data = [
                        'success' => true,
                        'message' => 'Your Basic info has been updated correctly'
                    ];
                    return response()->json($data);
                }
            } else {
//                return $request;
                $this->data['homeCity'] = $this->_city_model;
                $this->data['homeCity']->home_city = $request->home_city;
                $this->data['homeCity']->memorial_user_id = $id;
                $checkHomeCity = $this->data['homeCity']->save();
                if ($checkHomeCity) {
                    $data = [
                        'success' => true,
                        'message' => 'Your Home City has been updated correctly'
                    ];
                    return response()->json($data);
                }
            }
        }

        if ($request->form_identifier == 'other_info') {
            $this->data['homeCity'] = $this->_city_model::where('memorial_user_id', $id)->first();
            if ($this->data['otherCity']) {
//                return $this->data['homeCity'] ;
                $this->data['otherCity']->other_city = $request->other_city;
                $this->data['otherCity']->memorial_user_id = $id;
                $checkOtherCity = $this->data['otherCity']->save();
                if ($checkOtherCity) {
                    $data = [
                        'success' => true,
                        'message' => 'Your Basic info has been updated correctly'
                    ];
                    return response()->json($data);
                }
            } else {
//                return $request;
                $this->data['otherCity'] = $this->_city_model;
                $this->data['otherCity']->home_city = $request->home_city;
                $this->data['otherCity']->memorial_user_id = $id;
                $checkOtherCity = $this->data['homeCity']->save();
                if ($checkOtherCity) {
                    $data = [
                        'success' => true,
                        'message' => 'Your Home City has been updated correctly'
                    ];
                    return response()->json($data);
                }
            }
        }

        if ($request->form_identifier == 'occupation_info') {
            return $request;
            $this->data['occupationInfo'] = $this->_occupation_model::where('memorial_user_id', $id)->first();
            $this->data['occupationInfo']->school = $request->school;
            $this->data['occupationInfo']->diploma = $request->diploma;
            $this->data['occupationInfo']->from_year = $request->from_year;
            $this->data['occupationInfo']->to_year = $request->to_year;
            $checkOccupationInfo = $this->data['occupationInfo']->save();
            if ($checkOccupationInfo) {
                $data = [
                    'success' => true,
                    'message' => 'Your Occupational information has been updated correctly'
                ];
                return response()->json($data);
            }
        }

        if ($request->form_identifier == 'academic_info') {
            return 'academic_info';
        }


        if ($request->form_identifier == 'milestone_info') {
            return 'milestone_info';
        }

        if ($request->form_identifier == 'religion_info') {
            $this->data['religionInfo'] = $this->_memorial_model::where('memorial_user_id', $id)->first();
            $this->data['religionInfo']->religion = $request->religion;
            $checkReligionInfo = $this->data['religionInfo']->save();
            if ($checkReligionInfo) {
                $data = [
                    'success' => true,
                    'message' => 'Your religion information has been updated correctly'
                ];
                return response()->json($data);
            }
        }

        // Check if the form_identifier is 'interest_info'
        if ($request->form_identifier == 'interest_info') {
            // Retrieve the 'interest' array from the request
            $interests = $request->input('interest', []);

            $checkInterestInfo = '';
            $this->data['interestinfoCheck'] = $this->_interest_model::where('memorial_user_id', $id)->first();

            if ($this->data['interestinfoCheck']) {

                    $this->data['interestinfo'] = $this->_interest_model::where('memorial_user_id', $id)->first();
                    $this->data['interestinfo']->interest = implode(', ', $interests);
                    $this->data['interestinfo']->memorial_user_id = $id;
                    $checkInterestInfo = $this->data['interestinfo']->save();

            } else {
                    $this->data['interestinfo'] = $this->_interest_model;
                     $this->data['interestinfo']->interest = implode(', ', $interests);
                    $this->data['interestinfo']->memorial_user_id = $id;
                    $checkInterestInfo = $this->data['interestinfo']->save();
            }

            if ($checkInterestInfo) {
                $data = [
                    'success' => true,
                    'message' => 'Your Interest information has been updated correctly'
                ];
                return response()->json($data);
            }
        }


        $data = [
            'success' => false,
            'message' => 'Invalid form identifier'
        ];
        return response()->json($data, 400);

    }

    public
    function events()
    {
        return view($this->_viewPath . 'events');
    }

    public
    function family()
    {
        return view($this->_viewPath . 'family');
    }

    public
    function keeper()
    {
        return view($this->_viewPath . 'keeper');
    }

    public
    function keeperplus()
    {
        return view($this->_viewPath . 'keeper-plus');
    }

    public
    function mementos()
    {
        return view($this->_viewPath . 'mementos');
    }

    public
    function message()
    {
        return view($this->_viewPath . 'message');
    }

    public
    function profile()
    {
        return view($this->_viewPath . 'profile');
    }
}
