<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\LibraryPhoto;
use App\Models\User;
use App\Models\UserAcademic;
use App\Models\UserCity;
use App\Models\UserInterest;
use App\Models\UserMemorial;
use App\Models\UserMilestone;
use App\Models\UserOccupation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;

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
        $this->_libraryPhoto_model = new LibraryPhoto();
        $this->setDefaultData();
    }

    private function setDefaultData()
    {
        $this->_viewPath = 'frontend.profile.';
        $this->data['moduleName'] = 'memorial';
    }

    public function userProfile($id)
    {
        $this->data['user'] = User::find($id);
        return view($this->_viewPath . 'user-profile', $this->data);
    }

    public function Creatememorial($id)
    {
//        dd($id);
        $user_id = $id;
        return view($this->_viewPath . 'create-memorial', compact('user_id'));
    }

    public function updateUserProfile(Request $request)
    {
        dd($request);
        $this->data['user'] = User::find($id);
        $this->data['user']->first_name = $request->first_name;
        $this->data['user']->middle_name = $request->middle_name;
        $this->data['user']->last_name = $request->last_name;
        $this->data['user']->suffix = $request->suffix;
        $this->data['user']->dob = $request->birth_year . '-' . $request->birth_month . '-' . $request->birth_day;
        $this->data['user']->gender = $request->gender;
        $this->data['user']->email = $request->email;
        if ($request->password) {
            $this->data['user']->password = bcrypt($request->password);
        }
        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $imageName = $image->getClientOriginalName(); // Use the original file name without timestamp

            $directory = public_path('assets/images/profile_images');

            // Create the directory if it doesn't exist
            if (!File::exists($directory)) {
                File::makeDirectory($directory, 0777, true, true);
            }

            $image->move($directory, time() . '_' . $imageName);

            $this->data['user']->profile_image = 'assets/images/profile_images/' . time() . '_' . $imageName;

        }
        $checkUser = $this->data['user']->save();

        if ($checkUser) {
            return response()->json([
                'success' => true,
                'message' => 'User Information has updated correctly',
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Failed to update profile image',
            ]);
        }
    }

    public function MementoInfoProfile($id)
    {
        if (auth()->user()->role_id == 2) {

            $memorial = $this->_memorial_model::where('memorial_user_id', $id)->first();
//            return $memorial;
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
            $this->data['profile_images'] = $this->_libraryPhoto_model::where('profile_image', '!=', Null)->get();
            return view($this->_viewPath . 'memorial-profile', $this->data);
        } else {
            $previousUrl = URL::previous();
            return redirect()->to($previousUrl);
        }
    }

    public function updateMementoInfoProfile(Request $request, $id)
    {
        if ($request->form_identifier == 'basic_info_create') {
            return $id;
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

            $occupation = $request->input('occupation', []);
            $company = $request->input('company', []);
            $toYears = $request->input('to_year', []);
            $fromYears = $request->input('from_year', []);

            $checkOccupationInfo = '';
            $this->data['occupationinfoCheck'] = $this->_occupation_model::where('memorial_user_id', $id)->first();

            if ($this->data['occupationinfoCheck']) {

                $this->data['occupationinfoCheck'] = $this->_occupation_model::where('memorial_user_id', $id)->first();
                $this->data['occupationinfoCheck']->occupation = implode(', ', $occupation);
                $this->data['occupationinfoCheck']->company = implode(', ', $company);
                $this->data['occupationinfoCheck']->to_year = implode(', ', $toYears);
                $this->data['occupationinfoCheck']->from_year = implode(', ', $fromYears);
                $this->data['occupationinfoCheck']->memorial_user_id = $id;
                $checkOccupationInfo = $this->data['occupationinfoCheck']->save();

            } else {
                $this->data['occupationinfoCheck'] = $this->_occupation_model;
                $this->data['occupationinfoCheck']->occupation = implode(', ', $occupation);
                $this->data['occupationinfoCheck']->company = implode(', ', $company);
                $this->data['occupationinfoCheck']->to_year = implode(', ', $toYears);
                $this->data['occupationinfoCheck']->from_year = implode(', ', $fromYears);
                $this->data['occupationinfoCheck']->memorial_user_id = $id;
                $checkOccupationInfo = $this->data['occupationinfoCheck']->save();
            }

            if ($checkOccupationInfo) {
                $data = [
                    'success' => true,
                    'message' => 'Your Occupation information has been updated correctly'
                ];
                return response()->json($data);
            }
        }

        if ($request->form_identifier == 'academic_info') {
            // Retrieve the 'interest' array from the request
            $diplomas = $request->input('diploma', []);
            $schools = $request->input('school', []);
            $toYears = $request->input('to_year', []);
            $fromYears = $request->input('from_year', []);

            $checkAcademicInfo = '';
            $this->data['academicinfoCheck'] = $this->_academic_model::where('memorial_user_id', $id)->first();

            if ($this->data['academicinfoCheck']) {

                $this->data['academicinfoCheck'] = $this->_academic_model::where('memorial_user_id', $id)->first();
                $this->data['academicinfoCheck']->diploma = implode(', ', $diplomas);
                $this->data['academicinfoCheck']->school = implode(', ', $schools);
                $this->data['academicinfoCheck']->to_year = implode(', ', $toYears);
                $this->data['academicinfoCheck']->from_year = implode(', ', $fromYears);
                $this->data['academicinfoCheck']->memorial_user_id = $id;
                $checkAcademicInfo = $this->data['academicinfoCheck']->save();

            } else {
                $this->data['academicinfoCheck'] = $this->_academic_model;
                $this->data['academicinfoCheck']->diploma = implode(', ', $diplomas);
                $this->data['academicinfoCheck']->school = implode(', ', $schools);
                $this->data['academicinfoCheck']->to_year = implode(', ', $toYears);
                $this->data['academicinfoCheck']->from_year = implode(', ', $fromYears);
                $this->data['academicinfoCheck']->memorial_user_id = $id;
                $checkAcademicInfo = $this->data['academicinfoCheck']->save();
            }

            if ($checkAcademicInfo) {
                $data = [
                    'success' => true,
                    'message' => 'Your Academic information has been updated correctly'
                ];
                return response()->json($data);
            }
        }

        if ($request->form_identifier == 'milestone_info') {
            $milestone = $request->input('milestone', []);
            $year = $request->input('year', []);

            $this->data['milestoneinfo'] = $this->_milestone_model::where('memorial_user_id', $id)->first();

//            $checkMilestoneInfo = '';
            if ($this->data['milestoneinfo']) {

                $this->data['milestoneinfo'] = $this->_milestone_model::where('memorial_user_id', $id)->first();
                $this->data['milestoneinfo']->milestone = implode(', ', $milestone);
                $this->data['milestoneinfo']->year = implode(', ', $year);
                $this->data['milestoneinfo']->memorial_user_id = $id;
                $checkMilestoneInfo = $this->data['interestinfo']->save();

            } else {
                $this->data['milestoneinfo'] = $this->_milestone_model;
                $this->data['milestoneinfo']->milestone = implode(', ', $milestone);
                $this->data['milestoneinfo']->year = implode(', ', $year);
                $this->data['milestoneinfo']->memorial_user_id = $id;
                $checkMilestoneInfo = $this->data['milestoneinfo']->save();
            }

            if ($checkMilestoneInfo) {
                $data = [
                    'success' => true,
                    'message' => 'Your Milestone information has been updated correctly'
                ];
                return response()->json($data);
            }
        }

        if ($request->form_identifier == 'religion_info') {
            if ($request->custom_religion) {
                $this->data['religionInfo'] = $this->_memorial_model::where('memorial_user_id', $id)->first();
                $this->data['religionInfo']->religion = $request->custom_religion;
                $checkReligionInfo = $this->data['religionInfo']->save();
            } else {
                $this->data['religionInfo'] = $this->_memorial_model::where('memorial_user_id', $id)->first();
                $this->data['religionInfo']->religion = $request->predefined_religion;
                $checkReligionInfo = $this->data['religionInfo']->save();
            }
            if ($checkReligionInfo) {
                $data = [
                    'success' => true,
                    'message' => 'Your religion information has been updated correctly'
                ];
                return response()->json($data);
            }
        }

        if ($request->form_identifier == 'interest_info') {
            // Retrieve the 'interest' array from the request
            $interests = $request->input('interest', []);

            $this->data['interestinfoCheck'] = $this->_interest_model::where('memorial_user_id', $id)->first();

//            $checkInterestInfo = '';
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

        if ($request->form_identifier == 'profile_image_custom') {
            dd($request);
            $mementoId = $request->user_id;

            $this->data['mementoProfileImage'] = $this->_model::find($mementoId);

            if (!$this->data['mementoProfileImage']) {
                // Handle the case where the user is not found
                return response()->json([
                    'success' => false,
                    'message' => 'User not found',
                ]);
            }

            if ($request->hasFile('memento_profile_image_custom')) {
                $image = $request->file('memento_profile_image_custom');
                $imageName = $image->getClientOriginalName(); // Use the original file name without timestamp

                $directory = public_path('assets/images/profile_images');

                // Create the directory if it doesn't exist
                if (!File::exists($directory)) {
                    File::makeDirectory($directory, 0777, true, true);
                }

                $image->move($directory, time() . '_' . $imageName);

                $this->data['mementoProfileImage']->profile_image = 'assets/images/profile_images/' . time() . '_' . $imageName;

                $checkMemorialUser = $this->data['mementoProfileImage']->save();

                if ($checkMemorialUser) {
                    return response()->json([
                        'success' => true,
                        'message' => 'Your Profile Image has been updated correctly',
                    ]);
                } else {
                    return response()->json([
                        'success' => false,
                        'message' => 'Failed to update profile image',
                    ]);
                }
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'No file provided for profile image update',
                ]);
            }

        }

        if ($request->form_identifier == 'profile_image_library') {
//return $request;
            $mementoId = $request->user_id;

            $this->data['mementoProfileImage'] = $this->_model::find($mementoId);

            if (!$this->data['mementoProfileImage']) {
                // Handle the case where the user is not found
                return response()->json([
                    'success' => false,
                    'message' => 'User not found',
                ]);
            }

            if ($request->hasFile('profile_image')) {
                $image = $request->file('profile_image');
                $imageName = $image->getClientOriginalName(); // Use the original file name without timestamp

                $directory = public_path('assets/images/profile_images');

                // Create the directory if it doesn't exist
                if (!File::exists($directory)) {
                    File::makeDirectory($directory, 0777, true, true);
                }

                $image->move($directory, time() . '_' . $imageName);

                $this->data['mementoProfileImage']->profile_image = 'assets/images/profile_images/' . time() . '_' . $imageName;

                $checkMemorialUser = $this->data['mementoProfileImage']->save();

                if ($checkMemorialUser) {
                    return response()->json([
                        'success' => true,
                        'message' => 'Your Profile Image has been updated correctly',
                    ]);
                } else {
                    return response()->json([
                        'success' => false,
                        'message' => 'Failed to update profile image',
                    ]);
                }
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'No file provided for profile image update',
                ]);
            }

        }


        $data = [
            'success' => false,
            'message' => 'Invalid form identifier'
        ];
        return response()->json($data, 400);

    }

    public function getUpdatedProfileImage($userId, $formType)
    {
        if ($formType === 'profile_image_custom') {

            $userProfile = $this->_model::where('id', $userId)->first();

            if (File::exists(public_path($userProfile->profile_image))) {
                return response()->json([
                    'updatedImageURL' => asset($userProfile->profile_image),
                ]);
            } else {
                // Handle the case where the file doesn't exist
                return response()->json([
                    'error' => 'File not found',
                ], 404);
            }
        }
        if ($formType === 'basic_info') {

            $userProfile = $this->_model::where('id', $userId)->first();

            if (File::exists(public_path($userProfile->profile_image))) {
                return response()->json([
                    'updatedImageURL' => asset($userProfile->profile_image),
                ]);
            } else {
                // Handle the case where the file doesn't exist
                return response()->json([
                    'error' => 'File not found',
                ], 404);
            }
        }
        $data = [
            'success' => false,
            'message' => 'Invalid form identifier'
        ];
        return response()->json($data, 400);
    }

    public function updateMementoPicturesProfile(Request $request, $id)
    {

        if ($request->memento_profile_image) {
            $mementoProfile = $this->_memorial_model::where('user_id', $id)->first();
            $mementoId = $mementoProfile->id;
            $mementoProfileImage = $this->_model::where('id', $mementoId)->first();
            if ($request->hasFile('memento_profile_image')) {
                $image = $request->file('memento_profile_image');

                $imageName = time() . '_' . $image->getClientOriginalName();
                $imageExtension = $image->getClientOriginalExtension();
                $directory = public_path('assets/images/profile_images');
                if (!File::exists($directory)) {
                    File::makeDirectory($directory, 0777, true, true);
                }
                $image->move($directory, $imageName . '-' . $imageExtension);
                $this->data['mementoProfileImage']->profile_image = 'assets/images/profile_images/' . $imageName;
            }
            $checkMemorialUser = $this->data['mementoProfileImage']->save();
            if ($checkMemorialUser) {
                $data = [
                    'success' => true,
                    'message' => 'Your Basic info has been updated correctly'
                ];
                return response()->json($data);
            } else {
                $data = [
                    'success' => false,
                    'message' => 'Error'
                ];
                return response()->json($data);
            }
        } else {

            $data = [
                'success' => false,
                'message' => 'Invalid form identifier'
            ];
        }
        return response()->json($data, 400);

    }


    public function family()
    {
        return view($this->_viewPath . 'family');
    }


    public function keeperplus()
    {
        return view($this->_viewPath . 'keeper-plus');
    }

    public function mementos()
    {
        return view($this->_viewPath . 'mementos');
    }


    public function sampleProfile()
    {

            return view($this->_viewPath . 'sampleProfile');

    }
    public function profile($id)
    {
            return view($this->_viewPath . 'profile');

    }

    public function comment($request)
    {
        if ($request->store) {

        }

        if ($request->delete) {

        }

    }


}
