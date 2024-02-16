<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Family;
use App\Models\LibraryPhoto;
use App\Models\Memento;
use App\Models\User;
use App\Models\UserAcademic;
use App\Models\UserCity;
use App\Models\UserInterest;
use App\Models\UserMemorial;
use App\Models\UserMilestone;
use App\Models\UserOccupation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

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
    public function updateUserProfile(Request $request, $id)
    {
//        dd($request);
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
        if ($request->file('profile_image')) {
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
            $msg = 'User updated successfully';
            Session::flash('message', $msg);
        } else {
            $msg = 'Error occurred while updating.';
            Session::flash('required_fields_empty', $msg);
        }
        return redirect()->back();
    }




    public function Creatememorial($id)
    {
        $user_id = $id;
        return view($this->_viewPath . 'create-memorial', compact('user_id'));
    }

    public function storeMemorial(Request $request)
    {
        $this->data['user'] = new User();
        $this->data['user']->first_name = $request->first_name;
        $this->data['user']->middle_name = $request->middle_name;
        $this->data['user']->last_name = $request->last_name;
        $this->data['user']->suffix = $request->suffix;
        $this->data['user']->dob = $request->dob_year . '-' . $request->dob_month . '-' . $request->dob_day; // Correct the date format
        $this->data['user']->gender = $request->gender;
        $this->data['user']->email = $request->email;
        $this->data['user']->role_id = '3';
        $this->data['user']->password =hash::make(Str::random('6'));
        ;

        if ($request->file('profile_image')) {
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
            $this->data['MemorialUser'] = new UserMemorial();
            $this->data['MemorialUser']->dod = $request->dod_year . '-' . $request->dod_month . '-' . $request->dod_day;
            $this->data['MemorialUser']->memorial_user_id = $this->data['user']->id;
            $this->data['MemorialUser']->keeper_id = $request->keeperID;
            $this->data['MemorialUser']->city_of_birth = $request->city_of_birth;
            $this->data['MemorialUser']->fav_saying = $request->fav_saying;
            $this->data['MemorialUser']->resting_place = $request->resting_place;
            $this->data['MemorialUser']->biography = $request->biography;
            $checkmemorial = $this->data['MemorialUser']->save();
            if ($checkmemorial) {
                return response()->json([
                    'success' => true,
                    'message' => 'User Information has updated correctly',
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to update memorial profile',
                ]);
            }
        } else {
            return response()->json(['success' => false,
                'message' => 'Failed to update memorial profile',]);
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



    public function updateBasicInfoForm (Request $request,$id,$formType)
    {
        if ($formType == 'basic_info') {

            $dobDay = $request->birth_day; $dobMonth = $request->birth_month; $dobYear = $request->birth_year;
            $dob = $dobYear . '-' . $dobMonth . '-' . $dobDay;

            $dodDay = $request->death_day; $dodMonth = $request->death_month; $dodYear = $request->death_year;
            $dod = $dodYear . '-' . $dodMonth . '-' . $dodDay;

            $this->data['basicInfoDod'] = $this->_memorial_model::where('memorial_user_id',$id)->first();
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
            else
            {
                $data = [
                    'success' => false,
                    'message' => 'Your Basic info has not been updated correctly'
                ];
                return response()->json($data);
            }
        }
        elseif ($formType == 'home_info') {

            $this->data['homeCity'] = $this->_city_model::where('memorial_user_id',$id)->first();
            if ($this->data['homeCity']) {
                $this->data['homeCity']->home_city = $request->home_city;
                $checkHomeCity = $this->data['homeCity']->save();
                if ($checkHomeCity) {
                    $data = [
                        'success' => true,
                        'message' => 'Your Home City has been updated correctly'
                    ];
                    return response()->json($data);
                }
            } else {
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
        elseif ($formType == 'other_info') {
            $this->data['otherCity'] = $this->_city_model::where('memorial_user_id',  $id)->first();
            if ($this->data['otherCity']) {
                $this->data['otherCity']->other_city = $request->other_city;
                $checkOtherCity = $this->data['otherCity']->save();
                if ($checkOtherCity) {
                    $data = [
                        'success' => true,
                        'message' => 'Your Other City has been updated correctly'
                    ];
                    return response()->json($data);
                }
            } else {
//                return $request;
                $this->data['otherCity'] = $this->_city_model;
                $this->data['otherCity']->home_city = $request->home_city;
                $this->data['otherCity']->memorial_user_id =  $id;
                $checkOtherCity = $this->data['homeCity']->save();
                if ($checkOtherCity) {
                    $data = [
                        'success' => true,
                        'message' => 'Your Other City has been updated correctly'
                    ];
                    return response()->json($data);
                }
            }
        }
        elseif ($formType == 'occupation_info') {

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
            else
            {
                $data = [
                    'success' => false,
                    'message' => 'Your Occupation information has not been updated correctly'
                ];
                return response()->json($data);
            }
        }
        elseif ($formType == 'academic_info') {
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
        elseif ($formType == 'milestone_info') {
            $milestone = $request->input('milestone', []);
            $year = $request->input('year', []);

            $this->data['milestoneinfo'] = $this->_milestone_model::where('memorial_user_id', $id)->first();

//            $checkMilestoneInfo = '';
            if ($this->data['milestoneinfo']) {

                $this->data['milestoneinfo'] = $this->_milestone_model::where('memorial_user_id', $id)->first();
                $this->data['milestoneinfo']->milestone = implode(', ', $milestone);
                $this->data['milestoneinfo']->year = implode(', ', $year);
                $this->data['milestoneinfo']->memorial_user_id = $id;
                $checkMilestoneInfo = $this->data['milestoneinfo']->save();

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
        elseif ($formType == 'religion_info') {
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
        elseif ($formType == 'interest_info') {
            // Retrieve the 'interest' array from the request
            $interests = $request->input('interest', []);

            $this->data['interestinfoCheck'] = $this->_interest_model::where('memorial_user_id', $id)->first();

            $checkInterestInfo = '';
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
//dd($checkInterestInfo);
            if ($checkInterestInfo) {
                $data = [
                    'success' => true,
                    'message' => 'Your Interest information has been updated correctly'
                ];
                return response()->json($data);
            }
        }

    }



    public function updateMementoInfoProfile(Request $request, $id,$formType)
    {
//        return $request;

        if ($formType == 'profile_image_custom') {

            $mementoId = $request->user_id;

            $this->data['mementoProfileImage'] = $this->_model::find($mementoId);

            if (!$this->data['mementoProfileImage']) {
                // Handle the case where the user is not found
                return response()->json([
                    'success' => false,
                    'message' => 'User not found',
                ]);
            }

            if ($request->file('memento_profile_image_custom')) {
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
        elseif ($formType == 'profile_image_library') {
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

            if ($request->file('profile_image')) {
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
        elseif ($formType == 'theme_image_custom') {

            $mementoId = $request->user_id;

            $this->data['mementoThemeImage'] = $this->_model::find($mementoId);

            if (!$this->data['mementoThemeImage']) {
                // Handle the case where the user is not found
                return response()->json([
                    'success' => false,
                    'message' => 'User not found',
                ]);
            }

            if ($request->file('memorial_theme_image_custom')) {
                $image = $request->file('memorial_theme_image_custom');
                $imageName = $image->getClientOriginalName(); // Use the original file name without timestamp

                $directory = public_path('assets/images/theme_images');

                // Create the directory if it doesn't exist
                if (!File::exists($directory)) {
                    File::makeDirectory($directory, 0777, true, true);
                }

                $image->move($directory, time() . '_' . $imageName);

                $this->data['mementoThemeImage']->theme_image = 'assets/images/theme_images/' . time() . '_' . $imageName;

                $checkMemorialUser = $this->data['mementoThemeImage']->save();

                if ($checkMemorialUser) {
                    return response()->json([
                        'success' => true,
                        'message' => 'Your Theme Image Custom  has been updated correctly',
                    ]);
                } else {
                    return response()->json([
                        'success' => false,
                        'message' => 'Failed to update Theme image Custom ',
                    ]);
                }
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'No file provided for Theme Custom image update',
                ]);
            }

        }
        elseif ($formType == 'theme_image_library') {
//return $request;
            $mementoId = $request->user_id;

            $this->data['mementoThemeImage'] = $this->_model::find($mementoId);

            if (!$this->data['mementoThemeImage']) {
                // Handle the case where the user is not found
                return response()->json([
                    'success' => false,
                    'message' => 'User not found',
                ]);
            }

            if ($request->file('theme_image')) {
                $image = $request->file('theme_image');
                $imageName = $image->getClientOriginalName(); // Use the original file name without timestamp

                $directory = public_path('assets/images/theme_images');

                // Create the directory if it doesn't exist
                if (!File::exists($directory)) {
                    File::makeDirectory($directory, 0777, true, true);
                }

                $image->move($directory, time() . '_' . $imageName);

                $this->data['mementoThemeImage']->theme_image = 'assets/images/theme_images/' . time() . '_' . $imageName;

                $checkMemorialUser = $this->data['mementoThemeImage']->save();

                if ($checkMemorialUser) {
                    return response()->json([
                        'success' => true,
                        'message' => 'Your Theme Library Image has been updated correctly',
                    ]);
                } else {
                    return response()->json([
                        'success' => false,
                        'message' => 'Failed to update Theme Library  image',
                    ]);
                }
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'No file provided for Theme image Library  update',
                ]);
            }

        }

        else {
            $data = [
                'success' => false,
                'message' => 'Invalid form identifier'
            ];
            return response()->json($data, 400);
        }
    }







    public function getUpdatedProfileImage($userId, $formType)
    {
        if ($formType === 'profile_image_custom' || $formType == 'profile_image_library') {

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
        if ($formType === 'theme_image_custom' || $formType == 'theme_image_library') {

            $userTheme = $this->_model::where('id', $userId)->first();

            if (File::exists(public_path($userTheme->theme_image))) {
                return response()->json([
                    'updatedImageURL' => asset($userTheme->theme_image),
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
            if ($request->file('memento_profile_image')) {
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


    public function family($id)
    {
        $familys = Family::where('id', $id)->get();
        return view($this->_viewPath . 'family', compact('id', 'familys'));
    }




    public function createFamily(Request $request)
    {
//        return $request;
        $request->validate([
            'name' => 'required',
            'relation' => 'required',
            'family_image' => 'required',
        ], [
            'name.required' => 'The name field is required.',
            'relation.required' => 'The relation field is required.',
            'family_image.required' => 'The family image field is required.',
        ]);

        // Handle file upload
        $imagePath = $this->handleFileUpload($request, 'family_image', 'Family');

        // Create family member
        $family = Family::create([
            'memorial_user_id' => $request->memorialID,
            'name' => $request->name,
            'relation' => $request->relation,
            'family_image' => $imagePath,
        ]);

        if ($family) {
            return response()->json(['success' => true, 'message' => 'Family member created successfully']);
        } else {
            return response()->json(['success' => false, 'message' => 'Failed to create family member']);
        }
    }

    public function mementos($id)
    {
        $mementos = Memento::where('memorial_user_id', $id)->get();
        return view($this->_viewPath . 'mementos', compact('id', 'mementos'));
    }

    public function storeMemento(Request $request)
    {
        $request->validate([
            'memento_image' => 'image', // Validate image
            'memento_video' => 'mimes:mp4,avi,wmv,mov', // Validate video
        ]);

        $mementoId = $request->input('userID');

        $memento = new Memento();

        $imagePath = $this->handleFileUpload($request, 'memento_image', 'mementos','image');
        $videoPath = $this->handleFileUpload($request, 'memento_video', 'videos','video');

        $memento->memento_image = $imagePath;
        $memento->memento_video = $videoPath;
        $memento->memorial_user_id = $mementoId;

        $memento->save();

        return response()->json([
            'success' => true,
            'message' => 'Memento image and video updated successfully',
            'image_url' => asset($imagePath),
            'video_url' => asset($videoPath)
        ]);
    }
    private function handleFileUpload($request, $fieldName, $folderName, $type)
    {
        if ($type === 'image') {
            if ($request->file($fieldName)) {
                $image = $request->file($fieldName);
                $imageName = time() . '_' . $image->getClientOriginalName();

                $directory = public_path('assets/images/' . $folderName . '/');

                if (!File::exists($directory)) {
                    File::makeDirectory($directory, 0777, true, true);
                }

                $image->move($directory, $imageName);

                return 'assets/images/' . $folderName . '/' . $imageName;
            }
        } elseif ($type === 'video') {
            if ($request->file($fieldName)) {
                $video = $request->file($fieldName);
                $videoName = time() . '_' . $video->getClientOriginalName();

                $directory = public_path('assets/videos/' . $folderName . '/');

                if (!File::exists($directory)) {
                    File::makeDirectory($directory, 0777, true, true);
                }

                $video->move($directory, $videoName);

                return 'assets/videos/' . $folderName . '/' . $videoName;
            }
        }

        return null;
    }


    public function sampleProfile()
    {

        return view($this->_viewPath . 'sampleProfile');

    }


    public function profile($id)

    {

        $this->data['memorial'] = $this->_memorial_model::select(
            'user_memorials.memorial_user_id as memorialID',
            'users.id as user_id',
            'users.*',
            'user_memorials.*',

            'user_occupations.*',
            'user_occupations.id as occupation_id',
            'user_occupations.memorial_user_id as occupation_memorial_id',

            'user_milestones.*',
            'user_milestones.id as milestone_id',
            'user_milestones.memorial_user_id as milestone_memorial_id',

            'user_interests.*',
            'user_interests.id as interest_id',
            'user_interests.memorial_user_id as interest_memorial_id',

            'user_cities.*',
            'user_cities.id as city_id',
            'user_cities.memorial_user_id as city_memorial_id',

            'user_academics.*',
            'user_academics.id as academic_id',
            'user_academics.memorial_user_id as academic_memorial_id',

        )
            ->where('user_memorials.keeper_id', auth()->user()->id)
            ->where('user_memorials.memorial_user_id', $id)
            ->join('users', 'users.id', '=', 'user_memorials.memorial_user_id')
            ->join('user_occupations', 'user_occupations.memorial_user_id', '=', 'user_memorials.memorial_user_id')
            ->join('user_milestones', 'user_milestones.memorial_user_id', '=', 'user_memorials.memorial_user_id')
            ->join('user_interests', 'user_interests.memorial_user_id', '=', 'user_memorials.memorial_user_id')
            ->join('user_cities', 'user_cities.memorial_user_id', '=', 'user_memorials.memorial_user_id')
            ->join('user_academics', 'user_academics.memorial_user_id', '=', 'user_memorials.memorial_user_id')
            ->join('mementos', 'mementos.memorial_user_id', '=', 'user_memorials.memorial_user_id')
            ->first();
//dd($this->data['memorial']->other_city );

        $this->data['mementos'] = Memento::where('memorial_user_id', $id)->get();
        $this->data['familys'] = Family::where('memorial_user_id', $id)->get();
//        dd($this->data['memorial']);
        return view($this->_viewPath . 'profile', $this->data);

    }

    public function comment(Request $request)
    {
        // Validate the request data
        $request->validate([
            'content' => 'required|string',
            'sender_id' => 'required|numeric',
            'receiver_id' => 'required|numeric',
        ]);

        // Create a new comment
        $comment = Comment::create([
            'content' => $request->input('content'),
            'sender_id' => $request->input('sender_id'),
            'receiver_id' => $request->input('receiver_id'),
        ]);

        // Return a response
        return response()->json([
            'success' => true,
            'message' => 'Comment posted successfully',
            'comment' => $comment,
        ]);
    }


    private function deleteFiles($filePath)
    {
        if ($filePath) {
            $fullPath = public_path($filePath);
            if (File::exists($fullPath)) {
                File::delete($fullPath);
            }
        }
    }


}
