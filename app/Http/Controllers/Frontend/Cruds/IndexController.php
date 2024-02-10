<?php

namespace App\Http\Controllers\Frontend\Cruds;

use App\Http\Controllers\Controller;
use App\Models\FrontendIndex;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{

    protected $_viewPath;
    protected $data = array();

    public function __construct()
    {
        $this->_model = new FrontendIndex();
        $this->setDefaultData();
    }

    private function setDefaultData()
    {
        $this->_viewPath = 'backend.frontend.index.';
        $this->data['moduleName'] = 'pages';
    }
    public function index()
    {
        $this->data['index'] = $this->_model::all();
        return view( $this->_viewPath.'list-frontend-index', $this->data);
    }


    public function create()
        {
            return view( $this->_viewPath.'create-frontend-index');
        }

        public function store(Request $request)
        {

            $request->validate([
                'index_image_heading' => 'required',
                'index_image' => 'required',
                'index_card_image_heading' => 'required',
                'index_card_image' => 'required',
                'index_card_image_description' => 'required', // Add validation for index_card_image_description
            ]);

            $data['frontend_index'] = $this->_model;
            $data['frontend_index']->index_image_heading = $request->index_image_heading;
            $data['frontend_index']->index_card_image_heading = $request->index_card_image_heading;
            $data['frontend_index']->index_card_image_description = $request->index_card_image_description;
            $indexImageName = $this->handleFileUpload($request, 'index_image', 'frontend_index');
            $indexCardImageName = $this->handleFileUpload($request, 'index_card_image', 'frontend_index');
            $data['frontend_index']->index_image = $indexImageName;
            $data['frontend_index']->index_card_image = $indexCardImageName;
            $check =  $data['frontend_index']->save();

            if ($check) {
                $msg = "frontend index added successfully.";
                Session::flash('message', $msg);
            } else {
                $msg = "frontend index not added successfully.";
                Session::flash('required fields empty', $msg);
            }

            return redirect()->back();
        }

        public function edit($id)
        {
            $this->data['index'] = $this->_model::findOrFail($id);
            return view( $this->_viewPath.'edit-frontend-index', $this->data);
        }

        public function update(Request $request, $id)
        {
            $request->validate([
                'index_image_heading' => 'required',
                'index_image' => 'nullable',
                'index_card_image_heading' => 'required',
                'index_card_image' => 'nullable',
                'index_card_image_description' => 'required',

            ]);

            $frontendIndex = FrontendIndex::find($id);

            $data = $request->all();

            if ($request->file('index_image')) {

                $this->deleteFiles($frontendIndex->index_image);

                $data['index_image'] = $this->handleFileUpload($request, 'index_image', 'frontend_index');
            }
            if ($request->file('index_card_image')) {

                $this->deleteFiles($frontendIndex->index_card_image);

                $data['index_card_image'] = $this->handleFileUpload($request, 'index_card_image', 'frontend_index');
            }
            $check = $frontendIndex->update($data);

            if ($check) {
                $msg = "frontend Index updated successfully.";
                Session::flash('message', $msg);
            } else {
                $msg = "frontend Index not updated successfully.";
                Session::flash('required fields empty', $msg);
            }

            return redirect()->back();
        }


        public function destroy($id)
        {
            $frontendIndex = $this->_model::findOrFail($id);
            $this->deleteFiles($frontendIndex->index_image);
            $this->deleteFiles($frontendIndex->index_card_image);
            $check = $frontendIndex->delete();

            if ($check) {
                $msg = "frontend Index deleted successfully.";
                Session::flash('info_deleted', $msg);
            } else {
                $msg = "frontend Index not updated successfully.";
                Session::flash('required fields empty', $msg);
            }
            return redirect()->back();
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
