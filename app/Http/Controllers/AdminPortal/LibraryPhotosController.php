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
        return view($this->_viewPath . 'list-library', $this->data);

    }

    public function create()
    {
        return view($this->_viewPath . 'create-library');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust max file size as needed
            'theme_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }


        $this->data['libraries'] = $this->_model;

        $profile_image = $this->handleFileUpload($request, 'profile_image', 'profile_image');
        $theme_image = $this->handleFileUpload($request, 'theme_image', 'theme_image');


        $this->data['libraries']->profile_image = $profile_image;
        $this->data['libraries']->theme_image = $theme_image;

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
        return view($this->_viewPath . 'edit-library', $this->data);


    }

    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:6048',
            'theme_image' => 'image|mimes:jpeg,png,jpg,gif|max:6048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $library = $this->_model::find($id);

        if ($library) {
            // Delete existing files before updating
            if ($request->profile_image) {
                $this->deleteFiles($library->profile_image);

                $profile_image = $this->handleFileUpload($request, 'profile_image', 'profile_image');
                $library->profile_image = $profile_image;

            }

            if ($request->theme_image) {
                $this->deleteFiles($library->theme_image);
                $theme_image = $this->handleFileUpload($request, 'theme_image', 'theme_image');
                $library->theme_image = $theme_image;

            }

            // Handle file uploads


            // Update library record


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

    public function destroy($id)
    {
        $library = $this->_model::find($id);
        if ($library) {
            $this->deleteFiles($library->profile_image);
            $this->deleteFiles($library->theme_image);
            $check = $library->delete();
            if ($check) {
                $msg = "Library deleted successfully.";
                Session::flash('info_deleted', $msg);
            } else {
                $msg = "Library not deleted successfully.";
                Session::flash('required fields empty', $msg);
            }
            return redirect()->back();
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

    private function handleFileUpload($request, $fieldName, $folderName)
    {

        if ($request->file($fieldName)) {
            $image = $request->file($fieldName);
            $imageName = time() . '_' . $image->getClientOriginalName();

            $directory = public_path('assets/images/library_images/' . $folderName . '/');

            if (!File::exists($directory)) {
                File::makeDirectory($directory, 0777, true, true);
            }

            $image->move($directory, $imageName);

            return 'assets/images/library_images/' . $folderName . '/' . $imageName;
        }

        return null;
    }
}
