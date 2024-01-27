<?php

namespace App\Http\Controllers\AdminPortal;

use App\Http\Controllers\Controller;
use App\Models\LibraryPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LibraryPhotosController extends Controller
{
    //

    public function __construct()
    {
        $this->_model = new LibraryPhoto();
        $this->setDefaultData();
    }

    private function setDefaultData()
    {
        $this->_viewPath = 'backend.library.';
        $this->data['moduleName'] = 'Library';
    }

    public function index()
    {
        $this->data['libraries'] = $this->_model::all();
        dd($this->data['libraries']);
        return view($this->_viewPath . 'list-library', $this->data);

    }

    public function create()
    {
        return view($this->_viewPath . 'create-library');
    }

    public function store(Request $request)
    {
        dd($request);
        $validator = Validator::make($request->all(), [
            'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust max file size as needed
            'icon_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'theme_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'category'=>'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }


        $this->data['libraries'] = $this->_model;

        $profile_image = $this->handleFileUpload($request, 'profile_image','profile_image');
        $icon_image = $this->handleFileUpload($request, 'icon_image','icon_image');
        $theme_image = $this->handleFileUpload($request, 'theme_image','theme_image');


        $this->data['libraries']->profile_image = $profile_image;
        $this->data['libraries']->icon_image = $icon_image;
        $this->data['libraries']->theme_image = $theme_image;
        $this->data['libraries']->category = $request->category;

        $check = $this->data['libraries']->save();
        if ($check) {
            $msg = "Library Photos added successfully.";
            Session::flash('message', $msg);
        } else {
            $msg = "Library Photos not added successfully.";
            Session::flash('required fields empty', $msg);
        }
        return redirect()->back();
    }

    public function edit($id)
    {
        $this->data['library'] = $this->_model::find($id);
        return view($this->_viewPath . 'edit-library',$this->data);


    }

    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust max file size as needed
            'icon_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'theme_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $library = $this->_model::find($id);

        if ($library) {
            // Delete existing files before updating
            $this->deleteFiles($library->profile_image);
            $this->deleteFiles($library->icon_image);

            $this->deleteFiles($library->theme_image);

            // Handle file uploads
            $profile_image = $this->handleFileUpload($request, 'profile_image', 'profile_image');
            $icon_image = $this->handleFileUpload($request, 'icon_image', 'icon_image');
            $theme_image = $this->handleFileUpload($request, 'theme_image', 'theme_image');


            // Update library record
            $library->profile_image = $profile_image;
            $library->icon = $icon_image;
            $library->theme = $theme_image;
            $library->category = $request->category;


            $check = $library->save();

            if ($check) {
                $msg = "Library Photos updated successfully.";
                Session::flash('message', $msg);
            } else {
                $msg = "Library Photos not updated successfully.";
                Session::flash('required fields empty', $msg);
            }

            return redirect()->back();
        }
        // Redirect back with an error message if the library doesn't exist
        return redirect()->back()->with('error', 'Library not found.');
    }
    public function delete($id)
    {
        $library = $this->_model::find($id);


        if ($library) {
            $this->deleteFiles($library->profile_image);
            $this->deleteFiles($library->icon_image);
            $this->deleteFiles($library->theme_image);
            $library->delete();
            return redirect()->back()->with('success', 'Library and associated files deleted successfully.');
        }
        // Redirect back with an error message if the library doesn't exist
        return redirect()->back()->with('error', 'Library not found.');
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

    private function handleFileUpload($request, $fieldName,$folderName)
    {

        if ($request->hasFile($fieldName)) {
            $image = $request->file($fieldName);
            $imageName = time() . '_' . $image->getClientOriginalName();

            $directory = public_path('assets/images/library_images/'.$folderName.'/');

            if (!File::exists($directory)) {
                File::makeDirectory($directory, 0777, true, true);
            }

            $image->move($directory, $imageName);

            return 'assets/images/library_images/'.$folderName.'/'. $imageName;
        }

        return null;
    }
}
