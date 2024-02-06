<?php

namespace App\Http\Controllers\Frontend\Cruds;

use App\Http\Controllers\Controller;
use App\Models\FrontendFeature;
use App\Models\FrontendVirtualFuneral;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class VirtualFuneralController extends Controller
{
    //
    protected $_viewPath;
    protected $data = array();

    public function __construct()
    {
        $this->_model = new FrontendVirtualFuneral();
        $this->setDefaultData();
    }

    private function setDefaultData()
    {
        $this->_viewPath = 'backend.frontend.virtualfuneral.';
        $this->data['moduleName'] = 'pages';
    }
    public function index()
    {
        $this->data['virtualFuneral'] = $this->_model::all();
        return view( $this->_viewPath.'list-frontend-virtualfuneral', $this->data);
    }


    public function create()
    {
        return view( $this->_viewPath.'create-frontend-virtualfuneral');
    }

    public function store(Request $request)
    {
        $request->validate([
            'frontend_virtual_funeral_description' => 'required',
            'frontend_virtual_funeral_title' => 'required',
            'frontend_virtual_funeral_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $FeatureImageName = $this->handleFileUpload($request, 'virtual_funeral_image', 'frontend_feature');
        $data = $request->all();
        $data['frontend_virtual_funeral_image'] = $FeatureImageName;
        $this->_model::create($data);
        return redirect()->back()->with('success', 'Item created successfully.');
    }

    public function edit($id)
    {
        $this->data['virtualFuneral'] = $this->_model::findOrFail($id);
        return view( $this->_viewPath.'edit-frontend-virtualfuneral', $this->data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'frontend_virtual_funeral_description' => 'required',
            'frontend_virtual_funeral_title' => 'required',
            'frontend_virtual_funeral_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $frontendFeature = $this->_model::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('frontend_virtual_funeral_image')) {

            $this->deleteFiles($frontendFeature->frontend_virtual_funeral_image);

            $data['frontend_virtual_funeral_image'] = $this->handleFileUpload($request, 'virtual_funeral_image', 'frontend_feature');
        }

        $frontendFeature->update($data);

        return redirect()->back()
            ->with('success', 'Item updated successfully.');
    }


    public function destroy($id)
    {
        $frontendFeature = $this->_model::findOrFail($id);
        $this->deleteFiles($frontendFeature->frontend_virtual_funeral_image);
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
