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
            $this->data['profile'] = [
                'memorialProfile' => $this->_model::where('id', $memorial->user_id)->first(),
                'memorialAdditional' => $this->_memorial_model::where('keeper_id', $id)->first(),
                'memorialOccupation' => $this->_occupation_model::where('user_id', $id)->first(),
                'memorialAcademic' => $this->_academic_model::where('user_id', $id)->first(),
                'memorialInterest' => $this->_interest_model::where('user_id', $id)->first(),
                'memorialCity' => $this->_city_model::where('user_id', $id)->first(),
                'memorialMilestone' => $this->_milestone_model::where('user_id', $id)->first(),
            ];
            return view($this->_viewPath . 'memorial-profile', $this->data);
        } else {
            $previousUrl = URL::previous();
            return redirect()->to($previousUrl);
        }
    }

    public function update(Request $request, $id)
    {
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

            $this->data['basicInfoDod'] = $this->_memorial_model::where('user_id', $id)->first();
            $this->data['basicInfoDod']->dod = $dod;
            $checkInfoDod = $this->data['basicInfoDod']->save();
            $memorialId = $this->data['basicInfoDod']->user_id;

            $this->data['basicInfo'] = $this->_model::where('id', $memorialId)->first();
            $this->data['basicInfo']->first_name = $request->first_name;
            $this->data['basicInfo']->last_name = $request->last_name;
            $this->data['basicInfo']->middle_name = $request->middle_name;
            $this->data['basicInfo']->suffix = $request->suffix;
            $this->data['basicInfo']->gender = $request->gender;
            $this->data['basicInfo']->dob = $dob;

            $checkInfo = $this->data['basicInfo']->save();

            if($checkInfo && $checkInfoDod) {
                $data = [
                    'success' => true,
                    'message' => 'Your Basic info has been updated correctly'
                ];
                return response()->json($data);
            }
        }

        if ($request->form_identifier == 'home_info') {
            return 'home_info';
        }

        if ($request->form_identifier == 'other_info') {
            return 'other_info';
        }

        if ($request->form_identifier == 'occupation_info') {
            return 'occupation_info';
        }

        if ($request->form_identifier == 'academic_info') {
            return 'academic_info';
        }


        if ($request->form_identifier == 'milestone_info') {
            return 'milestone_info';
        }

        if ($request->form_identifier == 'religion_info') {
            return 'religion_info';
        }

        if ($request->form_identifier == 'interest_info') {
            return 'interest_info';
        }


    }

    public function events()
    {
        return view($this->_viewPath . 'events');
    }

    public function family()
    {
        return view($this->_viewPath . 'family');
    }

    public function keeper()
    {
        return view($this->_viewPath . 'keeper');
    }

    public function keeperplus()
    {
        return view($this->_viewPath . 'keeper-plus');
    }

    public function mementos()
    {
        return view($this->_viewPath . 'mementos');
    }

    public function message()
    {
        return view($this->_viewPath . 'message');
    }

    public function profile()
    {
        return view($this->_viewPath . 'profile');
    }
}
