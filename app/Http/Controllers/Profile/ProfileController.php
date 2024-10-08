<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Family;
use App\Models\LibraryPhoto;
use App\Models\Memento;
use App\Models\Relation;
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
        $check = UserMemorial::where('keeper_id', $id)
            ->join('users','users.id','=','user_memorials.memorial_user_id')
            ->first();

        return view($this->_viewPath . 'create-memorial', compact('user_id', 'check'));
    }

    public function storeMemorial(Request $request)
    {
        $check = UserMemorial::where('keeper_id', $request->keeperID)->exists();
        if (!$check) {
            $this->data['user'] = new User();
            $this->data['user']->first_name = $request->first_name;
            $this->data['user']->middle_name = $request->middle_name;
            $this->data['user']->last_name = $request->last_name;
            $this->data['user']->suffix = $request->suffix;
            $this->data['user']->dob = $request->dob_year . '-' . $request->dob_month . '-' . $request->dob_day; // Correct the date format
            $this->data['user']->gender = $request->gender;
            $this->data['user']->email = Str::random(5) . ' loved one is dead ' . Str::random(5);
            $this->data['user']->role_id = '3';
            $this->data['user']->password = hash::make(Str::random('6'));;

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
                $checkmemorial = $this->data['MemorialUser']->save();
                if ($checkmemorial) {
                    return response()->json([
                        'success' => true,
                        'message' => 'Memorial  has been created successfully',
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
        } else {
            return response()->json(['success' => false,
                'message' => 'Memorial already exists for this keeper',]);
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
//            dd($this->data['profile']);
            $this->data['profile_images'] = $this->_libraryPhoto_model::where('profile_image', '!=', Null)->get();

            return view($this->_viewPath . 'memorial-profile', $this->data);
        } else {
            $previousUrl = URL::previous();
            return redirect()->to($previousUrl);
        }
    }


    public function updateBasicInfoForm(Request $request, $id, $formType)
    {
        if ($formType == 'basic_info') {

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
            $this->data['basicInfoDod']->fav_saying = $request->memorial_fav_saying;
            $this->data['basicInfoDod']->resting_place = $request->memorial_resting_place;
            $this->data['basicInfoDod']->biography = $request->memorial_biography;
            $checkInfoDod = $this->data['basicInfoDod']->save();
            $memorialId = $this->data['basicInfoDod']->memorial_user_id;

            $this->data['basicInfo'] = $this->_model::where('id', $memorialId)->first();
            $this->data['basicInfo']->first_name = $request->first_name;
            $this->data['basicInfo']->last_name = $request->last_name;
            $this->data['basicInfo']->middle_name = $request->middle_name;
            $this->data['basicInfo']->suffix = $request->suffix;
            $this->data['basicInfo']->gender = $request->gender;
            $this->data['basicInfo']->dob = $dob;
            $this->data['basicInfo']->facebook = $request->facebook;
            $this->data['basicInfo']->instagram = $request->instagram;
            $this->data['basicInfo']->tiktok = $request->tiktok;

            $checkInfo = $this->data['basicInfo']->save();

            if ($checkInfo && $checkInfoDod) {
                $data = [
                    'success' => true,
                    'message' => 'Your Basic info has been updated correctly'
                ];
                return response()->json($data);
            }
            else {
                $data = [
                    'success' => false,
                    'message' => 'Your Basic info has not been updated correctly'
                ];
                return response()->json($data);
            }
        }
        elseif ($formType == 'home_info') {

            $this->data['homeCity'] = $this->_city_model::where('memorial_user_id', $id)->first();
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
        } elseif ($formType == 'other_info') {
            $this->data['otherCity'] = $this->_city_model::where('memorial_user_id', $id)->first();
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
                $this->data['otherCity']->memorial_user_id = $id;
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
            } else {
                $data = [
                    'success' => false,
                    'message' => 'Your Occupation information has not been updated correctly'
                ];
                return response()->json($data);
            }
        }
        elseif ($formType == 'academic_info') {

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
        } elseif ($formType == 'milestone_info') {
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
        } elseif ($formType == 'religion_info') {
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
            if ($checkInterestInfo) {
                $data = [
                    'success' => true,
                    'message' => 'Your Interest information has been updated correctly'
                ];
                return response()->json($data);
            }
        }

    }


    public function updateMementoInfoProfile(Request $request, $id, $formType)
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

        } elseif ($formType == 'profile_image_library') {
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

        } elseif ($formType == 'theme_image_custom') {

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
                        'message' => 'Your Cover Photo Image Custom  has been updated correctly',
                    ]);
                } else {
                    return response()->json([
                        'success' => false,
                        'message' => 'Failed to update Cover Photo image Custom ',
                    ]);
                }
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'No file provided for Cover Photo Custom image update',
                ]);
            }

        } elseif ($formType == 'theme_image_library') {
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
                        'message' => 'Your Cover Photo from Library Image has been updated correctly',
                    ]);
                } else {
                    return response()->json([
                        'success' => false,
                        'message' => 'Failed to update Cover Photo from Library  image',
                    ]);
                }
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'No file provided for Cover Photo image Library  update',
                ]);
            }

        } else {
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

        $deadPerson = User::findOrFail($id); // Fetch the dead person by their ID
        $familyMembers = Family::where('memorial_user_id', $id)
            ->select('users.first_name as dead_person_name', 'families.name as family_member_name',
                'families.relation_id', 'families.family_image', 'relations.relation', 'families.memorial_user_id')
            ->join('users', 'users.id', '=', 'families.memorial_user_id')
            ->join('relations', 'relations.id', '=', 'families.relation_id')
            ->get();

        $this->data['deadPerson'] = $deadPerson;
        $this->data['familyMembers'] = $familyMembers;

        $this->data['relations'] = Relation::all();
//        $this->data['grandFatherPaternal'] = $this->data['familys']->where('relation', 'grandfatherpaternal')->first();
//        $this->data['grandMotherPaternal'] = $this->data['familys']->where('relation', 'grandmotherpaternal')->first();
//        $this->data['grandFathermaternal'] = $this->data['familys']->where('relation', 'grandfathermaternal')->first();
//        $this->data['grandMothermaternal'] = $this->data['familys']->where('relation', 'grandmothermaternal')->first();
//        $this->data['Mother'] = $this->data['familys']->where('relation', 'mother')->first();
//        $this->data['Father'] = $this->data['familys']->where('relation', 'father')->first();
//        $this->data['memorial'] = User::select('users.profile_image', 'users.first_name', 'users.last_name')->where('id', $id)->first();


//        $familys = Family::where('id', $id)->get();
        return view($this->_viewPath . 'family', $this->data, compact('id',));
    }


    public function createFamily(Request $request)
    {
//
        // Validate the request data
        $request->validate([
            'name' => 'required',
            'relation' => 'required',
            'family_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'memorialID' => 'required', //
            'parent_id' => 'nullable|exists:families,id',
        ]);

        // Check if there's an existing family member with the same name and memorialID
        $familyMember = Family::where('name', $request->name)
            ->where('memorial_user_id', $request->memorialID)
            ->first();

        if ($familyMember) {
            // Update existing family member
            $familyMember->update([
                'relation' => $request->relation,
                'family_image' => $request->file('family_image') ? $request->file('family_image')->store('family_images', 'public') : $familyMember->family_image,
                'parent_id' => $request->parent_id,
            ]);

            $message = 'Family member updated successfully.';
        } else {
            // Create new family member
            $familyMember = new Family();
            $familyMember->name = $request->name;
            $familyMember->relation = $request->relation;
            $familyMember->family_image = $request->file('family_image') ? $request->file('family_image')->store('family_images', 'public') : null;
            $familyMember->memorial_user_id = $request->memorialID;
            $familyMember->parent_id = $request->parent_id;
            $family = $familyMember->save();


            if ($family) {
                return response()->json(['success' => true, 'message' => 'Family member created successfully']);
            } else {
                return response()->json(['success' => false, 'message' => 'Failed to create family member']);
            }
        }
    }


        public
        function mementos($id)
        {
            $mementos = Memento::where('memorial_user_id', $id)->get();
            return view($this->_viewPath . 'mementos', compact('id', 'mementos'));
        }

        public
        function storeMemento(Request $request)
        {
            $request->validate([
                'memento_image' => 'image|max:6000',
            ]);

            $mementoId = $request->input('userID');

            $memento = new Memento();

            $imagePath = $this->handleFileUpload($request, 'memento_image', 'mementos', 'image');
            $videoPath = $this->handleFileUpload($request, 'memento_video', 'videos', 'video');

            $memento->memento_image = $imagePath;
            $memento->memento_video = $videoPath;
            $memento->memorial_user_id = $mementoId;

            $check = $memento->save();

            if ($check) {
                $response = [
                    'success' => true,
                    'message' => '',
                ];

                if (!empty($imagePath) && !empty($videoPath)) {
                    $response['message'] = 'Memento image and video updated successfully';
                    $response['image_url'] = asset($imagePath);
                    $response['video_url'] = asset($videoPath);
                } elseif (!empty($imagePath)) {
                    $response['message'] = 'Memento image updated successfully';
                    $response['image_url'] = asset($imagePath);
                } elseif (!empty($videoPath)) {
                    $response['message'] = 'Memento video updated successfully';
                    $response['video_url'] = asset($videoPath);
                }

                return response()->json($response);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to update memento image and video',
                ]);
            }

        }

        private
        function handleFileUpload($request, $fieldName, $folderName, $type)
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


        public
        function sampleProfile()
        {

            return view($this->_viewPath . 'sampleProfile');

        }

        public
        function videos($id)
        {
            $this->data['mementos'] = Memento::select('mementos.id', 'mementos.memento_video')
                ->where('memento_video', '!=', null)
                ->where('memorial_user_id', $id)->get();
            return view($this->_viewPath . 'memorial-profile.videos', $this->data);

        }

        public
        function images($id)
        {
            $this->data['mementos'] = Memento::select('mementos.id', 'mementos.memento_image')
                ->where('memento_image', '!=', null)
                ->where('memorial_user_id', $id)->get();
            return view($this->_viewPath . 'memorial-profile.images', $this->data);

        }

        public
        function profile($id)

        {

            $this->data['memorial'] = $this->_memorial_model::
            where('user_memorials.memorial_user_id', $id)
                ->join('users', 'users.id', '=', 'user_memorials.memorial_user_id')
                ->first();

// Query and attach related data
            $this->data['memorial']->city = UserCity::where('memorial_user_id', $id)->first();
            $this->data['memorial']->occupation = UserOccupation::where('memorial_user_id', $id)->first();
            $this->data['memorial']->academics = UserAcademic::where('memorial_user_id', $id)->first();
            $this->data['memorial']->milestone = UserMilestone::where('memorial_user_id', $id)->first();
            $this->data['memorial']->interests = UserInterest::where('memorial_user_id', $id)->first();

// Fetch mementos with both images and videos
            $mementosWithImagesAndVideos = Memento::where('memorial_user_id', $id)
                ->whereNotNull('memento_image')
                ->whereNotNull('memento_video')
                ->get();

// If there are mementos with both images and videos, use them
            if ($mementosWithImagesAndVideos->isNotEmpty()) {
                $mementos = $mementosWithImagesAndVideos;
            } else {
                // If there are no mementos with both images and videos, fetch separately
                // Fetch mementos with images
                $mementosWithImages = Memento::where('memorial_user_id', $id)
                    ->whereNotNull('memento_image')
                    ->get();

                // Fetch mementos with videos
                $mementosWithVideos = Memento::where('memorial_user_id', $id)
                    ->whereNotNull('memento_video')
                    ->get();

                // Merge the two collections
                $mementos = $mementosWithImages->merge($mementosWithVideos);
            }
            $this->data['mementos'] = $mementos;
            $this->data['familys'] = Family::where('memorial_user_id', $id)->get();
            return view($this->_viewPath . 'profile', $this->data);

        }

        public
        function comment(Request $request)
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
                'status' => 'pending',
            ]);

            // Return a response
            return response()->json([
                'success' => true,
                'message' => 'Comment posted successfully',
                'comment' => $comment,
            ]);
        }

    public
    function approvecomment(Request $request)
    {
        $commentID = $request->comment_id;
        $approve = $request->approve;

       $commentApprove = Comment::where('id',$commentID)->first();
        $commentApprove->status = $approve;
        $commentApprove ->save();

        return redirect()->back()->with('success', 'Comment approved successfully');

    }

    function denycomment(Request $request)
    {
        $commentID = $request->comment_id;
        $deny = $request->denied;
        $commentApprove = Comment::where('id',$commentID)->first();
        $commentApprove->status = $request->deny;
        $commentApprove->save();

        return redirect()->back()->with('success', 'Comment denied successfully');

    }

        public
        function deleteFile(Request $request)
        {
            $fileId = $request->input('fileId');
            $filePath = $request->input('filePath');

            // Delete file from storage
            $this->deleteFiles($filePath);

            // Delete file entry from database
            $file = Memento::find($fileId);
            if ($file) {
                $file->delete();
            }

            return response()->json([
                'success' => true,
                'message' => 'File deleted successfully, it will be removed after page refresh',
            ]);
        }

        private
        function deleteFiles($filePath)
        {
            if ($filePath) {
                $fullPath = public_path($filePath);
                if (File::exists($fullPath)) {
                    File::delete($fullPath);
                }
            }
        }

        public
        function profilePicture(Request $request)
        {
            try {
                $user = User::where('id', $request->memorial_id)
                    ->firstOrFail();
            } catch (ModelNotFoundException $e) {
                return redirect()->back()->with('error', 'User not found');
            }

            $fieldName = 'profilePicture';

            if ($request->hasFile($fieldName) && $request->file($fieldName)->isValid()) {
                $image = $request->file($fieldName);
                $imageName = time() . '_' . $image->getClientOriginalName();

                $directory = public_path('assets/images/profile_images/');

                if (!File::exists($directory)) {
                    File::makeDirectory($directory, 0777, true, true);
                }

                $image->move($directory, $imageName);

                $user->profile_image = 'assets/images/profile_images/' . $imageName;
                $user->save();

                return redirect()->back()->with('success', 'Profile picture updated successfully');
            }

            return redirect()->back()->with('error', 'No valid file uploaded');
        }

        public
        function coverPicture(Request $request)
        {
            try {
                $user = User::where('id', $request->memorial_id)
                    ->firstOrFail();

            } catch (ModelNotFoundException $e) {
                return redirect()->back()->with('error', 'User not found');
            }

            $fieldName = 'coverPicture';

            if ($request->hasFile($fieldName) && $request->file($fieldName)->isValid()) {
                $image = $request->file($fieldName);
                $imageName = time() . '_' . $image->getClientOriginalName();

                $directory = public_path('assets/images/theme_images/');

                if (!File::exists($directory)) {
                    File::makeDirectory($directory, 0777, true, true);
                }

                $image->move($directory, $imageName);

                $user->theme_image = 'assets/images/theme_images/' . $imageName;
                $user->save();

                return redirect()->back()->with('success', 'Cover picture updated successfully');
            }
            return redirect()->back()->with('error', 'No valid file uploaded');

        }


    }
