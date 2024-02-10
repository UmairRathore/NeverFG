<?php

namespace App\Http\Controllers\Frontend\Cruds;

use App\Http\Controllers\Controller;
use App\Models\FrontendFeature;
use App\Models\Frontendfeatures;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class FeatureController extends Controller
{
    //

    protected $_viewPath;
    protected $data = array();

    public function __construct()
    {
        $this->_model = new FrontendFeature();
        $this->setDefaultData();
    }

    private function setDefaultData()
    {
        $this->_viewPath = 'backend.frontend.feature.';
        $this->data['moduleName'] = 'pages';
    }
    public function index()
    {
        $this->data['features'] = $this->_model::all();
        return view( $this->_viewPath.'list-frontend-feature', $this->data);
    }


    public function create()
    {
        return view( $this->_viewPath.'create-frontend-feature');
    }

    public function store(Request $request)
    {
        $request->validate([
            'frontend_feature_description' => 'required',
            'frontend_feature_title' => 'required',
            'frontend_feature_image' => 'required',
        ]);

        $FeatureImageName = $this->handleFileUpload($request, 'frontend_feature_image', 'frontend_feature');
        $data = $request->all();
        $data['frontend_feature_image'] = $FeatureImageName;
        $check = $this->_model::create($data);

        if ($check) {
            $msg = "frontend feature added successfully.";
            Session::flash('message', $msg);
        } else {
            $msg = "frontend feature not added successfully.";
            Session::flash('required fields empty', $msg);
        }

        return redirect()->back();
    }

    public function edit($id)
    {
        $this->data['features'] = $this->_model::findOrFail($id);
        return view( $this->_viewPath.'edit-frontend-feature', $this->data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'frontend_feature_description' => 'required',
            'frontend_feature_title' => 'required',
            'frontend_feature_image' => 'required',
        ]);
        $frontendFeature = $this->_model::findOrFail($id);
        $data = $request->all();

        if ($request->file('frontend_feature_image')) {

            $this->deleteFiles($frontendFeature->frontend_feature_image);

            $data['frontend_feature_image'] = $this->handleFileUpload($request, 'frontend_feature_image', 'frontend_feature');
        }

        $check = $frontendFeature->update($data);


        if ($check) {
            $msg = "frontend feature updated successfully.";
            Session::flash('message', $msg);
        } else {
            $msg = "frontend feature not updated successfully.";
            Session::flash('required fields empty', $msg);
        }

        return redirect()->back();
    }


    public function destroy($id)
    {
        $frontendFeature = $this->_model::findOrFail($id);
        $this->deleteFiles($frontendFeature->frontend_feature_image);
        $frontendFeature->delete();

        return redirect()->back()
            ->with('success', 'Item deleted successfully.');
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

        if ($request->file($fieldName)) {
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
